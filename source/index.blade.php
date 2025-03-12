@extends('_layouts.main')

@section('body')


@include('_layouts.partials.hero')
 
{{-- companys section --}}

<section class="bg-[#ddd1ae] py-10">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
      <h2 class="text-xl font-semibold mb-6">Trusted By</h2>
      <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
        <img src="{{$page->baseUrl}}/assets/images/company/1.png" alt="1 Logo" class="h-20 object-contain mix-blend-color-burn   md:h-16">
        <img src="{{$page->baseUrl}}/assets/images/company/2.jpg" alt="2 Logo" class="h-20  mix-blend-color-burn  md:h-16">
        <img src="{{$page->baseUrl}}/assets/images/company/3.png" alt="crompton Logo" class="h-10 md:h-20 mix-blend-color-burn ">
        <img src="{{$page->baseUrl}}/assets/images/company/4.png" alt="4" class="h-10 md:h-16">
        {{-- <img src="{{$page->baseUrl}}/assests/images/company/1.png" alt="Adidas Logo" class="h-10 md:h-16">
        <img src="{{$page->baseUrl}}/assests/images/company/1.png" alt="Puma Logo" class="h-10 md:h-16"> --}}
      </div>
    </div>
  </section>
  

@endsection
