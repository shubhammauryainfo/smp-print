@extends('_layouts.main')
@section('title', 'About - SMP')
@section('body')
@include('_layouts.partials.after-nav', [
    'title' => 'About SMP Print & Packaging',
    'subtitle' => "We're dedicated to delivering premium print and packaging solutions that help brands stand out in a competitive marketplace."
])

@php

$coreValues = [
        [
            'title' => 'Quality Excellence',
            'description' => 'We never compromise on quality. Every product we deliver meets the highest standards in materials, printing, and finishing.',
            'icon' => 'fa-award',
            'delay' => 100,
        ],
        [
            'title' => 'Innovation',
            'description' => 'We continuously explore new materials, techniques, and designs to bring fresh and effective packaging solutions to our clients.',
            'icon' => 'fa-chart-line',
            'delay' => 200,
        ],
        [
            'title' => 'Customer Focus',
            'description' => 'Our clients\' needs always come first. We listen, collaborate, and deliver solutions that align with their specific goals and requirements.',
            'icon' => 'fa-users',
            'delay' => 300,
        ],
        [
            'title' => 'Responsibility',
            'description' => 'We take our environmental and social responsibilities seriously, offering sustainable options and maintaining ethical business practices.',
            'icon' => 'fa-bullseye',
            'delay' => 100,
        ],
        [
            'title' => 'Reliability',
            'description' => 'Our clients can depend on us to deliver on time, every time, with consistent quality and service excellence.',
            'icon' => 'fa-history',
            'delay' => 200,
        ],
        [
            'title' => 'Integrity',
            'description' => 'We conduct our business with honesty, transparency, and fairness in all our relationships and transactions.',
            'icon' => 'fa-check-circle',
            'delay' => 300,
        ],
    ];

    $teamMembers = [
        [
            'name' => 'John Smith',
            'position' => 'CEO & Founder',
            'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'description' => 'With over 20 years in the packaging industry, John\'s vision and leadership have driven SMP\'s growth and innovation.',
            'delay' => 100,
        ],
        [
            'name' => 'Sarah Johnson',
            'position' => 'Creative Director',
            'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'description' => 'Sarah brings creative excellence to every project, ensuring each design meets and exceeds client expectations.',
            'delay' => 200,
        ],
        [
            'name' => 'Michael Chen',
            'position' => 'Operations Manager',
            'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'description' => 'Michael ensures smooth operations and high-quality production with his expertise in manufacturing processes.',
            'delay' => 300,
        ],
    ];

@endphp

{{-- story --}}
<section class="py-20 bg-white">
    <div class="container-custom">
      <div class="flex flex-col md:flex-row gap-12 items-center">
        <div class="md:w-1/2" data-aos="fade-right">
          <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-6">
            Our Story
          </h2>
          <p class="text-lg text-gray-800/80 mb-6">
            SMP Print & Packaging was founded in 2005 with a simple mission: to provide businesses with high-quality packaging solutions that enhance brand perception and customer experience.
          </p>
          <p class="text-lg text-gray-800/80 mb-6">
            Over the years, we've grown from a small print shop to a full-service packaging solutions provider, serving clients across various industries from retail to e-commerce, food & beverage, and more.
          </p>
          <p class="text-lg text-gray-800/80">
            Today, we combine traditional craftsmanship with cutting-edge technology to deliver packaging that not only protects your products but also tells your brand story.
          </p>
        </div>
        <div class="md:w-1/2" data-aos="flip-right">
          <img 
            src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
            alt="Our Story" 
            class="rounded-lg shadow-lg w-full"
          />
        </div>
      </div>
    </div>
  </section>



  {{-- core values --}}

  <section class="py-20 bg-gray-100">
    <div class="container-custom">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-4">
                Our Core Values
            </h2>
            <p class="text-lg text-smp-dark-gray/80 max-w-3xl mx-auto">
                These principles guide everything we do at SMP Print & Packaging.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($coreValues as $value)
                <div class="bg-white p-8 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="{{ $value['delay'] }}">
                    <div class="text-blue-600 mb-4">
                        <i class="fas {{ $value['icon'] }} fa-2x"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-smp-navy mb-3">{{ $value['title'] }}</h3>
                    <p class="text-gray-800/80">
                        {{ $value['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- team secton --}}

<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-4">
                Meet Our Leadership Team
            </h2>
            <p class="text-lg text-smp-dark-gray/80 max-w-3xl mx-auto">
                The experienced professionals who guide our company to excellence.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($teamMembers as $member)
                <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $member['delay'] }}">
                    <div class="mb-4 overflow-hidden rounded-full w-48 h-48 mx-auto">
                        <img 
                            src="{{ $member['image'] }}" 
                            alt="{{ $member['name'] }}" 
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-semibold text-smp-navy">{{ $member['name'] }}</h3>
                    <p class="text-blue-600 mb-3">{{ $member['position'] }}</p>
                    <p class="text-gray-800/80">
                        {{ $member['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>


 {{-- CTA Section  --}}

<section class="py-16 bg-[#f6c06e] text-white">
  <div class="container-custom text-center">
    <div class="max-w-3xl mx-auto" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">
        Ready to Work With Us?
      </h2>
      <p class="text-lg mb-8 text-white/90">
        Contact our team today to discuss your packaging needs and learn how we can help elevate your brand.
      </p>
      <a
        class="bg-transparent text-[#7a5c41] px-6 py-3 rounded-lg border-2 font-bold border-gray-300 hover:bg-[#ff9700] transition"
      
        href="{{$page->baseUrl}}/contact">
          Get In Touch
    </a>
   
    </div>
  </div>
</section>




  

@endsection
