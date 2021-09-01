@extends('layouts.master')
@section('title', 'View')
@section('navbar')
@section('subtitle')

@parent
<div class="container-sm">
<center>
<h1>View Data</h1></center>

<b> 
<a class=" btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
</b>
<hr>
<b style="float: left;">Total Students:
<span class="badge badge-danger">{{count($get_data)}} </span></b><br>




@if(session('update'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>{{session('update')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="overflow-auto">
<table  class="table table-striped flex-wrap " >
  <thead>

    <tr class="bg-dark text-white">
      <th scope="col">Sl no</th>

      <!-- <th scope="col">Roll no</th> -->
      <th scope="col">St Name</th>
      <!-- <th scope="col">Email</th> -->
      <th scope="col">Phone</th>
   
      <th scope="col">Created At</th>
      @auth
      <center>
      <th scope="col">Edit</th></center>
      <th scope="col">Delete</th>
      <th scope="col">Register</th>
@endauth



    </tr>
  </thead>
  <tbody>
    
@foreach( $get_data as $seen_data)
    <tr>
      <th>{{$get_data->firstitem()+$loop->index}}</th>
    

      <!-- <th scope="row">{{$seen_data->Roll}}</th> -->
  <td class="text-success font-weight-bold">{{ucwords($seen_data->Name)}}</td>
      <!-- <td class="text-primary font-weight-bold">{{$seen_data->Email}}</td> -->
  <td class="font-weight-bold">{{$seen_data->Phone}}</td>
    
       <td class="font-weight-bold">
        {{Carbon\Carbon::parse($seen_data->created_at)->diffForHumans()}}
      </td>
 @auth
  <td class="font-weight-bold"> 
  
  <a href="{{route('Updata2',$seen_data->id)}}" onclick="alert('Do You want to edit');"> <span class="btn btn-info">Edit</span></a>
     </td>

      <td class="font-weight-bold ">
 


  <form method="post" action="{{ route('sammy_dell')}}" onsubmit="confirm('Do You want to Delete');">
            @csrf
   <input type="hidden" value="{{ $seen_data->id}}" name="id">
   <input type="Submit" name="Delete" class=" btn btn-danger" value="Delete">
    </form>


      </td>


      <td class="font-weight-bold ">
      <a href="{{route('co_reg',$seen_data->id)}}">
        <span class="btn btn-primary">Course</span></a>
      </td>
@endauth
    </tr>
  @endforeach
  </tbody>
</table>
 {{ $get_data ->links() }}  
</div>
<!-- media -->
<ul class="list-unstyled">
  <li class="media">
    <img src="https://source.unsplash.com/100x100/?Laravel,laravel" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Why Laravel?</h5>
      <p>There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.</p>
    </div>
  </li>
  <li class="media my-4">
<img src="https://source.unsplash.com/100x100/?Environment,engineer" class="mr-3" alt="engineer">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Environment Configuration</h5>
      <p>
It is often helpful to have different configuration values based on the environment where the application is running. For example, you may wish to use a different cache driver locally than you do on your production server.</p>
    </div>
  </li>
  <li class="media">
    <img src="https://source.unsplash.com/100x100/?read,write" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Read & Write Connections</h5>
      <p>
Sometimes you may wish to use one database connection for SELECT statements, and another for INSERT, UPDATE, and DELETE statements. Laravel makes this a breeze, and the proper connections will always be used whether you are using raw queries, the query builder, or the Eloquent ORM.</p>
    </div>
  </li>
</ul>
<!-- end media  -->
</div>

@section('para')
@endsection
@endsection
@section('newtext')
@stop