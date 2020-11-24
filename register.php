<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>

<body class = "class-for-Registration" >

<form action="processregister.php" method="post">
	<fieldset>
		<div class= "register-box">
			<h1>REGISTRATION</h1>
		</div>

		<div class="text-box">
			<label for= "fullname"> Full name: </label>
			<input type= "text", name = "fullname" id = "fullname">
		</div>

		<div class="text-box">
			<label for= "city"> City: </label>
			<input type= "text", name = "city" id = "city">
		</div>

		<div class="text-box">
			<label for= "password"> Password: </label>
			<input type= "password", name = "password" id = "password">
		</div>

		<div class="text-box">
			<label for= "email"> Email: </label>
			<input type="text" name= "email" id= "email">
		</div>
		
		<div>
			<input type= "submit" name= "register" value= "Register">
		</div>

		<div>
			Already have an account?
			<a href="login.php">Login</a>
		</div>
	</fieldset>

</form>
</body>
</html>