<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preload" as="font" href="{{ URL::to('public/frontend/fonts/lato-v20-latin-ext_latin-regular.html') }}" type="font/woff2">
    <link rel="preload" as="font" href="{{ URL::to('public/frontend/fonts/lato-v20-latin-ext_latin-700.html') }}" type="font/woff2">
    <link rel="preload" as="font" href="{{ URL::to('public/frontend/fonts/lato-v20-latin-ext_latin-900.html') }}" type="font/woff2">
    <link rel="preload" as="font" href="{{ URL::to('public/frontend/fonts/merriweather-v27-latin-ext_latin-regular.html') }}" type="font/woff2">
    <link rel="preload" as="font" href="{{ URL::to('public/frontend/fonts/merriweather-v27-latin-ext_latin-700.html') }}" type="font/woff2">
    <link rel="preload" as="font" href="{{ URL::to('public/frontend/fonts/merriweather-v27-latin-ext_latin-900.html') }}" type="font/woff2">
    <link rel="preload" as="font" href="{{ URL::to('public/frontend/fonts/pe-icon-7-stroke/fonts/Pe-icon-7-stroke.woff') }}" type="font/woff">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="preload" as="image" href="{{ URL::to('public/frontend/img/webp/photo1.html') }}">
    <link rel="preload" as="image" href="{{ URL::to('public/frontend/img/webp/photo2.html') }}">
    <link rel="preload" as="image" href="{{ URL::to('public/frontend/img/webp/photo1_2x.html') }}">
    <link rel="preload" as="image" href="{{ URL::to('public/frontend/img/webp/photo2_2x.html') }}">
    <link rel="stylesheet" href="{{ URL::to('public/frontend/css/main.css') }}">
    <title>DBlog - Blog for Developers</title>
  </head>
  <body>
      @include('frontend.layouts.header')
      @include('frontend.layouts.sidebar')
      @include('frontend.layouts.feature')
      @yield('main')
  <!-- Footer -->
  <script type="text/javascript" src="{{ URL::to('public/frontend/lib/glide.min.js') }}" defer></script>
  <script type="text/javascript" src="{{ URL::to('public/frontend/lib/bootstrap.min.js') }}" defer></script>
  <script type="text/javascript" src="{{ URL::to('public/frontend/lib/reframe.js') }}" defer></script>
  <script type="text/javascript" src="{{ URL::to('public/frontend/js/main.js') }}"></script>
  </body>
</html>