<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('/images/hero-bg.jpg');">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
    
        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6 pt-40">
            <!-- Main Title -->
            <h1 class="text-4xl md:text-6xl font-bold mb-4 font-Mont" >Expert Security & Legal <br/>Solutions at Your Fingertips</h1>
    
            <!-- Subtitle / Description -->
            <p  class="text-lg md:text-xl mb-8 max-w-3xl mx-auto font-Lato">
                FSL Connect is an innovative initiative by Fountain Source Limited (FSL). Its primary objective is to bridge the gap between security personnels, law practitioners and citizens seeking their expertise, ensuring citizens receive justice, stay safe, and secure.
            </p>
    
            <!-- Buttons -->
            <div class="flex space-x-4">
                <!-- About Us Button -->
               
                <a wire:navigate href="/about" class=" w-44 bg-blue-700 border-2 border-blue-700 text-white py-3 px-8 rounded-full font-bold hover:bg-blue-800 transition duration-300 font-Mont">About Us</a>
    
                <!-- Get Started Button -->
                <a wire:navigate href="/get-started" class="w-44 bg-transparent border-2 border-white text-white py-3 px-8 rounded-full font-bold hover:bg-white hover:text-black transition duration-300 font-Mont">Get Started</a>
            </div>
        </div>
    </section>
    
    {{-- Stats Section --}}

    <div class="bg-blue-800 w-full py-20">
        <div class="max-w-7xl mx-auto text-white">
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center border-white border-opacity-50">
            
            <!-- Practitioners Stat -->
            <div x-data="counter(0, 1000, 3000)" class="sm:border-r sm:last:border-r-0 sm:border-opacity-20 sm:border-white mb-10 sm:mb-0">
              <p class="text-4xl font-bold font-Mont" x-text="current + '+'"></p>
              <p class="font-Lato">Practitioners across several fields</p>
            </div>
            
            <!-- Customer Satisfaction Stat -->
            <div x-data="counter(0, 100, 3000)" class="sm:border-r sm:last:border-r-0 sm:border-opacity-20 sm:border-white mb-10 sm:mb-0">
              <p class="text-4xl font-bold font-Mont" x-text="current + '%'"></p>
              <p class="font-Lato">Excellent Customer satisfaction</p>
            </div>
            
            <!-- Result Guarantee Stat -->
            <div x-data="counter(0, 100, 3000)" >
              <p class="text-4xl font-bold font-Mont" x-text="current + '%'"></p>
              <p class="font-Lato">Expected Result guaranteed</p>
            </div>
      
          </div>
        </div>
      </div>
      

    {{-- end of stats section --}}

    {{-- About section --}}

    <section class="flex flex-col lg:flex-row items-center justify-between lg:space-x-16 px-6 lg:px-20 py-24 bg-white">
        <!-- Left Section (Image) -->
        <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
          <img 
            src="{{ asset('/images/abt.jpeg') }}" 
            alt="About Us Image" 
            class="w-full h-80 lg:h-96 object-cover object-top rounded-lg shadow-lg"
          />
        </div>
      
        <!-- Right Section (Text Content) -->
        <div class="w-full lg:w-1/2 space-y-6 text-center lg:text-left">
          <!-- Headline -->
          <h2 class="text-4xl font-extrabold text-blue-800 leading-tight font-Mont" >
            About Us
          </h2>
      
          <!-- Description -->
          <p class="text-black  leading-relaxed font-Lato" >
            At FSL Connect, we are dedicated to delivering exceptional legal and security solutions designed to meet the unique needs of individuals and organizations. Our platform connects clients with a diverse network of skilled professionals—lawyers, investigators, journalists, and licensed experts—committed to upholding justice, safeguarding lives, and ensuring peace of mind.
          </p>
            <p class="text-black leading-relaxed font-Lato" >
