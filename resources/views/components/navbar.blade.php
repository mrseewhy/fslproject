

<!-- resources/views/components/navbar.blade.php -->
<nav x-data="{ mobileMenuOpen: false }" class="bg-white shadow-md fixed z-50 w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo (Left Side) -->
            <div class="flex items-center">
                <a wire:navigate href="{{ route('home') }}" class="flex-shrink-0">
                    <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="Your Logo">
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    type="button" 
                    class="inline-flex items-center justify-center p-2 rounded-md text-white bg-[#4567B7] hover:bg-opacity-90 focus:outline-none"
                >
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger Icon -->
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close Icon -->
                    <svg x-show="mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation Menu -->
            <div class="hidden md:flex md:items-center md:justify-center md:flex-1">
                <div class="flex space-x-8">
                    <a wire:navigate href="{{ route('home') }}" class="text-black font-bold hover:text-[#4567B7] px-3 py-2 {{ request()->routeIs('home') ? 'text-[#4567B7]' : '' }}">Home</a>
                    <a wire:navigate href="{{ route('about') }}" class="text-black font-bold hover:text-[#4567B7] px-3 py-2 {{ request()->routeIs('about') ? 'text-[#4567B7]' : '' }}">About</a>
                    <a wire:navigate href="{{ route('services') }}" class="text-black font-bold hover:text-[#4567B7] px-3 py-2 {{ request()->routeIs('services') ? 'text-[#4567B7]' : '' }}">Services</a>
                    <a wire:navigate href="{{ route('sectors') }}" class="text-black font-bold hover:text-[#4567B7] px-3 py-2 {{ request()->routeIs('sectors') ? 'text-[#4567B7]' : '' }}">Sectors</a>
                    <a wire:navigate href="{{ route('gallery') }}" class="text-black font-bold hover:text-[#4567B7] px-3 py-2 {{ request()->routeIs('gallery') ? 'text-[#4567B7]' : '' }}">Gallery</a>
                    <a wire:navigate href="{{ route('contact') }}" class="text-black font-bold hover:text-[#4567B7] px-3 py-2 {{ request()->routeIs('contact') ? 'text-[#4567B7]' : '' }}">Contact</a>
                </div>
            </div>

            <!-- Desktop Right Side Buttons -->
            <div class="hidden md:flex md:items-center md:space-x-4">
                @guest
                    <a wire:navigate href="{{ route('login') }}" class="text-gray-800 font-bold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                        Login
                    </a>
                    <a wire:navigate href="{{ route('get-started') }}" class="bg-[#4567B7] text-white font-bold px-4 py-2 rounded-md hover:bg-opacity-90">
                        Get Started
                    </a>
                @endguest
                @auth
                    <a wire:navigate href="{{ route('dashboard') }}" class="bg-[#4567B7] text-white font-bold px-4 py-2 rounded-md hover:bg-opacity-90">
                        Dashboard
                    </a>
                    {{-- <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf --}}
                        <button wire:click="logout" type="submit" class="text-gray-800 font-bold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                            Logout
                        </button>
                       
                    {{-- </form> --}}
                    {{-- <a href="{{route('logout')}}"  
                            wire:navigate 
                            class="w-full text-gray-800 font-bold text-center border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                Logout
                            </a> --}}
                @endauth
            </div>

            <!-- Mobile Menu (Dropdown) -->
            <div 
                x-show="mobileMenuOpen" 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute top-16 inset-x-0 p-2 md:hidden bg-white shadow-lg z-50"
            >
                <div class="pt-2 pb-3 space-y-1">
                    <a wire:navigate href="{{ route('home') }}" class="text-black font-bold block px-3 py-2 hover:text-[#4567B7] {{ request()->routeIs('home') ? 'text-[#4567B7]' : '' }}">Home</a>
                    <a wire:navigate href="{{ route('about') }}" class="text-black font-bold block px-3 py-2 hover:text-[#4567B7] {{ request()->routeIs('about') ? 'text-[#4567B7]' : '' }}">About</a>
                    <a wire:navigate href="{{ route('services') }}" class="text-black font-bold block px-3 py-2 hover:text-[#4567B7] {{ request()->routeIs('services') ? 'text-[#4567B7]' : '' }}">Services</a>
                    <a wire:navigate href="{{ route('sectors') }}" class="text-black font-bold block px-3 py-2 hover:text-[#4567B7] {{ request()->routeIs('sectors') ? 'text-[#4567B7]' : '' }}">Sectors</a>
                    <a wire:navigate href="{{ route('gallery') }}" class="text-black font-bold block px-3 py-2 hover:text-[#4567B7] {{ request()->routeIs('gallery') ? 'text-[#4567B7]' : '' }}">Gallery</a>
                    <a wire:navigate href="{{ route('contact') }}" class="text-black font-bold block px-3 py-2 hover:text-[#4567B7] {{ request()->routeIs('contact') ? 'text-[#4567B7]' : '' }}">Contact</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="space-y-2 px-2">
                        @guest
                            <a wire:navigate href="{{ route('login') }}" class="block text-gray-800 font-bold text-center border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                Login
                            </a>
                            <a wire:navigate href="{{ route('get-started') }}" class="block bg-[#4567B7] text-white font-bold text-center px-4 py-2 rounded-md hover:bg-opacity-90">
                                Get Started
                            </a>
                        @endguest
                        @auth
                            <a wire:navigate href="{{ route('dashboard') }}" class="block bg-[#4567B7] text-white font-bold text-center px-4 py-2 rounded-md hover:bg-opacity-90">
                                Dashboard
                            </a>
                                {{-- <button type="submit" class="w-full text-gray-800 font-bold text-center border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                    Logout
                                </button> --}}
                                <button wire:click="logout" type="submit" class="text-gray-800 font-bold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                    Logout
                                </button>
                            {{-- <a href="{{route('logout')}}"  
                            wire:navigate 
                            class="w-full text-gray-800 font-bold text-center border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                Logout
                            </a> --}}
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
