   <nav
       class="border-gray-200 px-2 sm:px-4 py-4 w-full top-0 mb-4 {{ $background }} {{ $text }} {{ $shadow }}">
       <div class="hidden md:flex justify-between">
           <a href="{{ url('/') }}" class="ml-10 text-2xl">{{ $site->title }}</a>
           <div class="mr-7 flex justify-center items-center">
               <ul class="flex flex-col md:flex-row md:space-x-8 md:mt-0 text-md font-bold  font-adventpro">
                   <li>
                       <a href="{{ route('front.all.listings') }}" class="">Listings</a>
                   </li>
                   <li>
                       <a href="{{ route('front.remodel') }}" class="">Remodeling</a>
                   </li>
                   <li>
                       <a href="{{ route('front.buildingprocess') }}" class="">Building Process</a>
                   </li>
               </ul>
               <a class="ml-10 font-adventpro w-48 h-12 bg-blue-600 rounded-tr-2xl text-white font-bold py-2  px-7 text-xl"
                   href="{{ route('front.contact') }}">Contact Us <i
                       class="fas fa-long-arrow-alt-right ml-6 text-white" style="font-size: 19px"></i></a>
           </div>
       </div>
       <div class="md:hidden flex justify-between items-end flex-row">
           <a href="{{ url('/') }}">
               <p class="text-2xl mt-4 ml-2">{{ $site->title }}</p>
           </a>
           <button class="outline-none mobile-menu-button ml-28">
               <svg class="ml-10 w-10 h-10 {{ $text }} hover:{{ $text }}" x-show="!showMenu"
                   fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                   stroke="currentColor">
                   <path d="M4 6h16M4 12h16M4 18h16"></path>
               </svg>
           </button>
       </div>
       <!-- mobile menu -->
       <div
           class="hidden mobile-menu font-adventpro font-bold text-xl {{ $background_mobile }} {{ $text_mobile }} ml-32">
           <ul class="ml-10">
               <li><a href="{{ route('front.all.listings') }}"
                       class="block px-2 py-4 hover:bg-blue-600 hover:rounded hover:text-white transition duration-300">Listings</a>
               </li>
               <li><a href="{{ route('front.remodel') }}"
                       class="block px-2 py-4 hover:bg-blue-600 hover:rounded hover:text-white transition duration-300">Remodeling</a>
               </li>
               <li><a href="{{ route('front.buildingprocess') }}"
                       class="block px-2 py-4 hover:bg-blue-600 hover:rounded hover:text-white transition duration-300">Building
                       Process</a>
               </li>
               <li><a href="{{ route('front.contact') }}"
                       class="block px-2 py-4 hover:bg-blue-600 hover:rounded hover:text-white transition duration-300">Contact
                       Us</a></li>
           </ul>
       </div>
   </nav>
