{{-- <div x-data="{ mobileMenuOpen: false }">
<nav class="bg-blue-50 fixed z-50 w-full">
    <div class="max-w-8xl mx-auto px-2 sm:px-4 lg:px-6">
        <div class="flex justify-between h-20 items-center">
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
                    class="inline-flex items-center justify-center p-2 rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:outline-none"
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
                
                <div wire:ignore class="flex space-x-8 font-Mont text-sm">
                    <a 
                        wire:click="setActiveRoute('home')" 
                        wire:navigate 
                        href="{{ route('home') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'home' ? 'text-blue-800' : '' }}">
                        Home
                    </a>
                    <a 
                        wire:click="setActiveRoute('about')" 
                        wire:navigate 
                        href="{{ route('about') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'about' ? 'text-blue-800' : '' }}">
                        About
                    </a>
                    <a 
                        wire:click="setActiveRoute('our-offer')" 
                        wire:navigate 
                        href="{{ route('our-offer') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'our-offer' ? 'text-blue-800' : '' }}">
                        Our Offer
                    </a>
                   
                    <a 
                        wire:click="setActiveRoute('how-it-works')" 
                        wire:navigate 
                        href="{{ route('how-it-works') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'how-it-works' ? 'text-blue-800' : '' }}">
                        How it Works
                    </a>
                    <a 
                        wire:click="setActiveRoute('benefits')" 
                        wire:navigate 
                        href="{{ route('benefits') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'benefits' ? 'text-blue-800' : '' }}">
                        Benefits
                    </a>
                    <a 
                        wire:click="setActiveRoute('faqs')" 
                        wire:navigate 
                        href="{{ route('faqs') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'faqs' ? 'text-blue-800' : '' }}">
                        FAQs
                    </a>
                    <a 
                        wire:click="setActiveRoute('contact')" 
                        wire:navigate 
                        href="{{ route('contact') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'contact' ? 'text-blue-800' : '' }}">
                        Contact
                    </a>
                </div>
                
            </div>

            <!-- Desktop Right Side Buttons -->
            <div class="hidden md:flex md:items-center md:space-x-2 text-sm font-Mont">
                @guest
                    <a wire:navigate href="{{ route('login') }}" class="text-black font-bold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                        Login
                    </a>
                    <a wire:navigate href="{{ route('get-started') }}" class="bg-blue-700 text-white font-bold px-4 py-2 rounded-md hover:bg-blue-800">
                        Get Started
                    </a>
                @endguest
                @auth
                    
                        <a wire:navigate href="{{ route('dashboard') }}" class="text-black font-smibold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                            Dashboard
                        </a>
                        <a wire:click='logout'  class="bg-blue-700 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-800 cursor-pointer">
                            Logout
                        </a>
                    
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
                class="absolute top-20 inset-x-0 p-2 md:hidden bg-blue-50 shadow-lg z-50"
            >
                <div class="pt-2 pb-3 space-y-1 text-sm font-Mont pl-3">
                   
                    <a 
                    wire:click="setActiveRoute('home')" 
                    wire:navigate 
                    href="{{ route('home') }}" 
                    class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'home' ? 'text-blue-800' : '' }}">
                    Home
                </a>
                <a 
                    wire:click="setActiveRoute('about')" 
                    wire:navigate 
                    href="{{ route('about') }}" 
                    class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'about' ? 'text-blue-800' : '' }}">
                    About
                </a>
                <a 
                    wire:click="setActiveRoute('our-offer')" 
                    wire:navigate 
                    href="{{ route('our-offer') }}" 
                    class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'our-offer' ? 'text-blue-800' : '' }}">
                    Our Offer
                </a>
                
                <a 
                    wire:click="setActiveRoute('how-it-works')" 
                    wire:navigate 
                    href="{{ route('how-it-works') }}" 
                    class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'how-it-works' ? 'text-blue-800' : '' }}">
                    How it Works
                </a>
                <a 
                    wire:click="setActiveRoute('benefits')" 
                    wire:navigate 
                    href="{{ route('benefits') }}" 
                    class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'benefits' ? 'text-blue-800' : '' }}">
                    Benefits
                </a>
                <a 
                    wire:click="setActiveRoute('faqs')" 
                    wire:navigate 
                    href="{{ route('faqs') }}" 
                    class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'faqs' ? 'text-blue-800' : '' }}">
                    FAQs
                </a>
                <a 
                    wire:click="setActiveRoute('contact')" 
                    wire:navigate 
                    href="{{ route('contact') }}" 
                    class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'contact' ? 'text-blue-800' : '' }}">
                    Contact
                </a>
                </div>
                
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="space-y-2 px-2 text-sm">
                        @guest
                            <a wire:navigate href="{{ route('login') }}" class="block text-black font-semibold text-center border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                Login
                            </a>
                            <a wire:navigate href="{{ route('get-started') }}" class="block bg-blue-700 text-white font-bold text-center px-4 py-2 rounded-md hover:bg-blue-800">
                                Get Started
                            </a>
                        @endguest
                        @auth
                        <a wire:navigate href="{{ route('dashboard') }}" class="block text-black font-semibold text-center border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                           Dashboard
                        </a>
                        <a wire:click='logout'  class="block bg-blue-700 text-white font-bold text-center px-4 py-2 rounded-md hover:bg-blue-800 cursor-pointer">
                            Logout
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
</div> --}}

