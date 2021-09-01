@extends('layouts.master')
@section('title', 'Register')

@section('subtitle')
<!-- containder start  -->
<div class="container">
	<h1>Un useable </h1>
<div class="row">
	<div class="col ">
<h3>Registration section:</h3>

		<form method="post" action="{{route('rg_in')}}">
    @csrf

<input type="hidden" value="{{  $reg_fill->id}}" name="id">
    <div class="row">
    <div class="col border border-dark ">
   
<label for="name"> Student Name:</label>
<input type="text" class="form-control bg-warning" id="name" name="name" placeholder="Enter your Name" value="{{  $reg_fill->Name}}" >

<label for="name"> Course Name</label>
<input type="text" class="form-control" id="id_number" name="course" placeholder="Enter your course"  value="">
         


<br>
Submit:
<button class="btn btn-primary" type="submit">Submit</button>
        </div>
</div>   
</form><br>
<!-- end 1st fom -->
	</div>


</div>
	
</div>

@endsection