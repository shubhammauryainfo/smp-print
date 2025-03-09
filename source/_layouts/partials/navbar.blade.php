<nav id="navbar" class="bg-transparent fixed w-full z-20">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
      <a href="{{$page->baseUrl}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{$page->baseUrl}}/assets/images/logo.png" class="h-14 " alt="Flowbite Logo">
      </a>
      <div class="flex flex-1 md:flex-none md:order-2 justify-end space-x-3 rtl:space-x-reverse">
        <a href="{{$page->baseUrl}}/contact">
        <button type="button" class="text-white bg-transparent border-2  hover:bg-[#ff9700] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 hidden  md:flex">CONTACT US</button>
        </a>
        <button id="navbar-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
        </button>
      </div>
      <div class="items-center justify-between w-full hidden lg:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
          @if(!empty($page['menus']))
            @foreach ($page['menus'] as $menu)
              <li class="border-b md:border-0 border-gray-300">
                <a href="{{ $page->baseUrl.$menu['url'] }}" class="block py-2 px-3 text-gray-200 rounded md:hover:bg-transparent font-semibold text-md md:hover:text-[#7a5c41] md:p-0">{{ $menu['label'] }}</a>
              </li>
            @endforeach
          @else
            <p>No data available</p>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  
  <script>
    document.getElementById("navbar-toggle").addEventListener("click", function () {
      const navbarMenu = document.getElementById("navbar-sticky");
      navbarMenu.classList.toggle("hidden");
    });


    document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    // Handle scroll event to change navbar background
    const handleScroll = () => {
      if (window.scrollY > 60) {
        navbar.classList.add('bg-[#191A1E]', 'bg-opacity-85', 'backdrop-blur-md');
        navbar.classList.remove('bg-transparent');
      } else {
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('bg-[#191A1E]', 'bg-opacity-85', 'backdrop-blur-md');
      }
    };

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);

    // Handle mobile menu toggle
    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });

    // Cleanup (optional for single-page static websites)
    window.addEventListener('beforeunload', () => {
      window.removeEventListener('scroll', handleScroll);
    });
  });
  </script>