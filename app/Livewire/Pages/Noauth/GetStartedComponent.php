<?php

namespace App\Livewire\Pages\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Session;

#[Layout('layouts.myguest')]

class GetStartedComponent extends Component
{
    public $userType = null;

    public function saveUserType()
{
    // Validate user type
    if (!$this->userType) {
        session()->flash('error', 'Please select a user category.');
        return;
    }

    // Proper validation rule (fixed the `in` rule)
    $validated = $this->validate([
        'userType' => 'required|in:client,practitioner', // Corrected the `in` rule
    ]);

    // Save userType to session
    session(['userType' => $validated['userType']]); // Ensure consistent naming

    // Debugging
    // dd(session('userType')); // Using `session()` helper for clarity

    // Redirect to the registration page
    return redirect()->route('register');
}


       public function render()
    {
        return view('livewire.pages.noauth.get-started-component');
    }
}
