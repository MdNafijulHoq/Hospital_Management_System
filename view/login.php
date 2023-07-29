<?php 
	
	include('../Controller/LoginAction.php');
	if(isset($_SESSION['status']))
	{
		echo $_SESSION['status'];
		$_SESSION['status'] = "";
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<script src="JS/loginvalidation.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/style.css"> 
	<link rel="stylesheet" type="text/css" href="CSS/login.css">

	
</head>

<body>
	<h1 align="center">Hospital Management System</h1>
<br>
	<?php if(isset($_SESSION['status'])){
		echo $_SESSION['status'];
	} ?>

	<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
		<fieldset class="reg">
			<legend>Login page</legend>

			<label>Username :</label>
			<input type="text" id = "username" name="username" placeholder="Enter Username">
			<span id="erruname"></span>
			<br><br>
			<label>Password:</label>
			<input type="password" name="password" id="password" placeholder="Enter Password">
			<span id="errpass"></span>
			<br><br>
			<!-- <h3><input type="checkbox" name="remember">Remember me</h3> -->

			<br><br>
			<input type="submit" name="submit" value="Login" id="submit">
			<br><br>
			<br><br>
			<p style="color:Tomato;">Don't have an account?</p>
			<a  style="color:mediumseagreen;" href="reg.php">Click here for Sign up!</a>


		</fieldset>


	</form>


</body>
</html>