<nav class="bg-blue-50 fixed z-50 w-full" x-data="{ mobileMenuOpen: false}">
    <div class="max-w-8xl mx-auto px-2 sm:px-4 lg:px-6">
        <div class="flex justify-between h-20 items-center">
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
                    class="inline-flex items-center justify-center p-2 rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:outline-none"
                    aria-expanded="false"
                    aria-controls="mobile-menu"
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
                <div wire:ignore class="flex space-x-2 font-Mont text-sm">
                    <a 
                        wire:click="setActiveRoute('home')" 
                        wire:navigate 
                        href="{{ route('home') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'home' ? 'text-blue-800' : '' }}">
                        Home
                    </a>
                    <a 
                        wire:click="setActiveRoute('about')" 
                        wire:navigate 
                        href="{{ route('about') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'about' ? 'text-blue-800' : '' }}">
                        About
                    </a>
                    <a 
                        wire:click="setActiveRoute('our-offer')" 
                        wire:navigate 
                        href="{{ route('our-offer') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'our-offer' ? 'text-blue-800' : '' }}">
                        Our Offer
                    </a>
                    <a 
                        wire:click="setActiveRoute('how-it-works')" 
                        wire:navigate 
                        href="{{ route('how-it-works') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'how-it-works' ? 'text-blue-800' : '' }}">
                        How it Works
                    </a>
                    <a 
                        wire:click="setActiveRoute('benefits')" 
                        wire:navigate 
                        href="{{ route('benefits') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'benefits' ? 'text-blue-800' : '' }}">
                        Benefits
                    </a>
                    <a 
                        wire:click="setActiveRoute('faqs')" 
                        wire:navigate 
                        href="{{ route('faqs') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'faqs' ? 'text-blue-800' : '' }}">
                        FAQs
                    </a>
                    <a 
                        wire:click="setActiveRoute('contact')" 
                        wire:navigate 
                        href="{{ route('contact') }}" 
                        class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'contact' ? 'text-blue-800' : '' }}">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Desktop Right Side Buttons -->
            <div class="hidden md:flex md:items-center md:space-x-2 text-sm font-Mont">
                @guest
                    <a wire:navigate href="{{ route('login') }}" class="text-black font-bold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                        Login
                    </a>
                    <a wire:navigate href="{{ route('get-started') }}" class="bg-blue-700 text-white font-bold px-4 py-2 rounded-md hover:bg-blue-800">
                        Get Started
                    </a>
                @endguest
                @auth
                    <a wire:navigate href="{{ route('dashboard') }}" class="text-black font-semibold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                        Dashboard
                    </a>
                    <button wire:click='logout' class="bg-blue-700 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-800 cursor-pointer">
                        Logout
                    </button>
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
                class="absolute top-20 inset-x-0 p-2 md:hidden bg-blue-50 shadow-lg z-50"
                id="mobile-menu"
            >
                <div class="pt-2 pb-3 space-y-1 text-sm font-Mont pl-3">
                    <a 
                        wire:click="setActiveRoute('home')" 
                        wire:navigate 
                        href="{{ route('home') }}" 
                        class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'home' ? 'text-blue-800' : '' }}">
                        Home
                    </a>
                    <a 
                        wire:click="setActiveRoute('about')" 
                        wire:navigate 
                        href="{{ route('about') }}" 
                        class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'about' ? 'text-blue-800' : '' }}">
                        About
                    </a>
                    <a 
                        wire:click="setActiveRoute('our-offer')" 
                        wire:navigate 
                        href="{{ route('our-offer') }}" 
                        class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'our-offer' ? 'text-blue-800' : '' }}">
                        Our Offer
                    </a>
                    <a 
                        wire:click="setActiveRoute('how-it-works')" 
                        wire:navigate 
                        href="{{ route('how-it-works') }}" 
                        class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'how-it-works' ? 'text-blue-800' : '' }}">
                        How it Works
                    </a>
                    <a 
                        wire:click="setActiveRoute('benefits')" 
                        wire:navigate 
                        href="{{ route('benefits') }}" 
                        class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'benefits' ? 'text-blue-800' : '' }}">
                        Benefits
                    </a>
                    <a 
                        wire:click="setActiveRoute('faqs')" 
                        wire:navigate 
                        href="{{ route('faqs') }}" 
                        class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'faqs' ? 'text-blue-800' : '' }}">
                        FAQs
                    </a>
                    <a 
                        wire:click="setActiveRoute('contact')" 
                        wire:navigate 
                        href="{{ route('contact') }}" 
                        class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'contact' ? 'text-blue-800' : '' }}">
                        Contact
                    </a>
                </div>
                
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="space-y-2 px-2 text-sm">
                        @guest
                            <a wire:navigate href="{{ route('login') }}" class="block text-black font-semibold text-center border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                Login
                            </a>
                            <a wire:navigate href="{{ route('get-started') }}" class="block bg-blue-700 text-white font-bold text-center px-4 py-2 rounded-md hover:bg-blue-800">
                                Get Started
                            </a>
                        @endguest
                        @auth
                            <a wire:navigate href="{{ route('dashboard') }}" class="block text-black font-semibold text-center border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                Dashboard
                            </a>
                            <button wire:click='logout' class="w-full bg-blue-700 text-white font-bold text-center px-4 py-2 rounded-md hover:bg-blue-800 cursor-pointer">
                                Logout
                            </button>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


