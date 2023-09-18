<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') . ' | Artikel Imigrasi Ternate' }}</title>
  {{-- STYLES --}}
  <link rel="stylesheet" href="{{ url(asset('public/assets/css/sofifi.style.css')) }}">
  {{-- FONTS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  
  <style>
    @font-face {
      font-family: 'Black Ops One';
      font-display: swap;
      font-style: normal;
      font-weight: 400;
      src: local('Black Ops One Regular'), local('BlackOpsOne-Regular'), url(https://fonts.gstatic.com/s/blackopsone/v11/qWcsB6-ypo7xBdr6Xshe96H3aDvbtxsis4I.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
  </style>

  @stack('headerResources')
</head>
<body>
  @yield('Articles')
  <script src="{{ url(asset('public/assets/js/sofifi-script.js')) }}"></script>
</body>
</html>