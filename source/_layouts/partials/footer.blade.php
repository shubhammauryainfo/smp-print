<footer class="bg-[#694429] text-gray-200 py-10">
  <div class="max-w-7xl mx-auto px-6 md:px-12">
    <!-- Footer Top Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- About Section -->
      <div class="flex flex-col items-center lg:items-start">
        <img src="{{$page->baseUrl}}/assets/images/logo.png" alt="logo" class="h-16 mb-4">
        <p class="text-sm text-center lg:text-left leading-relaxed">
          SMP Print & Packaging is committed to delivering high-quality printing and packaging solutions that help your brand stand out.
        </p>
      </div>

    
      <div class="flex flex-col items-center lg:items-start">
        <h3 class="text-xl font-bold mb-4">Quick Links</h3>
        <ul class="space-y-2">
          <li><a href="{{$page->baseUrl}}/" class="hover:text-white transition-colors">Home</a></li>
          <li><a href="{{$page->baseUrl}}/about" class="hover:text-white transition-colors">About</a></li>
          <li><a href="{{$page->baseUrl}}/product" class="hover:text-white transition-colors">Product</a></li>
          <li><a href="{{$page->baseUrl}}/contact" class="hover:text-white transition-colors">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Section -->
      <div class="flex flex-col items-center lg:items-start">
        <h3 class="text-xl font-bold mb-4">Contact Us</h3>
        <ul class="space-y-2">
          <li><i class="fa-solid fa-envelope"></i> <a href="mailto:info@smpprint.com" class="hover:text-white transition-colors">info@smpprint.com</a></li>
          <li><i class="fa-solid fa-phone-volume"></i> <a href="tel:+918888888888" class="hover:text-white transition-colors">+91 88888 88888</a></li>
          <li><i class="fa-solid fa-map-location"></i> 123 Packaging St., Vasai, Palghar, India</li>
          <li>
            <div class="flex space-x-6 mt-2">
              <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors"><i class="fab fa-facebook fa-lg"></i></a>
              <a href="#" class="text-gray-400 hover:text-black transition-colors"><i class="fab fa-x-twitter fa-lg"></i></a>
              <a href="#" class="text-gray-400 hover:text-pink-500 transition-colors"><i class="fab fa-instagram fa-lg"></i></a>
              <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-linkedin fa-lg"></i></a>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Footer Bottom Section -->
    <div class="mt-8 border-t border-gray-700 pt-6 text-center lg:text-left flex flex-col lg:flex-row justify-center lg:justify-center items-center space-y-4 lg:space-y-0">
    &copy;  <p><script>document.write(new Date().getFullYear());</script> SMP Print & Packaging Designed with <span class="text-red-500">❤️</span> by <strong><a href="https://nexbytes.rf.gd" target="_blank">Nexbytes</a></strong></p>
    </div>
  </div>
</footer>
