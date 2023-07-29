<?php require('../Controller/RegAction.php');


	if(isset($_SESSION['reg'])){
		echo$_SESSION['reg'];
	}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<script src="JS/registrationvalidation.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/nafis.css">
</head>
<body>



	<form class="form" method="post" action="../Controller/RegAction.php" novalidate onsubmit = "return validate(this);">

		<fieldset class="reg">
			<legend>Registration Form</legend>

			<label>First Name:</label>
			<input type="text" id="fname" name="fname" placeholder="Enter your First name">
			<span id="errorfname"></span>

			<br><br>

			<label>Last Name:</label>
			<input type="text" id="lname" name="lname" placeholder="Enter your last name">
			<span id="errorlname"></span>

			<br><br>
			<label>Gender:</label>
			<input type="radio" id="female" name="gender" value="Female">
			<label for="female">Female</label>
			<input type="radio" id="male" name="gender" value="Male">
			<label for="male">Male</label>
			<span id="errorgender"></span>
			<br><br>

			<label>Address:</label>
			<input type="text" id="address" name="address" placeholder="Enter your Address">
			<span id="erroraddress"></span>
			
			<br><br>

			<label>Email:</label>
			<input type="text" name="email" placeholder="Enter your email">
			<span id="erroremail"></span>
			<br><br>

			<label>Phone Number:</label>
			<input type="Number" name="phone" placeholder="Enter your number">
			<span id="errorphone"></span>

			<br><br>

			<label>Username:</label>
			<input type="text" name="uname" placeholder="Enter your username">
			<span id="erroruname"></span>
			<br><br>

			<label>Password:</label>
			<input type="text" name="pass" placeholder="Enter your valid password">
			<span id="errorpass"></span>
			<br><br>


			<input type="submit" name="submit" value="Registration" id="submit">


			<br><br>
			<br><br>

			<p style="color:Tomato;">Already have an account?</p>
			<a style="color:mediumseagreen;" href="login.php">Click here for Log in!</a>

		</fieldset>

	</form>

</body>
</html>