<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Digital Library</title>

  <!-- Fonts -->
 
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  {{-- <link rel="stylesheet" href="frontend"> --}}
  <link rel="stylesheet" href="#">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Styles -->
  
</head>


<body>
  <div class="Navigation" style="color:#4b5563;">
    <nav class="navbar navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " href="/">Digital PUB&LIB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
              </li>
              <li>
                <a class="nav-link active" href="{{ url('form')}}">login</a>
              </li>
              <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Profile
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="{{ url('Uaccount')}}">Account</a></li>
                <li><a class="dropdown-item" href="{{ url('profile')}}">Identity</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ url('get/cart')}}">Book Cart</a></li>
              </ul>
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category Book
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href=""></a></li>
              </ul>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('subscription')}}">Subscription</a>
              </li>
              <li class="nav-item dropdown">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
  
  @yield('content')


  @extends('layout.footer')
