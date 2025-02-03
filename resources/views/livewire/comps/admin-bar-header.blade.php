<div>
    {{-- In work, do what you enjoy. --}}
    <header class="bg-white border-b">
        <div class="flex items-center justify-between px-6 py-4">
            <div class="flex space-x-4 items-center justify-center">
                <!-- Logo -->
                <div class="text-2xl font-bold text-gray-800">
                <a wire:navigate href="/">FSL Connect</a>
                </div>
            </div>
            <div class="flex space-x-4">
                <div>
                     <!-- Hamburger Menu (mobile only) -->
                <button 
                @click="sidebarOpen = !sidebarOpen" 
                class="lg:hidden text-white bg-[#4567B7] rounded-lg p-2 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                </button>
                </div>
                <div x-data="{ dropdownOpen: false }" class="relative">
                    <button @click="dropdownOpen = !dropdownOpen" class="focus:outline-none">
                        <img 
                            src="https://via.placeholder.com/40" 
                            alt="Profile" 
                            class="h-10 w-10 rounded-full border"
                        >
                    </button>
                    <div 
                        x-show="dropdownOpen" 
                        @click.outside="dropdownOpen = false"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                        <div class="p-4 border-b">
                            <h4 class="font-semibold text-gray-800">{{ Auth::user()->name }}</h4>
                            <p class="text-sm text-gray-500">{{ Auth::user()->user_type}}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email}}</p>
                        </div>
                        <ul class="py-2">
                            <li>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
                            </li>
                            <li>
                                <a wire:click='logout'  class="block px-4 py-2 text-gray-700 hover:bg-gray-200 cursor-pointer">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </header>
   
</div>