{{-- <div x-data="{ mobileMenuOpen: false }">
    <nav class="bg-white fixed z-50 w-full">
        <div class="min-w-7xl mx-auto px-2 sm:px-4 lg:px-6">
            <div class="flex justify-between h-20 items-center">
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
                        class="inline-flex items-center justify-center p-2 rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:outline-none"
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
                    
                    <div wire:ignore class="flex space-x-8 font-Mont text-sm">
                        <a 
                            wire:click="setActiveRoute('home')" 
                            wire:navigate 
                            href="{{ route('home') }}" 
                            class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'home' ? 'text-blue-800' : '' }}">
                            Home
                        </a>
                        <a 
                            wire:click="setActiveRoute('about')" 
                            wire:navigate 
                            href="{{ route('about') }}" 
                            class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'about' ? 'text-blue-800' : '' }}">
                            About
                        </a>
                        <a 
                            wire:click="setActiveRoute('our-offer')" 
                            wire:navigate 
                            href="{{ route('our-offer') }}" 
                            class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'our-offer' ? 'text-blue-800' : '' }}">
                            Our Offer
                        </a>
                       
                        <a 
                            wire:click="setActiveRoute('how-it-works')" 
                            wire:navigate 
                            href="{{ route('how-it-works') }}" 
                            class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'how-it-works' ? 'text-blue-800' : '' }}">
                            How it Works
                        </a>
                        <a 
                            wire:click="setActiveRoute('benefits')" 
                            wire:navigate 
                            href="{{ route('benefits') }}" 
                            class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'benefits' ? 'text-blue-800' : '' }}">
                            Benefits
                        </a>
                        <a 
                            wire:click="setActiveRoute('faqs')" 
                            wire:navigate 
                            href="{{ route('faqs') }}" 
                            class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'faqs' ? 'text-blue-800' : '' }}">
                            FAQs
                        </a>
                        <a 
                            wire:click="setActiveRoute('contact')" 
                            wire:navigate 
                            href="{{ route('contact') }}" 
                            class="text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'contact' ? 'text-blue-800' : '' }}">
                            Contact                        </a>
                        </div>
                        
                    </div>
    
                    <!-- Desktop Right Side Buttons -->
                    <div class="hidden md:flex md:items-center md:space-x-2 text-sm font-Mont">
                        @guest
                            <a wire:navigate href="{{ route('login') }}" class="text-black font-bold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                Login
                            </a>
                            <a wire:navigate href="{{ route('get-started') }}" class="bg-blue-700 text-white font-bold px-4 py-2 rounded-md hover:bg-blue-800">
                                Get Started
                            </a>
                        @endguest
                        @auth
                            <a wire:navigate href="{{ route('dashboard') }}" class="text-black font-smibold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                Dashboard
                            </a>
                            <a wire:click='logout'  class="bg-blue-700 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-800 cursor-pointer">
                                Logout
                            </a>
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
                        class="absolute top-20 inset-x-0 p-2 md:hidden bg-blue-50 shadow-lg z-50"
                    >
                        <div class="pt-2 pb-3 space-y-1 text-sm font-Mont pl-3">
                           
                            <a 
                            wire:click="setActiveRoute('home')" 
                            wire:navigate 
                            href="{{ route('home') }}" 
                            class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'home' ? 'text-blue-800' : '' }}">
                            Home
                        </a>
                        <a 
                            wire:click="setActiveRoute('about')" 
                            wire:navigate 
                            href="{{ route('about') }}" 
                            class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'about' ? 'text-blue-800' : '' }}">
                            About
                        </a>
                        <a 
                            wire:click="setActiveRoute('our-offer')" 
                            wire:navigate 
                            href="{{ route('our-offer') }}" 
                            class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'our-offer' ? 'text-blue-800' : '' }}">
                            Our Offer
                        </a>
                        
                        <a 
                            wire:click="setActiveRoute('how-it-works')" 
                            wire:navigate 
                            href="{{ route('how-it-works') }}" 
                            class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'how-it-works' ? 'text-blue-800' : '' }}">
                            How it Works
                        </a>
                        <a 
                            wire:click="setActiveRoute('benefits')" 
                            wire:navigate 
                            href="{{ route('benefits') }}" 
                            class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'benefits' ? 'text-blue-800' : '' }}">
                            Benefits
                        </a>
                        <a 
                            wire:click="setActiveRoute('faqs')" 
                            wire:navigate 
                            href="{{ route('faqs') }}" 
                            class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'faqs' ? 'text-blue-800' : '' }}">
                            FAQs
                        </a>
                        <a 
                            wire:click="setActiveRoute('contact')" 
                            wire:navigate 
                            href="{{ route('contact') }}" 
                            class="block text-black font-semibold hover:text-blue-700 px-3 py-2 {{ $currentRoute === 'contact' ? 'text-blue-800' : '' }}">
                            Contact
                        </a>
                        </div>
                        
                        <div class="pt-4 pb-3 border-t border-gray-200">
                            <div class="space-y-2 px-2 text-sm">
                                @guest
                                <a wire:navigate href="{{ route('login') }}" class="block text-black font-semibold text-center border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                    Login
                                </a>
                                <a wire:navigate href="{{ route('get-started') }}" class="block bg-blue-700 text-white font-bold text-center px-4 py-2 rounded-md hover:bg-blue-800">
                                    Get Started
                                </a>
                            @endguest
                            @auth
                                <a wire:navigate href="{{ route('dashboard') }}" class="block text-black font-smibold border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                                    Dashboard
                                </a>
                                <a wire:click='logout'  class="block bg-blue-700 text-white font-semibold text-center px-4 py-2 rounded-md hover:bg-blue-800 cursor-pointer">
                                    Logout
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div> --}}

