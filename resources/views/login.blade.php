
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
@include('index3');

	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="loginpost">
    @csrf
<div>
<ul>
@foreach($errors->all() as $e)
<li>
{{$e}}
</li>
@endforeach

</ul>
</div>
		

		

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn1" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register">Sign up</a>
		</p>
		
	</form>
	<br><br><br><br><br>
	
@include('index5');

</body>
</html