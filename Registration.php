<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form method="POST" action="registrationdatainput.php">
		<fieldset>
			<legend>REGISTRATION</legend>
				Id <br>
				<input type="number" name="uid" ><br>
				Password <br>
				<input type="Password" name="upassword"> <br>
				Confirm Password <br>
				<input type="Password" name="cupassword">  <br>
				Name <br>
				<input type="text" name="uname"> <br>
				User Type <br>
				______________________<br>
				<input type="radio" name="usertype" value="user">User
				<input type="radio" name="usertype" value="admin">Admin <br>
				______________________<br>
				<input type="submit" name="signup" value="Sign Up">
				<u><a href="Login.php">Sign In</a></u>


	  	</fieldset>
	</form>

</body>
</html>