With expertise across various fields and a focus on innovation, we tackle complex challenges with tailored strategies and a client-first approach. At FSL Connect, we’re not just resolving cases; we’re building trust and empowering our clients with effective solutions.
          </p>
      
          <!-- Read More Button -->
          <div>
            <a wire:navigate href="/about">
              <button 
                class="bg-blue-800 text-white py-3 px-8 rounded-full font-medium hover:bg-blue-700 transition duration-300 shadow-lg"
                style="font-family: 'Lato', sans-serif;">
                Read More
              </button>
            </a>
          </div>
        </div>
      </section>
      

    {{-- End of About Section --}}

    {{-- Our Offer --}}

    <section class="bg-blue-50 py-28">
        <div class="max-w-7xl mx-auto px-6">
          <!-- Section Heading -->
          <div class="text-center mb-10">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-800 mb-4">Our Offer</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
              At FSL Connect, we bridge the gap between individuals, organizations, and seasoned professionals—including law enforcement officers, investigators, journalists, and other licensed experts.
            </p>
          </div>
          <!-- What We Offer -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Efficient Case Resolution -->
            <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow">
              <div class="flex items-center mb-4">
                <div class="bg-blue-800 text-white w-12 h-12 flex items-center justify-center rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                  </svg>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 ml-4">Efficient Case Resolution</h3>
              </div>
              <p class="text-gray-600">
                Streamlined processes and expert assistance to resolve your cases promptly and effectively.
              </p>
            </div>
            <!-- Access to Expertise -->
            <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow">
              <div class="flex items-center mb-4">
                <div class="bg-blue-800 text-white w-12 h-12 flex items-center justify-center rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V8a2 2 0 00-2-2H6a2 2 0 00-2 2v5M16 21V8m-8 13V8m4 13v-5m0 0h-4m4 0h4" />
                  </svg>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 ml-4">Access to Expertise</h3>
              </div>
              <p class="text-gray-600">
                A network of qualified practitioners with specialized knowledge in law, investigations, and related fields.
              </p>
            </div>
            <!-- Affordable Solutions -->
            <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow">
              <div class="flex items-center mb-4">
                <div class="bg-blue-800 text-white w-12 h-12 flex items-center justify-center rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3M4 21h16m0 0a2 2 0 002-2v-7a2 2 0 00-2-2H4a2 2 0 00-2 2v7a2 2 0 002 2z" />
                  </svg>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 ml-4">Affordable Solutions</h3>
              </div>
              <p class="text-gray-600">
                Competitive pricing and flexible payment plans to provide top-tier assistance without financial strain.
              </p>
            </div>
          </div>
        </div>
      </section>
      


    {{-- end of Our Offer --}}

    {{-- //Benefits --}}

    <section class="py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
          <!-- Section Heading -->
          <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-blue-800 leading-tight" style="font-family: 'Montserrat', sans-serif;">
              Benefits of FSL Connect
            </h2>
            <p class="text-gray-700 text-lg mt-4" style="font-family: 'Lato', sans-serif;">
              Discover how FSL Connect transforms case management, connecting clients with top experts while ensuring transparency and efficiency.
            </p>
          </div>
      
          <!-- Benefits Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Benefit 1: Streamlined Case Management -->
            <div class="bg-blue-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
              <div class="flex items-center justify-center w-16 h-16 bg-blue-800 text-white rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-blue-800 mb-3" style="font-family: 'Montserrat', sans-serif;">
                Simplified Access to Legal and Security Services
              </h3>
              <p class="text-gray-800 leading-relaxed" style="font-family: 'Lato', sans-serif;">
                FSL Connect eliminates the complexity of finding the right professional for a case. Clients can access a wide range of legal and security services in one platform, saving time and effort in selecting and engaging professionals.
              </p>
            </div>
      
            <!-- Benefit 2: Access to a Diverse Network of Experts -->
            <div class="bg-blue-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
              <div class="flex items-center justify-center w-16 h-16 bg-blue-800 text-white rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-2.21 0-4 1.79-4 4m8 0c0-2.21-1.79-4-4-4m-4 4h8m-4-4v8" />
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-blue-800 mb-3" style="font-family: 'Montserrat', sans-serif;">
                Custom Solutions for Diverse Cases
              </h3>
              <p class="text-gray-800 leading-relaxed" style="font-family: 'Lato', sans-serif;">
                With a team of practitioners from various backgrounds, your platform can address a wide variety of case types, from legal disputes to investigative needs and media coverage, ensuring tailored solutions for each specific case.
              </p>
            </div>
      
            <!-- Benefit 3: Transparency and Accountability -->
            <div class="bg-blue-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
              <div class="flex items-center justify-center w-16 h-16 bg-blue-800 text-white rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7m2-2a2 2 0 012 2v7a2 2 0 01-2 2h-4l-4 4-4-4H5a2 2 0 01-2-2V9a2 2 0 012-2h3" />
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-blue-800 mb-3" style="font-family: 'Montserrat', sans-serif;">
                Reduced Costs Through Competitive Pricing
              </h3>
              <p class="text-gray-800 leading-relaxed" style="font-family: 'Lato', sans-serif;">
                By offering access to a diverse pool of practitioners, clients can select professionals based on their budget and needs, ensuring cost-effective solutions without compromising on quality or expertise.
              </p>
            </div>
          </div>
        </div>
      </section>
      

    {{-- //end of benefits --}}

    {{-- //CTA --}}

    <section class="py-16 bg-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
          <div class="text-center">
            <!-- Heading -->
            <h2 class="text-3xl lg:text-4xl font-extrabold leading-tight" style="font-family: 'Montserrat', sans-serif;">
              Need Help with a Legal, Civil, or Personal Case?
            </h2>
      
            <!-- Description -->
            <p class="text-lg lg:text-xl text-gray-200 mt-4" style="font-family: 'Lato', sans-serif;">
              Connect with expert professionals ready to provide tailored solutions for your specific needs.
            </p>
      
            <!-- Call to Action Button -->
            <div class="mt-8">
              <a wire:navigate href="/get-started">
                <button 
                  class="bg-white text-blue-800 py-3 px-8 rounded-full font-semibold hover:bg-gray-100 transition duration-300"
                  style="font-family: 'Lato', sans-serif;">
                  Get Started Today
                </button>
              </a>
            </div>
          </div>
        </div>
      </section>
      

    {{-- end of CTA --}}

    {{-- How it works --}}

    <section class="gradient-bg min-h-screen">
        <div class="container mx-auto px-4 py-16">
            <div class="flex flex-col lg:flex-row items-center gap-16 max-w-6xl mx-auto">
              <!-- Left side - Phone mockup -->
              <div class="lg:w-1/2 relative">
                <div class="relative w-[320px] h-[640px] mx-auto">
                  <!-- Decorative circles -->
                  <div class="absolute -top-10 -left-10 w-64 h-64 bg-green-200 rounded-full filter blur-3xl opacity-30"></div>
                  <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-blue-200 rounded-full filter blur-3xl opacity-30"></div>
                  
                  <!-- Phone frame -->
                  <div class="absolute inset-0 bg-white rounded-[3rem] phone-shadow overflow-hidden border border-gray-100">
                    <!-- Status bar -->
                    <div class="h-6 bg-white w-full"></div>
                    <!-- Notch -->
                    <div class="h-6 w-40 bg-black mx-auto rounded-b-2xl"></div>
                    
                    <!-- App content -->
                    <div class="absolute inset-3 bg-gray-50 rounded-[2.5rem] overflow-hidden">
                      <!-- Map interface mockup -->
                      <div class="h-full w-full bg-blue-50 relative">
                        <!-- Search bar -->
                        <div class="absolute top-4 left-4 right-4">
                          <div class="bg-white rounded-xl shadow-lg p-3 flex items-center">
                            <div class="w-4 h-4 bg-blue-500 rounded-full mr-3"></div>
                            <div class="flex-1">
                              <div class="h-2 w-3/4 bg-gray-200 rounded"></div>
                            </div>
                          </div>
                        </div>
        
                        <!-- Location card -->
                        <div class="absolute bottom-8 left-4 right-4">
                          <div class="bg-white rounded-xl shadow-lg p-4">
                            <div class="flex items-start">
                              <div class="w-20 h-20 bg-gray-100 rounded-lg"></div>
                              <div class="ml-4 flex-1">
                                <div class="h-3 w-3/4 bg-gray-100 rounded mb-2"></div>
                                <div class="h-3 w-1/2 bg-gray-100 rounded mb-2"></div>
                                <div class="flex items-center mt-3">
                                  <div class="w-8 h-8 bg-blue-100 rounded-full"></div>
                                  <div class="w-8 h-8 bg-blue-100 rounded-full -ml-2"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
              <!-- Right side - Steps -->
              <div class="lg:w-1/2 space-y-10">
                <div>
                  <h2 class="text-3xl font-bold mb-3 bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                    Easy steps to use the service
                  </h2>
                  <p class="text-gray-600">Follow these simple steps to get started with our service</p>
                </div>
                
                <!-- Steps container -->
                <div class="space-y-8">
                  <!-- Step 1 -->
                  <div class="flex items-start gap-6 group hover:transform hover:translate-x-2 transition-all duration-300">
                    <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center shadow-sm group-hover:shadow-md transition-all duration-300">
                      <span class="text-blue-600 font-semibold">1</span>
                    </div>
                    <div>
                      <h3 class="font-semibold text-lg mb-2 text-gray-800">Create an account</h3>
                      <p class="text-gray-600 leading-relaxed">First, visit out website and Sign up to get started on the platform. </p>
                    </div>
                  </div>
        
                  <!-- Step 2 -->
                  <div class="flex items-start gap-6 group hover:transform hover:translate-x-2 transition-all duration-300">
                    <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center shadow-sm group-hover:shadow-md transition-all duration-300">
                      <span class="text-blue-600 font-semibold">2</span>
                    </div>
                    <div>
                      <h3 class="font-semibold text-lg mb-2 text-gray-800">Submit your case details</h3>
                      <p class="text-gray-600 leading-relaxed">Second, Provide relevant information and describe your case</p>
                    </div>
                  </div>
        
                  <!-- Step 3 -->
                  <div class="flex items-start gap-6 group hover:transform hover:translate-x-2 transition-all duration-300">
                    <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center shadow-sm group-hover:shadow-md transition-all duration-300">
                      <span class="text-blue-600 font-semibold">3</span>
                    </div>
                    <div>
                      <h3 class="font-semibold text-lg mb-2 text-gray-800">Get assigned to a practitioner</h3>
                      <p class="text-gray-600 leading-relaxed">Third, Our system will match you with a qualified practitioner.</p>
                    </div>
                  </div>
        
                  <!-- Step 4 -->
                  <div class="flex items-start gap-6 group hover:transform hover:translate-x-2 transition-all duration-300">
                    <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center shadow-sm group-hover:shadow-md transition-all duration-300">
                      <span class="text-blue-600 font-semibold">4</span>
                    </div>
                    <div>
                      <h3 class="font-semibold text-lg mb-2 text-gray-800">Receive personalized solutions</h3>
                      <p class="text-gray-600 leading-relaxed">Finally, Get expert resolutions and guidance tailored to your case.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      

    {{-- end of how it works --}}

{{-- Contact --}}

<section class="px-4 py-28 bg-white">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-black mb-8 font-Mont">Get in Touch</h2>
        <p class="text-gray-700 mb-12 font-Lato">We are here to assist you. Reach out to us through any of the following channels.</p>

        <!-- Social Media Icons -->
        {{-- <div class="flex justify-center space-x-6 mb-8">
            <a href="https://facebook.com" target="_blank" class="text-blue-600 hover:text-blue-800">
                <svg fill="currentColor" width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"/>
                    </svg>
            </a>
            <a href="https://x.com" target="_blank" class="text-blue-600 hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z"/></svg>
            </a>
            <a href="https://linkedin.com" target="_blank" class="text-blue-600 hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M22 0h-20c-1.104 0-2 .896-2 2v20c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2v-20c0-1.104-.896-2-2-2zm-12 18h-2v-8h2v8zm-1-9c-.656 0-1.191-.531-1.191-1.188s.531-1.188 1.191-1.188c.656 0 1.188.531 1.188 1.188s-.532 1.188-1.188 1.188zm11 9h-2v-4.5c0-.53-.448-.997-.998-.997s-.998.467-.998.997v4.5h-2v-8h2v1.501h.003c.295-.441.81-.692 1.39-.692.91 0 1.595.597 1.595 1.553v5.637z"/>
                </svg>
            </a>
            <a href="https://instagram.com" target="_blank" class="text-pink-600 hover:text-pink-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 2.163c3.313 0 6 2.687 6 6s-2.687 6-6 6-6-2.687-6-6 2.687-6 6-6zm0 10c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm7-8c0-.552-.448-1-1-1s-1 .448-1 1 .448 1 1 1 1-.448 1-1zm2 2c-1.104 0-2 .896-2 2v10c0 1.104.896 2 2 2h-16c-1.104 0-2-.896-2-2v-10c0-1.104.896-2 2-2h16c1.104 0 2 .896 2 2zm-9 2h-2v7h2v-7zm2 9h-2v2h2v-2z"/>
                </svg>
            </a>
            <a href="https://youtube.com" target="_blank" class="text-red-600 hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M21 8.693c0-.145-.003-.287-.008-.428-.016-.241-.056-.477-.118-.705-.064-.243-.156-.467-.273-.676-.125-.207-.282-.379-.47-.541-.191-.165-.411-.3-.65-.419-.343-.165-.717-.28-1.1-.355-.486-.086-.989-.137-1.507-.137-2.084 0-4.167 0-6.251 0-.212 0-.424.002-.635.008-1.8.01-3.602.293-5.345.836-.57.208-1.114.463-1.646.752-.378.202-.74.425-1.08.659-.599.384-1.174.803-1.704 1.258-.484.403-.926.842-1.314 1.316-.289.368-.56.748-.798 1.147-.232.398-.442.803-.624 1.222-.354.77-.662 1.56-.876 2.366-.144.495-.264 1.004-.347 1.522-.022.155-.016.313-.016.469 0 2.085 0 4.167 0 6.251 0 .211.001.423.008.635.025.45.085.896.178 1.338.019.075.03.151.049.227.018.073.041.145.065.217.014.043.032.086.048.129.052.14.112.276.176.406.145.26.31.502.491.732.187.237.395.462.615.679.213.201.436.394.674.574.248.188.511.358.782.507.257.149.524.29.797.423.238.12.478.243.718.359 0 .065.01.127.022.189.346.568.665 1.155.986 1.745.093.18.184.365.278.549 0 .016.007.032.007.048v-8.452z"/>
                </svg>
            </a>
            <a href="https://wa.me/+1234567890" target="_blank" class="text-green-600 hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 2c-5.523 0-10 4.477-10 10 0 1.92.54 3.71 1.459 5.249l-.767 3.748c-.065.319.052.64.286.832.129.088.285.135.437.135.096 0 .194-.023.287-.073.303-.151.672-.315 1.048-.497.568-.271 1.174-.598 1.795-.85 1.243-.497 2.56-.806 3.873-1.06 1.544-.306 2.947-.77 4.304-1.35 1.273-.569 2.452-1.274 3.438-2.13.157-.132.336-.242.511-.358.367-.275.747-.548 1.13-.832.073-.051.151-.092.227-.144 1.036-.796 1.912-1.74 2.493-2.842 1.087-2.048 1.729-4.365 1.729-6.682 0-5.523-4.477-10-10-10zm-.014 12.487c-.345.142-.695.286-1.026.426-.082-.04-.164-.085-.247-.131-.225-.131-.456-.264-.691-.387-.376-.213-.757-.423-1.147-.63-.217-.12-.436-.242-.657-.362-.354-.177-.724-.357-1.09-.54-.136-.063-.267-.132-.398-.197-.33-.171-.657-.358-.975-.536-.4-.215-.795-.433-1.181-.653-.72-.426-1.431-.897-2.126-1.404-.132-.091-.27-.186-.403-.285-.122-.088-.242-.179-.362-.272.178-.366.308-.755.419-1.155.172-.62.273-1.261.294-1.904-.301-.474-.623-.936-.948-1.394-.03-.01-.06-.02-.091-.031-.51-.45-1.048-.876-1.597-1.307-1.415-.874-2.888-1.35-4.423-1.376-.746-.032-1.447.136-2.04.413-.507-.428-.975-.884-1.45-1.368-.302-.278-.614-.56-.922-.849.348-.229.672-.478 1.003-.724.63-.428 1.283-.807 1.957-1.142.759-.437 1.55-.839 2.359-1.12 1.023-.327 2.07-.482 3.146-.417 2.02.113 3.857.76 5.256 1.781 1.785.345 3.41.901 4.833 1.614-.199-.478-.396-.963-.601-1.46z"/>
                </svg>
            </a>
        </div> --}}

        <!-- Contact Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Phone Card -->
            <div class="bg-blue-50 p-6 rounded-lg shadow-lg flex items-center space-x-4">
                <div class="text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 14 3.9902344 C 8.4886661 3.9902344 4 8.4789008 4 13.990234 L 4 35.990234 C 4 41.501568 8.4886661 45.990234 14 45.990234 L 36 45.990234 C 41.511334 45.990234 46 41.501568 46 35.990234 L 46 13.990234 C 46 8.4789008 41.511334 3.9902344 36 3.9902344 L 14 3.9902344 z M 18.005859 12.033203 C 18.633859 12.060203 19.210594 12.414031 19.558594 12.957031 C 19.954594 13.575031 20.569141 14.534156 21.369141 15.785156 C 22.099141 16.926156 22.150047 18.399844 21.498047 19.589844 L 20.033203 21.673828 C 19.637203 22.237828 19.558219 22.959703 19.824219 23.595703 C 20.238219 24.585703 21.040797 26.107203 22.466797 27.533203 C 23.892797 28.959203 25.414297 29.761781 26.404297 30.175781 C 27.040297 30.441781 27.762172 30.362797 28.326172 29.966797 L 30.410156 28.501953 C 31.600156 27.849953 33.073844 27.901859 34.214844 28.630859 C 35.465844 29.430859 36.424969 30.045406 37.042969 30.441406 C 37.585969 30.789406 37.939797 31.366141 37.966797 31.994141 C 38.120797 35.558141 35.359641 37.001953 34.556641 37.001953 C 34.000641 37.001953 27.316344 37.761656 19.777344 30.222656 C 12.238344 22.683656 12.998047 15.999359 12.998047 15.443359 C 12.998047 14.640359 14.441859 11.879203 18.005859 12.033203 z"/></svg>
                </div>
                <div class="text-left">
                    <h3 class="text-xl font-semibold font-Mont">Phone</h3>
                    <p class="text-gray-800 font-Lato"><a href="tel:info@fslconnect.com">0700FSOURCE</a></p>
                </div>
            </div>

            <!-- Email Card -->
            <div class="bg-blue-50 p-6 rounded-lg shadow-lg flex items-center space-x-4">
                <div class="text-blue-600">
                    <svg  width="50px" height="50px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    
                        
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-260.000000, -959.000000)" fill="currentColor">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path d="M208,801.586 C208,801.034 208.448,801 209,801 L219,801 C219.552,801 220,801.034 220,801.586 L220,802.835 L214.447,805.612 C214.166,805.752 213.834,805.752 213.553,805.612 L208,802.835 L208,801.586 Z M206.276,804.209 L213.106,807.624 C213.669,807.906 214.331,807.906 214.894,807.624 L221.724,804.209 C221.893,804.125 222,803.952 222,803.762 L222,800.586 C222,799.481 221.105,799 220,799 L208,799 C206.895,799 206,799.481 206,800.586 L206,803.762 C206,803.952 206.107,804.125 206.276,804.209 L206.276,804.209 Z M222,815.586 C222,816.138 221.552,817 221,817 L207,817 C206.448,817 206,816.138 206,815.586 L206,809.116 C206,808.745 206.391,808.503 206.724,808.669 C210.9,810.757 209.617,810.116 213.119,811.867 C213.674,812.145 214.328,812.149 214.886,811.877 C218.357,810.193 216.898,810.897 221.284,808.791 C221.615,808.631 222,808.873 222,809.242 L222,815.586 Z M221.106,806.518 L214.447,809.848 C214.166,809.988 213.834,809.988 213.553,809.848 L206.894,806.518 C205.565,805.854 204,806.821 204,808.307 L204,816.586 C204,817.691 204.895,819 206,819 L222,819 C223.105,819 224,817.691 224,816.586 L224,808.307 C224,806.821 222.435,805.854 221.106,806.518 L221.106,806.518 Z" id="email-[#1564]">
                    
                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="text-left">
                    <h3 class="text-xl font-semibold font-Mont">Email</h3>
                    <p class="text-gray-800 font-Lato"><a href="mailto:info@fslconnect.com">info@fslconnect.com</a></p>
                </div>
            </div>

            <!-- Location Card -->
            <div class="bg-blue-50 p-6 rounded-lg shadow-lg flex items-center space-x-4">
                <div class="text-blue-600">
                    <svg width="80px" height="80px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M309.2 584.776h105.5l-49 153.2H225.8c-7.3 0-13.3-6-13.3-13.3 0-2.6 0.8-5.1 2.2-7.3l83.4-126.7c2.5-3.6 6.7-5.9 11.1-5.9z" fill="currentColor" /><path d="M404.5 791.276H225.8c-36.7 0-66.5-29.8-66.5-66.5 0-13 3.8-25.7 11-36.6l83.4-126.7c12.3-18.7 33.1-29.9 55.5-29.9h178.4l-83.1 259.7z m-95.3-206.5c-4.5 0-8.6 2.2-11.1 6l-83.4 126.7c-1.4 2.2-2.2 4.7-2.2 7.3 0 7.3 6 13.3 13.3 13.3h139.9l49-153.2H309.2z" fill="#fff" /><path d="M454.6 584.776h109.6l25.3 153.3H429.3z" fill="currentColor" /><path d="M652.2 791.276H366.6l42.8-259.6h200l42.8 259.6z m-222.9-53.2h160.2l-25.3-153.3H454.6l-25.3 153.3z" fill="#fff" /><path d="M618.6 584.776h105.5c4.5 0 8.6 2.2 11.1 6l83.5 126.7c4 6.1 2.3 14.4-3.8 18.4-2.2 1.4-4.7 2.2-7.3 2.2H667.7l-49.1-153.3z" fill="currentColor" /><path d="M807.6 791.276H628.9l-83.1-259.7h178.4c22.4 0 43.2 11.2 55.5 29.9l83.4 126.7c9.8 14.8 13.2 32.6 9.6 50s-13.7 32.3-28.6 42.1c-10.8 7.2-23.5 11-36.5 11z m-139.9-53.2h139.9c2.6 0 5.1-0.8 7.3-2.2 4-2.6 5.3-6.4 5.7-8.4 0.4-2 0.7-6-1.9-10l-83.4-126.6c-2.5-3.8-6.6-6-11.1-6H618.6l49.1 153.2z" fill="#fff" /><path d="M534.1 639.7C652.5 537.4 711.7 445.8 711.7 365c0-127-102.7-212.1-195-212.1s-195 85.1-195 212.1c0 80.8 59.2 172.3 177.7 274.7 9.9 8.6 24.7 8.6 34.7 0z" fill="currentColor" /><path d="M516.7 672.7c-12.5 0-24.9-4.3-34.8-12.9C356.2 551.2 295.1 454.7 295.1 365c0-142.8 114.6-238.7 221.6-238.7S738.3 222.2 738.3 365c0 89.7-61.1 186.2-186.9 294.8-9.8 8.6-22.3 12.9-34.7 12.9z m0-493.2c-79.7 0-168.4 76.2-168.4 185.5 0 72.3 56.7 158 168.4 254.6C628.5 523 685.1 437.3 685.1 365c0-109.3-88.7-185.5-168.4-185.5z" fill="currentColor" /><path d="M516.7 348m-97.5 0a97.5 97.5 0 1 0 195 0 97.5 97.5 0 1 0-195 0Z" fill="currentColor" /><path d="M516.7 472.1c-68.4 0-124.1-55.7-124.1-124.1s55.7-124.1 124.1-124.1S640.8 279.5 640.8 348 585.1 472.1 516.7 472.1z m0-195.1c-39.1 0-70.9 31.8-70.9 70.9 0 39.1 31.8 70.9 70.9 70.9s70.9-31.8 70.9-70.9c0-39.1-31.8-70.9-70.9-70.9z" fill="#ffffff" /></svg>
                </div>
                <div class="text-left">
                    <h3 class="text-xl font-semibold font-Mont">Location</h3>
                    <p class="text-gray-800 font-Lato">8, Desalu Street, Off Olaleye Road, Ebute-Metta, Lagos, Nigeria.</p>
                </div>
            </div>

            <!-- Chat Card -->
            <div class="bg-blue-50 p-6 rounded-lg shadow-lg flex items-center space-x-4">
                <div class="text-blue-600">
                    <svg fill="currentColor" height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 612.002 612.002" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M542.132,251.312l-472.23-0.045c-9.572,0-17.332,7.761-17.335,17.332l-0.029,326.023
				c-0.001,9.572,7.759,17.332,17.331,17.334l472.23,0.045c9.572,0,17.332-7.761,17.335-17.332l0.029-326.023
				C559.465,259.073,551.704,251.312,542.132,251.312z M497.89,285.971L305.995,463.563L114.138,285.937L497.89,285.971z
				 M87.229,308.264l68.739,63.642l-68.752,65.057L87.229,308.264z M524.77,577.333l-437.565-0.04l0.009-92.597l94.25-89.19
				l112.756,104.392c3.322,3.075,7.55,4.613,11.775,4.613c4.226,0,8.452-1.535,11.773-4.61l112.776-104.372l94.234,89.207
				L524.77,577.333z M524.783,437.006l-68.741-65.075l68.752-63.627L524.783,437.006z"/>
			<path d="M128.881,154.287l72.798,0.007l-0.003,47.605c-0.003,9.572,7.758,17.334,17.33,17.334l174.031,0.016
				c9.572,0,17.332-7.759,17.332-17.331l0.006-47.605l72.796,0.007c0.009-0.001,0.02-0.001,0.032-0.001
				c9.572,0.001,17.332-7.758,17.332-17.33c0.003-6.266-3.323-11.756-8.305-14.802L315.742,2.97
				c-5.863-3.959-13.541-3.96-19.404-0.003L119.182,122.59c-6.313,4.264-9.104,12.15-6.875,19.434
				C114.537,149.311,121.262,154.287,128.881,154.287z M306.037,38.247l120.507,81.403l-33.499-0.003
				c-9.572-0.001-17.332,7.759-17.335,17.331l-0.003,47.606l-139.366-0.014l0.004-47.606c0.001-9.572-7.759-17.332-17.331-17.334
				l-33.498-0.003L306.037,38.247z"/>
		</g>
	</g>
</g>
</svg>
                </div>
                <div class="text-left">
                    <h3 class="text-xl font-semibold font-Mont">Have a Message</h3>
                    <p class="text-gray-800 font-Lato"><a wire:navigate href="/contact" class="underline">Send us a message</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- end of contact --}}

 
     
</div>
