<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<body>
<h1><a href="{{url('/about')}}" style="text-decoration: none"> About us</a></h1>


{{ $data['name'] }} <br>
{{ $data['age'] }} <br>

{{ $age }}

<br>
@if($name=="aman") 

	{{ 'true'}}

@else 
	{{ "false"}}
@endif
<br>
@env('APP_NAME')


@endenv

@for($i=0; $i<=5; $i++)
	
{{"value ".$i }}<br>
@endfor


<script>
	var name = '{{ $name }}';
	alert(name);
</script>


<table>


<!-- <form action="{{ url('/create-user') }}" method="get"> -->
<form action="{{ url('/user-detail') }}" method="post">

	@csrf
<tr><td>	
	Student name:<br></td><td>
	
	<input type="text" name="name"><br>
</td></tr>
<tr><td>
	Class:<br></td><td>
	
	<input type="text" name="class"><br>
</td></tr>
<tr><td>
	Student age:<br></td><td>
	
	<input type="text" name="age" maxlength="2"><br>

</td></tr>
<tr><td>

	email:<br></td><td>
	
	<input type="text" name="email" /><br>
</td></tr>
<tr><td>

	Password:<br></td><td>
	
	<input type="password" name="password"><br>
</td></tr>
<tr><td>

	Submit:<br></td><td>
	
	<input type="submit" name="submit"><br>
</td></tr>
</form>
</table>
<hr>
<a href="{{ route('test',['name'=>'aman', 'age'=>29]) }}">Link</a>
</body>
</html>
