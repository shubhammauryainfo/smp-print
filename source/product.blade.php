@extends('_layouts.main')
@section('title', 'Products - SMP')
@section('body')
@include('_layouts.partials.after-nav', ['title' => 'Our Products & Solutions', 'subtitle' => 'Discover our comprehensive range of print and packaging solutions designed to elevate your brand and meet your specific business needs.'])

@php

$products = [
    [
        'title' => 'Retail Boxes',
        'description' => 'Custom retail packaging boxes designed to stand out on shelves and enhance brand visibility.',
        'icon' => 'fa-box',
        'image' => 'https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'title' => 'E-Commerce Packaging',
        'description' => 'Secure and branded packaging solutions optimized for shipping and unboxing experiences.',
        'icon' => 'fa-box-open',
        'image' => 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'title' => 'Shopping Bags',
        'description' => 'Premium paper and reusable shopping bags that leave a lasting impression.',
        'icon' => 'fa-shopping-bag',
        'image' => 'https://images.unsplash.com/photo-1562157873-818bc0726f68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'title' => 'Gift Packaging',
        'description' => 'Elegant gift boxes and wrapping solutions for special occasions and premium products.',
        'icon' => 'fa-gift',
        'image' => 'https://images.unsplash.com/photo-1513201099705-a9746e1e201f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'title' => 'Food Packaging',
        'description' => 'Safe, functional, and attractive packaging solutions for the food and beverage industry.',
        'icon' => 'fa-utensils',
        'image' => 'https://images.unsplash.com/photo-1606208855445-b04148224e53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'title' => 'Eco-Friendly Solutions',
        'description' => 'Sustainable packaging options made from recycled and biodegradable materials.',
        'icon' => 'fa-leaf',
        'image' => 'https://images.unsplash.com/photo-1627384113944-4ac706212146?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
];
@endphp

{{-- all products --}}

<section class="py-20 bg-gray-100">
    <div class="container-custom">
      <div class="mb-16 text-center" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-4">
          Packaging Solutions
        </h2>
        <p class="text-lg text-smp-dark-gray/80 max-w-3xl mx-auto">
          We offer a wide range of customizable packaging options to meet your brand's specific needs.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
     
        @foreach($products as $product)
        <div class="bg-white rounded-lg overflow-hidden shadow-md" data-aos="fade-up">
            <div class="h-60 overflow-hidden relative">
              <img 
                src="{{ $product['image'] }}" 
                alt="{{ $product['title'] }}"
                class="w-full h-full object-cover transition-transform hover:scale-105"
              />
              <div class="absolute top-4 left-4 bg-blue-600 p-2 rounded-full text-white">
              <i class="fas {{ $product['icon'] }}"></i>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-smp-navy mb-3">{{ $product['title'] }}</h3>
              <p class="text-smp-dark-gray/80 mb-4">
                {{ $product['description'] }}
              </p>
            
                <a href="{{$page->baseUrl}}/contact" class="bg-transparent text-[#7a5c41] px-4 py-2 rounded-lg border-2 font-bold border-gray-300 hover:bg-[#ff9700] transition">
                  Request Quote
                  <i class="fas fa-arrow-right" style="font-size: 16px;"></i>
                </a>
             
            </div>
          </div>
       @endforeach


      </div>
    </div>
  </section>



  {{-- service section --}}
  <section class="py-20 bg-white">
    <div class="container-custom">
      <div class="flex flex-col md:flex-row gap-12 items-center">
        <div class="md:w-1/2" data-aos="fade-right">
          <img 
            src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
            alt="Print Services" 
            class="rounded-lg shadow-lg w-full"
          />
        </div>
        <div class="md:w-1/2" data-aos="fade-left">
          <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-6">
            Print Services
          </h2>
          <p class="text-lg text-smp-dark-gray/80 mb-6">
            Beyond packaging, we offer comprehensive print services to meet all your branding and marketing needs.
          </p>
          <ul class="space-y-4 mb-8">
            <li class="flex items-start">
              <div class="bg-gray-400 p-1 rounded-full text-white mr-3 mt-1">
                <i class="fas fa-arrow-right"></i>
              </div>
              <div>
                <h3 class="font-semibold text-smp-navy">Marketing Materials</h3>
                <p class="text-smp-dark-gray/80">Brochures, flyers, catalogs, and promotional materials</p>
              </div>
            </li>
            <li class="flex items-start">
              <div class="bg-gray-400 p-1 rounded-full text-white mr-3 mt-1">
                <i class="fas fa-arrow-right"></i>
              </div>
              <div>
                <h3 class="font-semibold text-smp-navy">Business Stationery</h3>
                <p class="text-smp-dark-gray/80">Business cards, letterheads, envelopes, and notepads</p>
              </div>
            </li>
            <li class="flex items-start">
              <div class="bg-gray-400 p-1 rounded-full text-white mr-3 mt-1">
                <i class="fas fa-arrow-right"></i>
              </div>
              <div>
                <h3 class="font-semibold text-smp-navy">Labels & Stickers</h3>
                <p class="text-smp-dark-gray/80">Custom labels, product stickers, and promotional decals</p>
              </div>
            </li>
            <li class="flex items-start">
              <div class="bg-gray-400 p-1 rounded-full text-white mr-3 mt-1">
                <i class="fas fa-arrow-right"></i>
              </div>
              <div>
                <h3 class="font-semibold text-smp-navy">Large Format Printing</h3>
                <p class="text-smp-dark-gray/80">Posters, banners, signs, and exhibition displays</p>
              </div>
            </li>
          </ul>
          <a
            class="bg-transparent text-[#7a5c41] px-4 py-2 rounded-lg border-2 font-bold border-gray-300 hover:bg-[#ff9700] transition"
           
           href="{{$page->baseUrl}}/contact">
              Inquire About Print Services
            </a>
          </Button>
        </div>
      </div>
    </div>
  </section>


  {{-- material section --}}
    <section class="py-20 bg-gray-100">
        <div class="container-custom">
          <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-4">
              Quality Materials
            </h2>
            <p class="text-lg text-smp-dark-gray/80 max-w-3xl mx-auto">
              We use only the highest quality materials to ensure durability, appearance, and sustainability.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-8 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-xl font-semibold text-smp-navy mb-3">Premium Paper & Cardboard</h3>
              <p class="text-smp-dark-gray/80">
                High-quality paper and cardboard materials in various weights and finishes
              </p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
              <h3 class="text-xl font-semibold text-smp-navy mb-3">Eco-Friendly Materials</h3>
              <p class="text-smp-dark-gray/80">
                Recycled, biodegradable, and compostable options for environmentally conscious brands
              </p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
              <h3 class="text-xl font-semibold text-smp-navy mb-3">Specialty Finishes</h3>
              <p class="text-smp-dark-gray/80">
                Embossing, foil stamping, spot UV, and other premium finishing options
              </p>
            </div>
          </div>
        </div>
      </section>


  

@endsection
