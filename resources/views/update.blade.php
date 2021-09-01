@extends('layouts.master')
@section('title', 'Update')

@section('subtitle')
<!-- containder start  -->
<div class="container">
<div class="row">
	<div class="col ">
<h3>Data update section:</h3>

		<form method="post" action="{{route('new_up')}}">
    @csrf

<input type="hidden" value="{{ $get_show->id}}" name="id">
    <div class="row">
    <div class="col border border-dark ">
   
<label for="name"> Student Name:</label>
<input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" value="{{ $get_show->Name}}">

<label for="name"> Roll No:</label>
<input type="text" class="form-control" id="id_number" name="number" placeholder="Enter your Roll no 0-99" maxlength="2" value="{{ $get_show->Roll}}">
         

<label for="Email">Email Id:</label>
<input type="Email" class="form-control bg-warning" id="" name="email" placeholder="Enter 10 digits  Phone Number " maxlength="10" value="{{ $get_show->Email}}" disabled="">   
<label for="phone">Phone Number:</label>
<input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter 10 digits  Phone Number " maxlength="10" value="{{ $get_show->Phone}}">
         

         <!-- alert -->
  @if(session('error'))
<div class="alert alert-danger  alert-dismissible fade show" id="alert-success" role="alert">
  <strong>{{session('error')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 
@endif
<!-- end alert -->
<br>
Submit:        <button class="btn btn-primary" type="submit">Submit</button>
        </div>
</div>   
</form><br>
<!-- end 1st fom -->
	</div>


</div>
	
</div>

@endsection