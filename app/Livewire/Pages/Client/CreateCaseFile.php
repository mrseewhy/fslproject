<?php

namespace App\Livewire\Pages\Client;

use DOMDocument;
use Livewire\Component;
use App\Models\Casefile;
use Livewire\WithFileUploads;
use App\Models\GeneratedNumber;
use Livewire\Attributes\Layout;
use App\Models\CaseFileDocuments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

#[Layout('layouts.client')]

class CreateCaseFile extends Component
{
    use WithFileUploads;

    public $fileInputs = [];
    public $files = [];

    public array $documentNames = [];
    public $title;
    public $description;
    public $summary;
    public $casefilenumber;
    public $gen_rand_no;

    public function mount()
    {
        // Initialize with one file input
        $this->fileInputs = [['id' => 0]];
        $this->documentNames = ['']; 

    }

    public function addFileInput()
    {
        $this->fileInputs[] = ['id' => count($this->fileInputs)];
        $this->documentNames[] = '';
    }

    public function removeFileInput($index)
    {
        unset($this->fileInputs[$index]);
        unset($this->files[$index]);
        unset($this->documentNames[$index]);
        
        $this->fileInputs = array_values($this->fileInputs);
        $this->files = array_values($this->files);
        $this->documentNames = array_values($this->documentNames);
    }

    protected function generateRandomNumbers()
    {
        do {
            $number = mt_rand(100000, 9999999999);
        } while (GeneratedNumber::where('number', $number)->exists());

        GeneratedNumber::create(['number' => $number]);

        return $number;
    }

    protected function savedata($data){
          // Process description images
          $dom = new DOMDocument();
          libxml_use_internal_errors(true); // Suppress HTML5 errors
          $dom->loadHTML($data, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
          libxml_clear_errors();
  
          $images = $dom->getElementsByTagName('img');
          
          // Process each image in the description
          foreach ($images as $key => $img) {
              $srcAttribute = $img->getAttribute('src');
              if (strpos($srcAttribute, 'base64') !== false) {
                  $data = base64_decode(explode(',', explode(';', $srcAttribute)[1])[1]);
                  $image_name = "/upload/" . time() . $key . '.png';
                  file_put_contents(public_path() . $image_name, $data);
                  
                  $img->removeAttribute('src');
                  $img->setAttribute('src', $image_name);
              }
          }
          
          $data = $dom->saveHTML();
    }
    public function submitCaseFile()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'summary' => 'required|min:3',
                  
            ]);

        // Process description images
        $this->savedata($validatedData['description']);
        $this->savedata($validatedData['summary']);
        

        // Generate case file number
        $this->gen_rand_no = $this->generateRandomNumbers();
        $this->casefilenumber = 'FSL-CF-' . $this->gen_rand_no;

        // Create the case file
        $newCase = Casefile::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'summary' => $validatedData['summary'],
            'user_id' => Auth::user()->id,
            'number' => $this->casefilenumber
        ]);

        //Add Case to Session
        Session::put('case_id', $newCase->id);

        // Handle file uploads
        if($this->files){
            $validatedData = $this->validate([
                'files.*' => 'required|file|max:10240', // 10MB Max
                'documentNames.*' => 'required|string|max:255',         
                ]);

            foreach ($this->files as $index => $file) {
                $filename = time() . '_' . $index . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('case_files/' . $newCase->id, $filename, 'public');
    
                // Create a new CaseFileDocument
                CaseFileDocuments::create([
                    'casefile_id' => $newCase->id,
                    'path' => $path,
                    'document_name' => $this->documentNames[$index] ?? 'Default Document Name', // Fallback value
                    'original_name' => $file->getClientOriginalName(),
    
                ]);
            }
        }
        session()->flash('message', 'Case file created successfully!');
        
        // Reset the form
        $this->reset(['files', 'fileInputs', 'title', 'description', 'summary', 'documentNames']);
        $this->fileInputs = [['id' => 0]];
        $this->documentNames = [''];

        return $this->redirect('/client/contract-agreement');
    }

    public function render()
    {
        return view('livewire.pages.client.create-case-file');
    }
}