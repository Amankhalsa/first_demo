@extends('layouts.master')
@section('title', 'Post')


@section('subtitle')

<div class="container ">
	<h1>Post Description Page:</h1>

  <b style="float: right;">
    Total:
    <span class="badge badge-danger">
      {{count($Post_data)}}
    </span>
  </b>
<br>
  @if(session('update'))
<div class="alert alert-primary  alert-dismissible fade show" id="alert-success" role="alert">
  <strong>{{session('update')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 
@endif
<form method="post" action="{{route('db_post')}}">
@csrf

<input type="hidden" value="" name="id">
<div class="row">
<div class="col ">
<label for="name"> Title :</label>
<input type="text" class="form-control" id="name" name="title" placeholder="Enter Title Name" value="">
<label for="name">Desctiptions:</label>
<input type="text" class="form-control" id="id_number" name="description" placeholder="Enter your Discriptions"  value="">

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
</form>
<!-- table -->
<table class="table table-striped flex-wrap col-12">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">Sl.No</th>
      <th scope="col">Title</th>
      <th scope="col">Desription</th>
 <!--      <th scope="col">Created at </th>
      <th scope="col">Updated  at </th> -->
      <th scope="col" colspan="2" ><center>Action </center></th>

    </tr>
  </thead>
  <tbody>
  	@foreach($Post_data as $get_data)
    <tr>
      <th scope="row">{{ $loop->index+1}}</th>
      <td scope="row" class="text-danger font-weight-bold">{{ucwords($get_data->title)}}</td>
      <td scope="row" class="font-weight-bold">{{ucwords($get_data->description)}}</td>
     <!--  <td class="font-weight-bold">{{Carbon\Carbon::parse($get_data->created_at)->diffForHumans()}}</td>
      <td class="font-weight-bold">{{Carbon\Carbon::parse($get_data->updated_at)->diffForHumans()}}</td> -->
      <td scope="row">
      	<span class="btn btn-info">
      		<a href="{{route('db_up_data',$get_data->id)}}" class="font-weight-bold">Edit</a>
      	</span>
      </td>
      <td scope="row">
        
  <form method="post" action="{{route('db_dell')}}" onsubmit="confirm('Do You want to Delete');">
            @csrf
            <input type="hidden" value="{{$get_data->id}}" name="id" >
            <input type="Submit" name="Delete" class=" btn btn-danger font-weight-bold" value="Delete">
          </form>
     
      </td>

    </tr>
 @endforeach
  </tbody>
</table>
<!-- table end -->

</div>
@endsection
