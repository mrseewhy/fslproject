<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.myguest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; 

?>



<div x-data="{ 
    showPassword: true
}">
    <section class="flex flex-col lg:flex-row items-center justify-center ">
        <!-- Wrapper -->
        <div class="w-full flex flex-col lg:flex-row lg:space-x-8 items-center justify-center">
            <!-- Left Section (Image) -->
            <div class="lg:w-1/2 w-full">
                <img src="/images/getstarted.jpg" 
                     alt="Get Started Image" 
                     class="w-full h-72 lg:h-screen object-cover object-top shadow-lg">
            </div>

            <!-- Right Section (Form) -->
            <div class="lg:w-1/2 w-full space-y-8 lg:pr-16 p-4 lg:p-0 mt-16">
                <h2 style="font-family: 'Montserrat', sans-serif;" 
                    class="text-3xl font-bold mb-6 text-center lg:text-left">
                    Log in
                </h2>

                <!-- Session Status (for error or success messages) -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form wire:submit.prevent="login" class="space-y-4">
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model="form.email" id="email" 
                                      class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                      type="email" name="email" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <div class="relative">
                            <x-text-input wire:model="form.password" id="password" 
                                          :type="showPassword ? 'text' : 'password'" 
                                          class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                          type="password" name="password" required autocomplete="current-password" />
                            <button type="button" 
                                    @click="showPassword = !showPassword" 
                                    class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500">
                                <span x-text="showPassword ? 'Hide' : 'Show'"></span>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember" class="inline-flex items-center">
                            <input wire:model="form.remember" id="remember" 
                                   type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                                   name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <!-- Forgot Password Link -->
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                               href="{{ route('password.request') }}" wire:navigate>
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <!-- Submit Button -->
                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

