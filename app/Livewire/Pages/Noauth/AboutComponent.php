<?php

namespace App\Livewire\Pages\Noauth;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.myguest')]
class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.noauth.about-component');
    }
}
