<?php

namespace App\Livewire\Comps;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navigation extends Component
{

    public $currentRoute;

    public function mount()
    {
        $this->currentRoute = request()->route()->getName();
    }

    public function setActiveRoute($route)
    {
        $this->currentRoute = $route;
    }
    public function logout()
    {
        Auth::logout();
        session()->invalidate(); // Optional
        session()->regenerateToken(); // Optional
    
        return $this->redirect('/', navigate: true); // This works in SPA mode.
    }
    public function render()
    {
        return view('livewire.comps.navigation');
    }
}
