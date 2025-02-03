<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
      {{-- footer --}}
   <footer class="bg-blue-800 text-white font-Mont">
    <!-- First Section: 4 Columns -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 pt-24 pb-12 px-4">
        
        <!-- 1. Logo and Short Description -->
        <div class="space-y-4">
            <img src="{{ asset('images/logo.png') }}" alt="FSL Connect Logo" class="w-40">
            <p class="text-gray-300 font-Lato">At FSL Connect, we bridge the gap between clients and skilled professionals to deliver tailored legal and security solutions.</p>
        </div>
        
        <!-- 2. Links -->
        <div>
            <h3 class="font-semibold text-lg text-gray-100">Links</h3>
            <ul class="mt-4 space-y-2">
                <li><a wire:navigate href="/" class="text-gray-300 hover:text-blue-400">Home</a></li>
                <li><a wire:navigate href="/about" class="text-gray-300 hover:text-blue-400">About Us</a></li>
                <li><a wire:navigate href="/contact" class="text-gray-300 hover:text-blue-400">Contact Us</a></li>
                <li><a wire:navigate href="/how-it-works" class="text-gray-300 hover:text-blue-400">How It Works</a></li>
                <li><a wire:navigate href="/benefits" class="text-gray-300 hover:text-blue-400">Benefits</a></li>
            </ul>
        </div>
        
        <!-- 3. Explore -->
        <div>
            <h3 class="font-semibold text-lg text-gray-100">Explore</h3>
            <ul class="mt-4 space-y-2">
                <li><a href="/terms" class="text-gray-300 hover:text-blue-400">Terms & Conditions</a></li>
                <li><a href="/privacy" class="text-gray-300 hover:text-blue-400">Privacy Policy</a></li>
                <li><a href="/contract" class="text-gray-300 hover:text-blue-400">Contract</a></li>
                <li><a href="/contact" class="text-gray-300 hover:text-blue-400">Contact Us</a></li>
                <li><a href="/find-a-practitioner" class="text-gray-300 hover:text-blue-400">Find a Practitioner</a></li>
            </ul>
        </div>
        
        <!-- 4. Insert Something Good (e.g., Social Media or Newsletter Signup) -->
        <div>
            <h3 class="font-semibold text-lg text-gray-100">Stay Connected</h3>
            <p class="text-gray-300 mt-4">Join our community for the latest updates and news.</p>
            <div class="flex space-x-4 mt-6">
                <a href="#" class="text-gray-400 hover:text-blue-400">
                    <!-- Facebook Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M23 12.13c0-5.94-4.8-10.8-10.8-10.8s-10.8 4.86-10.8 10.8c0 5.61 4.29 10.28 9.87 10.8v-7.63h-2.97v-3.06h2.97v-2.24c0-3.42 2.01-5.31 5.19-5.31 1.51 0 3.08.12 3.36.13v3.6h-2.12c-1.66 0-2.11.8-2.11 2.01v2.61h3.88l-1.13 3.06h-2.75v7.63c5.58-.51 9.87-5.19 9.87-10.8z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-blue-400">
                    <!-- Twitter Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M23.444 4.834c-.839.372-1.736.623-2.68.735a4.626 4.626 0 0 0 2.03-2.554c-.866.512-1.826.892-2.85 1.095a4.607 4.607 0 0 0-7.86 4.19c-3.83-.192-7.221-2.026-9.489-4.81a4.607 4.607 0 0 0 1.425 6.15c-.697-.02-1.358-.213-1.937-.533v.052c0 2.23 1.586 4.101 3.689 4.52a4.605 4.605 0 0 1-2.072.078c.57 1.786 2.228 3.089 4.18 3.124a9.237 9.237 0 0 1-5.711 1.972c-.372 0-.745-.02-1.107-.065a13.049 13.049 0 0 0 7.071 2.071c8.46 0 13.107-7.01 13.107-13.107 0-.2-.004-.397-.014-.594a9.381 9.381 0 0 0 2.267-2.396"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-blue-400">
                    <!-- Instagram Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M7 2h10c1.104 0 2 .896 2 2v14c0 1.104-.896 2-2 2h-10c-1.104 0-2-.896-2-2v-14c0-1.104.896-2 2-2zm2 14v2h6v-2h-6zm3-7c-1.65 0-3 1.35-3 3s1.35 3 3 3 3-1.35 3-3-1.35-3-3-3zm4 3h-2c-.553 0-1 .447-1 1s.447 1 1 1h2v2h-4v-2c0-.553-.447-1-1-1s-1 .447-1 1v2h-6v-2c0-.553-.447-1-1-1s-1 .447-1 1v2h-2v-4h14v2h-2v-4h-6v-2h6v-2h-6v2h4v4z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Second Section: Copyright and Date -->
    <div class="bg-blue-50 text-center py-4 font-Mont">
        <p class="text-black text-sm" x-data="{}" x-init="document.getElementById('current-year').textContent = new Date().getFullYear()">
            &copy; <span id="current-year"></span> FSL Connect. All rights reserved.
          </p>    
    </div>
</footer>



   {{-- end of footer  --}}

</div>
