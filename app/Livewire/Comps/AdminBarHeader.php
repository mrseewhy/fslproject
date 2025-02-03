<?php

namespace App\Livewire\Comps;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminBarHeader extends Component
{

    public function logout()
    {
        Auth::logout();
        session()->invalidate(); // Optional
        session()->regenerateToken(); // Optional
    
        return $this->redirect('/', navigate: true); // This works in SPA mode.
    }
    public function render()
    {
        return view('livewire.comps.admin-bar-header');
    }
}
