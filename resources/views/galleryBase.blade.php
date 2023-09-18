<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') . ' | Artikel Imigrasi Ternate' }}</title>
  {{-- STYLES --}}
  <link rel="stylesheet" href="{{ url(asset('assets/css/sofifi.style.css')) }}">
  {{-- FONTS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  
  @stack('headerResources')
</head>
<body>
  @yield('Galleries')
  <script src="{{ asset('assets/js/sofifi-script.js') }}"></script>
  @stack('bodyResouces')
</body>
</html>