<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
.green{color: green;}
</style>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body> 
  <div class="container">
  <div class="col-md-8">




<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="{{ url('/output')}}">  
  @csrf
  Name: <input type="text" name="name">

  <br><br>
  E-mail: <input type="text" name="email">

  <br><br>
  Website: <input type="URL" name="website">

  <br><br>
  Comment:<span class="green">*</span><br>
   <textarea name="comment" rows="5" 

cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male


  <br><br>
    @if(session('sucess'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{session('sucess')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<input type="reset" name="reset" value="Reset"><br><br>
  <input type="submit" name="submit" value="Submit">  


</form>
</div>
</div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>