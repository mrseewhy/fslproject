<?php

namespace App\Livewire\Pages\Client;

use Livewire\Component;
use App\Models\Casefile;
use Livewire\Attributes\Layout;

#[Layout('layouts.client')]

class AllCaseFile extends Component
{
    public function render()
    {
        $allCaseFiles = Casefile::latest()->paginate();
        return view('livewire.pages.client.all-case-file', [
            'allCaseFiles'=> $allCaseFiles
        ]);
    }
}
