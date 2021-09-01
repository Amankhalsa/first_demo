@extends('layouts.master')
@section('title', 'DB Store')

@section('subtitle')

<!--start contact us page  -->
@if(session('sucess'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('sucess')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<!-- <div class="row">
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div> -->
    <h1 class="text-center">DB Store</h1>
    <form method="post" action="{{url('/store')}}">
    @csrf

    <div class="row">
    <div class="col">
       
            <label for="name"> Student Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
@if($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span><br>
@endif
  

            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">

@if($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span><br>
@endif

        </div>
         <div class="col">
     
            <label for="name"> Roll No:</label>
            <input type="text" class="form-control" id="id_number" name="number" placeholder="Enter your Roll no 0-99" maxlength="2">
@if($errors->has('number'))
<span class="text-danger">{{ $errors->first('number') }}</span><br>
@endif
            <label for="phone">Phone Number:</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter 10 digits  Phone Number " >
@if($errors->has('phone'))
<span class="text-danger">{{ $errors->first('phone') }}</span><br>
@endif
        <!-- </div> -->
</div>
    

</div>     
    @if(session('error'))
<div class="alert alert-danger  alert-dismissible fade show" id="alert-success" role="alert">
  <strong>{{session('error')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<br>
        <button class="btn btn-primary" type="submit">Submit</button>
</form>
      
<div class="container-fluid px-0 mb-1" >
    <img src="https://source.unsplash.com/1200x400/?database,data" class="d-block w-100 mx-0" alt="...">
</div>
<div class="container mb-3 py-4">


<!-- end contact us page  -->


@endsection

