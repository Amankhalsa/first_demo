@extends('layouts.master')
@section('title', 'Gallery')

@section('subtitle')


@parent
<center>
<h3>Gallery</h3></center>
<!-- slider start  -->
<div class="container-sm ">
    <div id="carouselExampleCaptions" class="carousel slide  " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner h-50">
        <div class="carousel-item active">
      <img src="{{asset('images/slider/1.jpg')}}" class="d-block w-100 " alt="..." >
        <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Information technology  </h5>
            <p>Information technology (IT) is the use of computers to store or retrieve data and information</p>
        </div>
        </div>
        <div class="carousel-item">
              <!-- <img src="https://source.unsplash.com/1200x500/?Mac,apple" class="d-block w-100" alt="..."> -->
<img src="{{asset('images/slider/3.jpg')}}" class="d-block w-100" alt="...">

        <div class="carousel-caption d-none d-md-block">
            <h5>welcome to Computer programming </h5>
            <p>The short answer is yes. Programming computers is all about learning certain languages.
                Just like learning any type of foreign language,.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{asset('images/slider/2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>welcome to Computer </h5>
            <p>Computers have become a useful and necessary part of modern society.</p>
        </div>
        </div>
          <div class="carousel-item">
        <img src="{{asset('images/slider/4.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>welcome to Computer </h5>
            <p>Computers have become a useful and necessary part of modern society.</p>
        </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
@stop
<!-- slider end -->
@section('para')
@section('newtext')


@endsection


