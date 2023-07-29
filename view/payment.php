<?php 
	require('../Controller/SearchAction.php');
	include('header.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>,
	<link rel="stylesheet" type="text/css" href="CSS/nafis.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>


	<br><br><br><br><br><br><br><br>

	

	<form class="form"  method="post" action="../Controller/PaymentAction.php" novalidate onsubmit="return validate(this);">
		<fieldset class="reg">
			<legend>Payment</legend>
			<select name="pmethod" id="pmethod">
				<option>Online Banking</option>
				<option>Mobile Banking</option>
			</select>
			
			<br><br>
			<input type="submit" name="submit" value="Print" id="submit">
		</fieldset>
	</form>


	<?php
		if(isset($_SESSION['pay'])){
			echo $_SESSION['pay'];
		} 
	?>


</body>
</html>

<?php 
	include('footer.php');
?>