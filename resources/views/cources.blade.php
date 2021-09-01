@extends('layouts.master')
@section('title', 'Course')


@section('subtitle')

<div class="container">

	<h1>Courses Page:</h1>
  <span style="float: left;" class="badge badge-success"><a href="{{route('view_data')}}"><h4>Register Now</h4></a></span>
  <b style="float: right;">
    Total:
    <span class="badge badge-danger">
    {{count($data)}}
    </span>
  </b>
<br>
<hr>
  @if(session('update'))
<div class="alert alert-primary  alert-dismissible fade show" id="alert-success" role="alert">
  <strong>{{session('update')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 
@endif

<!-- table -->
<table class="table table-striped">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">ID</th>
      <th scope="col">Student name </th>

      <th scope="col">Course name </th>
      <th scope="col">Action</th>

 
     

    </tr>
  </thead>
  <tbody>
  	@foreach($data as $get_data)
    <tr>
      <td scope="row"> {{ $loop->index+1 }}</td>
      <td scope="row" class="font-weight-bold"> {{ucwords($get_data->Name)}}</td>

      <td scope="row text-wrap" class="text-danger font-weight-bold">
   
    @foreach($get_data->courses as $data)

  {{ $data->course_name }} 
   
        @endforeach
       </td>
 <td class="text-danger font-weight-bold">
     <form method="post" action="{{ route('Course_delete')}}" onsubmit="confirm('Do You want to Delete');">
            @csrf
            <input type="hidden" value="{{ $get_data->id}}" name="id">
            <input type="Submit" name="Delete" class=" btn btn-danger" value="Delete">
          </form>
       </td>

    </tr>
 @endforeach
  </tbody>
   <caption class="badge-success container">One to one working </caption>
</table>
<!-- table end -->

</div>
@endsection
