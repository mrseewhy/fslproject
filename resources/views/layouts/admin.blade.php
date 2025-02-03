@extends('layouts.master')
@section('body')

<div x-data="{ 
    sidebarOpen: false,
    init() {
        this.sidebarOpen = window.innerWidth >= 640;
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 640) {
                this.sidebarOpen = true;
            }
        });
    }
}" class="flex flex-col h-screen overflow-hidden">
    <!-- Top Navigation -->
   @livewire('Comps.AdminBarHeader')

    <!-- Main Content Area -->
    <div class="flex flex-1 overflow-hidden">
        <!-- Sidebar -->
        <aside 
            x-show="sidebarOpen"
            @click.outside="window.innerWidth < 640 && (sidebarOpen = false)"
            class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r shadow-lg lg:static lg:block"
            x-transition:enter="transform transition-transform duration-200"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition-transform duration-200"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
        >
            <div class="p-4 border-b">

                <h2 class="text-lg font-semibold text-gray-800 capitalize">
                    <a wire:navigate href="/dashboard">{{ Auth::user()->user_type }} Dashboard</a>
                </h2>
            </div>
            {{-- <nav class="mt-4">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Dashboard</a>
                @if (Auth::user()->user_type === 'client')
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Client Dashboard</a>
                @endif
                @if (Auth::user()->user_type === 'practitioner')
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Practitioner Dashboard</a>
                @endif
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Settings</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Logout</a>
                
            </nav> --}}
            <nav class="mt-4">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Dashboard</a>
                
                @if (Auth::user()->user_type === 'client')
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Client Dashboard</a>
                @endif
                
                @if (Auth::user()->user_type === 'practitioner')
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Practitioner Dashboard</a>
                @endif
            
                <!-- Manage Cases Dropdown -->
                <div x-data="{ dropdownOpen: false }" class="relative">
                    <button @click="dropdownOpen = !dropdownOpen" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-200">
                        Manage Cases
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div 
                        x-show="dropdownOpen" 
                        @click.outside="dropdownOpen = false" 
                        class="mt-2 space-y-1 bg-white rounded-md z-10 pl-3"
                        x-transition:enter="transition transform duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition transform duration-200"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                    >
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">All Cases</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Create Case</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Assigned Cases</a>
                    </div>
                </div>
            
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Settings</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Logout</a>
            </nav>
            
        </aside>

        <!-- Overlay for Mobile Sidebar -->
        <div 
            x-show="sidebarOpen && window.innerWidth < 640" 
            class="fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden"
            @click="sidebarOpen = false"
            x-transition.opacity
        ></div>

        <!-- Content Area -->
        <main class="flex-1 p-6 overflow-y-auto">
            <!-- Example Content -->
            <h1 class="text-2xl font-bold mb-4">Welcome to FSL Connect</h1>
            <p class="text-gray-600">This is your main content area. You can add any content here.</p>
            
            <!-- Example Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-semibold mb-2">Card 1</h3>
                    <p class="text-gray-600">Sample content for card 1</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-semibold mb-2">Card 2</h3>
                    <p class="text-gray-600">Sample content for card 2</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-semibold mb-2">Card 3</h3>
                    <p class="text-gray-600">Sample content for card 3</p>
                </div>
            </div>
        </main>
    </div>
</div>
  

@endsection