<?php

namespace App\Livewire\Pages\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.myguest')]

class GalleryComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.noauth.gallery-component');
    }
}
