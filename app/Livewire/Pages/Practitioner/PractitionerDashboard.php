<?php

namespace App\Livewire\Pages\Practitioner;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.practitioner')]

class PractitionerDashboard extends Component
{
    public function render()
    {
        return view('livewire.pages.practitioner.practitioner-dashboard');
    }
}
