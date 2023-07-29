<?php 
	require('../Controller/ChangePassAction.php');
	include('header.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change password</title>
	<script src="JS/changepass.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/nafis.css">
</head>
<body>

	<br><br><br><br><br><br><br><br>

	
	<form class="form"  method="post" action="../Controller/ChangePassAction.php" novalidate onsubmit="return validate(this);">
		<fieldset class="reg">
			<legend>Change Password:</legend>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" placeholder="Enter your Username">
			<span id="errusername"></span>
			<br><br>
			<label for="oldpass">Old Password:</label>
			<input type="text" id="oldpass" name="oldpass" placeholder="Enter your Old Password">
			<span id="erroldpass"></span>
			<br><br>
			<label for="newpass">New Password:</label>
			<input type="text" id="newpass" name="newpass" placeholder="Enter your New Password">
			<span id="errnewpass"></span>
			<br><br>
			<input type="submit" name="submit" value="Change Password" id="submit">
		</fieldset>
	</form>

	<a href="dashboard.php">Go to dashboard</a>

	<?php
		if(isset($_SESSION['pas'])){
			echo $_SESSION['pas'];
		} 
	?>

</body>
</html>

<?php 
	include('footer.php');
?>