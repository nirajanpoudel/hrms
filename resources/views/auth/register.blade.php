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
	<form action="{{ url('register') }}" method="POST">
	{!! csrf_field() !!}
		<input type="text" name="name">
		<input type="text" name="password">
		<input type="text" name="email">
		<input type="submit" name="Register">
	</form>
</body>
</html>