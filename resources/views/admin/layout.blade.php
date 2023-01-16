<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Sofifi | Admin</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/assets/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/assets/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/assets/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/assets/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/assets/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/assets/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('assets/assets/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        SOFIFI
        {{-- <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('')}}assets/brand/coreui.svg#full"></use>
        </svg> --}}
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link active" href="{{ route('admin.sofifi')}}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('assets/icons/free.svg#cil-speedometer') }}"></use>
            </svg> Sofifi Apps</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.bulletin')}}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('assets/icons/free.svg#cil-drop')}}"></use>
            </svg> Bulletin</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.gallery') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('assets/icons/free.svg#cil-pencil')}}"></use>
            </svg> Dokumentasi</a>
        </li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="{{ asset('assets/icons/free.svg#cil-menu')}}"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="{{ asset('assets/assets/brand/coreui.svg#full')}}"></use>
            </svg></a>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('assets/assets/img/avatars/1.jpg')}}" alt="user@email.com"></div></a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                  <div class="dropdown-header bg-light py-2">
                      <div class="fw-semibold">Akun</div>
                  </div>
  
                  <a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('assets/icons/free.svg#cil-account-logout')}}"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          
          @yield('contents')

        </div>
      </div>
      <footer class="footer">
          <div>
              <a href="#">Hastama Tech</a> &copy; 2023
          </div>
          <div class="ms-auto">
              Powered by &nbsp; Coreui Components
              <a href="#"></a>
          </div>
      </footer>
  </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('assets/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tooltips.js') }}"></script>
    @stack('bodyScript')
  </body>
</html>