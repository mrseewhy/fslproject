<?php

namespace App\Livewire\Pages\Client;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.client')]


class ClientDashboard extends Component
{
    public function render()
    {
        $allcases = Auth::user()->caseFiles()->latest()->paginate(5);
        return view('livewire.pages.client.client-dashboard', [
            'allcases'=> $allcases
        ]);
    }
}
