<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginbox">
		<img src="images\avatar.png" class= "avatar">
		<h1>LOGIN</>
			<form action="processregister.php" method="POST">
				<p>Email</p>
				<input type= "text", name = "email" placeholder="Enter your email" required>

				<p>Password</p>
				<input type= "password", name = "password" placeholder="Enter password" required>

				<input type="submit" name="Login" value="Login">
				<P><a href="resetPass.php">Reset password?</a></P>
				<P><a href="registration.php">Don't have account?</a> </P>
				
			</form>
				
	</div>

</body>
</html>