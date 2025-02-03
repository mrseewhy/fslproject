<?php

namespace App\Livewire\Pages\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.myguest')]


class HomePageComponent extends Component
{

    public function logout(){
        Auth::logout();
        session()->flash('message', 'You have been logged out successfully.');
    
        // Redirect after logout
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.pages.noauth.home-page-component');
    }
}
