<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.myguest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['user_type'] = Session::get('userType');

        event(new Registered($user = User::create($validated)));
        session()->forget('userType');
        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

{{-- <div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div> --}}

<div x-data="{ 
    showPassword: false, 
    showConfirmPassword: false 
}">
    <section class="flex flex-col lg:flex-row items-center justify-center">
        <!-- Wrapper -->
        <div class="w-full flex flex-col lg:flex-row lg:space-x-8 ">
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
                    Register
                </h2>

                <form wire:submit.prevent="register" class="space-y-4">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block font-medium text-gray-700">Name</label>
                        <input wire:model="name" id="name" 
                               class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                               type="text" name="name" required autofocus autocomplete="name" />
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block font-medium text-gray-700">Email</label>
                        <input wire:model="email" id="email" 
                               class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                               type="email" name="email" required autocomplete="username" />
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <input wire:model="password" id="password" 
                                   :type="showPassword ? 'text' : 'password'" 
                                   class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                   type="password" name="password" required autocomplete="new-password" />
                            <button type="button" 
                                    @click="showPassword = !showPassword" 
                                    class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500">
                                <span x-text="showPassword ? 'Hide' : 'Show'"></span>
                            </button>
                        </div>
                        @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block font-medium text-gray-700">Confirm Password</label>
                        <div class="relative">
                            <input wire:model="password_confirmation" id="password_confirmation" 
                                   :type="showConfirmPassword ? 'text' : 'password'" 
                                   class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                   type="password" name="password_confirmation" required autocomplete="new-password" />
                            <button type="button" 
                                    @click="showConfirmPassword = !showConfirmPassword" 
                                    class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500">
                                <span x-text="showConfirmPassword ? 'Hide' : 'Show'"></span>
                            </button>
                        </div>
                        @error('password_confirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Register Button and Link -->
                    <div class="flex items-center justify-between mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" wire:navigate>
                            Already registered?
                        </a>
                        <button type="submit" 
                                class="bg-indigo-600 text-white py-2 px-6 rounded-full hover:bg-indigo-700 transition duration-300">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>






