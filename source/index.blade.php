@extends('_layouts.main')

@section('body')


@include('_layouts.partials.hero')

@php
$products = [
  [
    'title' => 'Retail Packaging',
    'description' => 'Attention-grabbing packaging solutions designed to enhance retail presence.',
    'image' => 'https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'delay' => '100'
  ],
  [
    'title' => 'E-Commerce Packaging',
    'description' => 'Secure, efficient, and branded packaging solutions for online businesses.',
    'image' => 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'delay' => '200'
  ],
  [
    'title' => 'Eco-Friendly Packaging',
    'description' => 'Sustainable packaging solutions that minimize environmental impact.',
    'image' => 'https://images.unsplash.com/photo-1562157873-818bc0726f68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'delay' => '300'
]
];
@endphp
 
  <section class="py-20 bg-white">
    <div class="container-custom">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-4">
          Why Choose SMP?
        </h2>
        <p class="text-lg text-gray-500 max-w-3xl mx-auto">
          We combine premium materials, innovative design, and sustainable practices 
          to create packaging solutions that elevate your brand.
        </p>
      </div>

      <div class="flex flex-col md:flex-row items-center justify-center gap-4">
      
        <div class="bg-orange-100 p-8 rounded-lg text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="text-blue-600 mb-4 flex justify-center">
            <i class="fas fa-cogs fa-2x"></i>
          </div>
          <h3 class="text-xl font-semibold text-smp-navy mb-3">Custom Solutions</h3>
          <p class="text-gray-600">
            Tailored packaging designs that reflect your brand's unique identity
          </p>
        </div>

      
        <div class="bg-orange-100 p-8 rounded-lg text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="text-blue-600 mb-4 flex justify-center">
            <i class="fas fa-leaf fa-2x"></i>
          </div>
          <h3 class="text-xl font-semibold text-smp-navy mb-3">Eco-Friendly</h3>
          <p class="text-gray-600">
            Sustainable materials and processes that reduce environmental impact
          </p>
        </div>

     
        <div class="bg-orange-100 p-8 rounded-lg text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="text-blue-600 mb-4 flex justify-center">
            <i class="fas fa-print fa-2x"></i>
          </div>
          <h3 class="text-xl font-semibold text-smp-navy mb-3">Premium Printing</h3>
          <p class="text-gray-600">
            State-of-the-art printing technology for exceptional quality
          </p>
        </div>

    
        <div class="bg-orange-100 p-8 rounded-lg text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="text-blue-600 mb-4 flex justify-center">
            <i class="fas fa-trophy fa-2x"></i>
          </div>
          <h3 class="text-xl font-semibold text-smp-navy mb-3">Industry Leading</h3>
          <p class="text-gray-600">
            Award-winning designs and solutions trusted by top brands
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- product section --}}

  <section class="py-20 bg-orange-100">
    <div class="container-custom">
      <div class="flex flex-col md:flex-row justify-between items-center mb-12">
        <div data-aos="fade-right">
          <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-4">
            Our Products
          </h2>
          <p class="text-lg text-smp-dark-gray/80 max-w-2xl">
            Discover our range of high-quality packaging solutions designed for various industries.
          </p>
        </div>
        <div class="mt-6 md:mt-0" data-aos="fade-left">
         
            <a href="{{$page->baseUrl}}/product" class="bg-transparent text-[#7a5c41] px-6 py-3 rounded-lg border-2 font-bold border-gray-300 hover:bg-[#ff9700] transition gap-2">
              View All Products
              <i class="fas fa-arrow-right" style="font-size: 16px;"></i>
            </a>
         
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
        @foreach($products as $product)
        <div class="bg-white rounded-lg overflow-hidden shadow-md" data-aos="fade-up" data-aos-delay="{{$product['delay']}}">
          <div class="h-60 overflow-hidden">
            <img 
              src="{{ $product['image'] }}" 
              alt="{{ $product['title'] }}" 
              class="w-full h-full object-cover transition-transform hover:scale-105"
            />
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-smp-navy mb-3">{{ $product['title'] }}</h3>
            <p class="text-gray-600 mb-4">
              {{ $product['description'] }}
            </p>
            <a 
              href="{{$page->baseUrl}}/product" 
              class="text-[#f6c06e] font-medium inline-flex items-center hover:underline"
            >
              Learn More <i class="fas fa-arrow-right ml-2"></i>
          </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>


   {{-- cta section --}}

  <section class="py-20 bg-[#f6c06e] text-white">
    <div class="container-custom">
      <div class="flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="max-w-2xl" data-aos="fade-right">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Ready to Transform Your Packaging?
          </h2>
          <p class="text-lg mb-6 text-white/90">
            Contact our team for a personalized consultation and get a custom quote for your project.
          </p>
          <ul class="space-y-2 mb-8">
            <li class="flex items-center">
              <i class="fas fa-check-circle mr-2 text-gray-100"></i>
              <span>Expert consultation and design support</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check-circle mr-2 text-gray-100"></i>
              <span>Competitive pricing and fast turnaround</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check-circle mr-2 text-gray-100"></i>
              <span>Sustainable options for eco-conscious brands</span>
            </li>
          </ul>
        </div>
        <div data-aos="fade-left">
          <a href="{{$page->baseUrl}}/contact" class="bg-transparent text-[#7a5c41] px-6 py-3 rounded-lg border-2 font-bold border-gray-300 hover:bg-[#ff9700] transition">
           Get Started Today
          </a>        
        </div>
      </div>
    </div>
  </section>
  

@endsection
