@extends('layouts.master')
@section('title', 'Updating')


@section('subtitle')

<div class="container">
	<div><h2>Data Updating section</h2></div>
  @if(session('postdata'))
<div class="alert alert-success  alert-dismissible fade show" id="alert-success" role="alert">
  <strong>{{session('postdata')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 
@endif

<form method="post" action="{{ route('dbedit')}}">
@csrf
<input type="hidden" value="{{ $post_fill->id}}" name="id">

<div class="row">
<div class="col ">
<label for="name"> Title :</label>
<input type="text" class="form-control" name="title" placeholder="Enter Title Name" value="{{$post_fill->title}}">
<label for="name">Desctiptions:</label>
<input type="text" class="form-control" name="description" placeholder="Enter your Discriptions"  value="{{$post_fill->description}}">

<br>
Submit:<button class="btn btn-primary" type="submit">Submit</button>
</div>
</div>   
</form>


</div>
@endsection
