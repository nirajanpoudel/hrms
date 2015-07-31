<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user Registration</title>
</head>
<body>
	@if(session()->has('message'))
		{{session('message')}}
	@endif
	<form action="{{ url('login') }}" method="POST">
	{!! csrf_field() !!}
		<input type="text" name="email">
		<input type="text" name="password">
		<input type="submit" name="submit" value="Sign In">
		
	</form>
</body>
</html>