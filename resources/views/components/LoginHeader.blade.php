<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="BMA">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>BMA</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/reg.css') }}" />

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>example@bmc.com</a></li>
              {{--<li><a href="#"><i class="fa fa-phone"></i>000-000-0000</a></li>--}}
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/home"><h2>British Medical Accreditation</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="{{ Request::segment(1) === 'home' ? 'active' : null }} nav-item">
                <a class="nav-link" href="{{ url('home' )}}" ></i>Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="programs" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Certifications
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ url('medical' )}}" ></i>Medical</a>
                  <a class="dropdown-item" href="{{ url('teaching' )}}">Teaching</a>
                  <a class="dropdown-item" href="{{ url('psychology' )}}">psychology</a>
                </div>
              </li>
              <li class="{{ Request::segment(1) === 'about' ? 'active' : null }} nav-item">
                <a class="nav-link" href="about">About Us</a>
              </li>
              <li class="{{ Request::segment(1) === 'register' ? 'active' : null }} nav-item">
                <a class="nav-link" href="register">Register</a>
              </li>
              <li class="{{ Request::segment(1) === 'login' ? 'active' : null }} nav-item">
                <a class="nav-link" href="login">Login</a>
              </li>

              {{--<form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>--}}
            </ul>
          </div>
        </div>
      </nav>
    </header>