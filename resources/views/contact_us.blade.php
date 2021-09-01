@extends('layouts.master')
@section('title', 'Contact us')
@section('navbar')
@section('subtitle')

@parent
<center>
<h3>Contact us page</h3></center>
<!--start contact us page  -->

<div class="container-fluid px-0 mb-1" >
    <img src=" {{asset('images/slider/contact2.jpg')}}" class="d-block w-100 mx-0" alt="...">
</div>
<div class="container mb-3 py-4">
    <h1 class="text-center">Contact Us</h1>


 
        <!-- {{asset('images/slider/2.jpg')}} -->


    <form method="#" action="#">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number">
        </div>

        <div class="form-group">
            <label for="desc">Tell me about what you want to contact me for...</label>
            <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

</div>
<!-- end contact us page  -->
@section('para')

@endsection

  @endsection