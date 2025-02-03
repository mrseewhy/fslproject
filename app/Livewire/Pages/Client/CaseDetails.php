<?php

namespace App\Livewire\Pages\Client;

use Livewire\Component;
use App\Models\Casefile;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;


#[Layout('layouts.client')]

class CaseDetails extends Component
{

    public $id;
    public $case;
    public function mount($id){
        $this->id = $id;
        $case = Casefile::findOrFail($id);

        if(Auth::user()->id === $case->user->id){
            $this->case = $case;
        } 
        else{
            return $this->redirect('/login');
        }
    }
    public function goBack()
    {
        return $this->redirect(url()->previous(), navigate: true);
    }
    public function render()
    {
        return view('livewire.pages.client.case-details');
    }
}
