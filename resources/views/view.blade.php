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
<style>
  *,html,body{
    padding:0;
    margin:0
  }
</style>

  </head>

  <body>


    <!-- ***** Preloader End ***** -->

    <!-- Header -->
  
    <header class="bg-dark" style="margin-top: -20px;">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/home"><h2>British Medical Accreditation</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            
              <!--<li class="{{ Request::segment(1) === 'login' ? 'active' : null }} nav-item">
                <a class="nav-link" href="login">Login</a>
              </li> -->
              <li class="{{ Request::segment(1) === 'portal' ? 'active' : null }} nav-item">
                <a class="nav-link" href="../portal">Portal</a>
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
    <div style="text-align: center; margin-top:10px" class="container">
    <div class="row">
    <div class="col-md-6">
    <img src="/assets/images/BMA_Cert/<?php echo $id ?>.jpg"class="rounded" alt="..." style="width:100%; margin-top:100px; border:1px solid #333">

    </div>
    <div class="col-md-6">    
    <img src="/assets/images/BMA_Transcripts/<?php echo $id ?>.jpg"class="rounded" alt="..." style="width:100%; margin-top:100px; border:1px solid #333">
</div>
    </div>

</div>

<script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
    