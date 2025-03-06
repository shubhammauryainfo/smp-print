<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>@yield('title', 'SMP Print & Packaging')</title>
        @include('_layouts.partials.favicon')

        @if($page->production)
        <link rel="stylesheet" href="{{$page->baseUrl}}/assets/build/css/main.css">
        <script defer src="{{$page->baseUrl}}/assets/build/js/main.js"></script>
    @else
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @endif
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @yield('body')
    </body>
</html>
