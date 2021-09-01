@extends('layouts.master')
@section('title', 'ORM 2')


@section('subtitle')

<div class="container">

	<h1>ORM 2 Courses Page:</h1>

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
      <th scope="col">Sl No</th>

      <th scope="col">ID</th>
      <th scope="col">Student </th>

      <th scope="col">Course</th>
      <th scope="col">Action</th>

 
     

    </tr>
  </thead>
  <tbody>
@foreach( $orm_get_ as $get_orm)
    <tr>
      <td scope="row" class="font-weight-bold"> {{$loop->index+1}} </td>

      <td scope="row" class="font-weight-bold"> {{$get_orm->id}} </td>
      <td scope="row" class="font-weight-bold">
       {{$get_orm->Name}}
      </td>


  <td scope="row" class="text-danger font-weight-bold">
    
         @foreach($get_orm->courses as $course)
{{ $course->course_name }}
@endforeach
       </td>
 <td class="text-danger font-weight-bold">
<button class="btn btn-warning">Button</button>
  <!--  <form method="post" action="" onsubmit="confirm('Do You want to Delete');">
            @csrf
            <input type="hidden" value="" name="id">
            <input type="Submit" name="Delete" class=" btn btn-danger" value="Delete">
          </form> -->
       </td>
@endforeach
    </tr>

  </tbody>
</table>
<!-- table end -->

</div>
@endsection
