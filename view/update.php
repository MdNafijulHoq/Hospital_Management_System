<?php 
	require('../Controller/UpdateAction.php');
	include('header.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
	<script src="JS/update.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/nafis.css">
	
</head>
<body>

	<br><br><br><br><br><br><br><br>
	

	
		<form class="form" method="post" action="../Controller/UpdateAction.php" novalidate onsubmit="return validate(this);">

			<fieldset class="reg">
				<legend>Edit Profile Form</legend>

				<label form="address">Address:</label>
				<input type="text" id="address" name="address" placeholder="Enter your Address"> 
				<span id="erroraddress"></span>
				<br><br>

				<label for="email">Email:</label>
				<input type="text" id="email" name="email" placeholder="Enter your Gmail"> 
				<span id="erroremail"></span>

				<br><br>

				<label for="phone">Phone Number:</label>
				<input type="text" id="phone" name="phone" placeholder="Enter your Phone Number"> 
				<span id="errorphone"></span>
				<br><br>

				<input type="submit" name="submit" value="Update" id="submit">

				<br><br>

			
				

			</fieldset>

		</form>
	

	<?php 


		if(isset($_SESSION['up'])){
			echo $_SESSION['up'] ;
		}

	?>

</body>
</html>

<?php include('footer.php')  ?>