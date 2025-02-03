<div>
    <section class="flex flex-col lg:flex-row items-center justify-center">
        <!-- Wrapper -->
        <div class="w-full flex flex-col lg:flex-row lg:space-x-8 items-center justify-center">
            <!-- Left Section (Image) -->
            <div class="lg:w-1/2 w-full">
                <img src="/images/getstarted.jpg" 
                     alt="Get Started Image" 
                     class="w-full h-72 lg:h-screen object-cover object-top shadow-lg">
            </div>

            <!-- Right Section (Checkboxes) -->
            <div class="lg:w-1/2 w-full space-y-8 lg:pr-16 p-4 lg:p-0 mt-16">
                <h2 style="font-family: 'Montserrat', sans-serif;" 
                    class="text-3xl font-bold mb-6 text-center lg:text-left">
                    Select User Category
                </h2>

                <div x-data="{ userType: null }" class="space-y-4">
                    <!-- Client Card -->
                    <div
                        @click="userType = 'client'; $wire.set('userType', userType)"
                        :class="userType === 'client' ? 'bg-[#FF9800] text-white border-4 border-[#FF9800]' : 'bg-white text-black border-2 border-gray-300'"
                        class="p-6 cursor-pointer rounded-lg shadow-lg transition-all duration-300 hover:scale-105"
                    >
                        <div class="flex justify-center mb-4">
                            <div x-show="userType === 'client'" 
                                 class="w-8 h-8 flex items-center justify-center bg-white rounded-full border-4 border-[#FF9800]">
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                     class="h-6 w-6 text-[#FF9800]" 
                                     fill="none" 
                                     viewBox="0 0 24 24" 
                                     stroke="currentColor">
                                    <path stroke-linecap="round" 
                                          stroke-linejoin="round" 
                                          stroke-width="2" 
                                          d="M5 13l4 4L19 7">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 style="font-family: 'Montserrat', sans-serif;" class="text-xl font-semibold">
                            Clients
                        </h3>
                        <p style="font-family: 'Lato', sans-serif;" class="mt-2 text-gray-600">
                            Do you have a case related to law or security that you'd like us to help you handle? Or perhaps you need assistance investigating certain reports about a loved one, employee, or associate? Kindly select this option.
                        </p>
                    </div>

                    <!-- Practitioner Card -->
                    <div
                        @click="userType = 'practitioner'; $wire.set('userType', userType)"
                        :class="userType === 'practitioner' ? 'bg-[#FF9800] text-white border-4 border-[#FF9800]' : 'bg-white text-black border-2 border-gray-300'"
                        class="p-6 cursor-pointer rounded-lg shadow-lg transition-all duration-300 hover:scale-105"
                    >
                        <div class="flex justify-center mb-4">
                            <div x-show="userType === 'practitioner'" 
                                 class="w-8 h-8 flex items-center justify-center bg-white rounded-full border-4 border-[#FF9800]">
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                     class="h-6 w-6 text-[#FF9800]" 
                                     fill="none" 
                                     viewBox="0 0 24 24" 
                                     stroke="currentColor">
                                    <path stroke-linecap="round" 
                                          stroke-linejoin="round" 
                                          stroke-width="2" 
                                          d="M5 13l4 4L19 7">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 style="font-family: 'Montserrat', sans-serif;" class="text-xl font-semibold">
                            Practitioners
                        </h3>
                        <p style="font-family: 'Lato', sans-serif;" class="mt-2 text-gray-600">
                            Are you a security expert, lawyer, journalist, or accredited field agent? Are you passionate about justice and interested in helping us solve crimes and investigate cases? Do you want to utilize your skills and expertise to make a meaningful impact? Kindly choose this option.
                        </p>
                    </div>
                </div>

                <!-- Next Button -->
                <div class="mt-8 flex justify-center lg:justify-start">
                    <button @click="$wire.saveUserType()" 
                            style="font-family: 'Lato', sans-serif;" 
                            class="bg-[#4567B7] text-white py-3 px-12 rounded-full font-semibold hover:bg-[#2196F3] transition duration-300">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
