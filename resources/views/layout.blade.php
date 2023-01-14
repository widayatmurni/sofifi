<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name')}}</title>
  {{-- STYLES --}}
  <link rel="stylesheet" href="{{ asset('assets/css/sofifi.style.css') }}">
  {{-- FONTS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  
  @stack('headerResources')
</head>
<body>
  @yield('pageContent')
  <script src="{{ asset('assets/js/sofifi-script.js') }}"></script>
</body>
</html>