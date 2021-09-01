<!DOCTYPE html>
<html>
<head>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title') - Amankhalsa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="icon" href=""> -->
   <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />
   <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <style type="text/css">


  </style>

</head>
<body>
@yield('navbar')  

<nav class=" navbar-expand-lg  navbar navbar-dark mystyle sticky-top">
  <a class="navbar-brand" href="{{url ('/gallery')}}">
    <!-- <i class="fa fa-apple col-5" style="font-size:30px;color:white;"></i> -->
    <img src="{{asset('images/aman.jpg')}}" style=" border-radius: 50%;width: 30px; height: 30px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" >
    <a href="{{ route('view_data')}}">View</a>
  </li>
   <li class="nav-item" >
    <a href="{{route('post_myfom')}}">Post Disc</a>
  </li>
      <li class="nav-item">
    <a href="https://localhost/phpmyadmin/" target="_blank">PHP Admin</a>

      <li class="nav-item">
    <a href="{{route('dbstore')}}">Data base</a>
    </li>
        </li>
      <li class="nav-item">
    <a href="{{route('qb_rel')}}">Course</a>
    </li>
    <li class="nav-item">
    <a href="{{route('orm_rel')}}">ORM 1</a>
    </li>

    <li class="nav-item">
    <a href="{{route('orm')}}">ORM 2</a>
    </li>

      <li class="nav-item">
    <a href="{{route('contact_us')}}">Contact us</a>
    </li>
    </ul>
 <!--    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form> -->

  </div>
</nav>



  <div class="container overflow-auto text-wrap table-hover">
@section('subtitle')
<center><h4>Welcome </h4></center>
@show
@yield('para')

@if(Request::is('gallery'))

<center><h1>laravel</h1></center>
<div class="row">
<div class="col ">
  <h2>Laravel 8</h2>
  <p>
Laravel 8 continues the improvements made in Laravel 7.x by introducing Laravel Jetstream, model factory classes, migration squashing, job batching, improved rate limiting, queue improvements, dynamic Blade components, Tailwind pagination views, time testing helpers, improvements to artisan serve, event listener improvements, and a variety of other bug fixes and usability improvements..</p>
</div>
<div class="col ">
 <h2>Laravel Jetstream</h2>
  <p> 
Laravel Jetstream was written by Taylor Otwell. 

Laravel Jetstream is a beautifully designed application scaffolding for Laravel. Jetstream provides the perfect starting point for your next project and includes login, registration, email verification, two-factor authentication, session management, API support via Laravel Sanctum, and optional team management. Laravel Jetstream replaces and improves upon the legacy authentication UI scaffolding available for previous versions of Laravel.</p>
</div>
</div>
@endif
@if(!Request::is('database','post_form','db_up_data'))

<div class="jumbotron jumbotron-fluid bg-gray border border-dark">
  <div class="container">
    <center>
     <a class="navbar-brand" href="{{url ('/gallery')}}">
      <i class="fa fa-apple col-5" ></i></a>
    </center>
   <center> 
    <h1 class="display-4 font-weight-bold">
    Footer section </h1>
  </center>
   

  </div>
    <center>
    <p class="font-weight-bold">Copyright &copy; 2021 Developed by <span class="text-primary">   AmanKhalsa</span></p></center>
</div>

@endif

@yield('newtext')


<!-- containter end -->
@show
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<script type="text/javascript">
 
</script>
</body>
</html>