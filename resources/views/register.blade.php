

<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
@include ('index3');
<div class="header">
	<h2>Register</h2>
</div>

<div>
<form method="post" action="registerpost">
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
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn1" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login">Sign in</a>
	</p>
</form>
</div>
<br><br><br><br><br><br>

@include ('index5');

</body>
</html>