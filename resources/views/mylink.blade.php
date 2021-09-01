<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="{{ route('test2',['name'=>'name', 'age'=>'age']) }}">link</a>
<form>
	<p>Name:</p>
	<input type="text" name="name"><br>
	<p>Age:</p>
	<input type="text" name="age"><br>

	<input type="submit" name="submit">
</form>
</body>
</html>
