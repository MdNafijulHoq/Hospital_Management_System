<?php 
	require('../Controller/SearchAction.php');
	include('header.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Operation</title>
	<script src="JS/search.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/nafis.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">

</head>
<body>

	<br><br><br><br><br><br><br><br>
	
		<form class="form" method="post" action="../Controller/SearchAction.php" novalidate onsubmit="return validate(this);">
			<fieldset class="reg">
				<legend>Search Patient</legend>
				<br>

				<label for="id">Enter ID to search.</label>	
				<input type="text" id="id" name="id" placeholder="Enter Id">
				<input type="submit" name="submit" value="Search" id="submit">
				<span id="erroruname"></span>
				<br><br>
			</fieldset>
		</form>
		<?php 	
			if(isset($_SESSION['errord'])){
					echo $_SESSION['errord'];
				}
		?>
	

	
	<hr>

	<?php 
	if(isset($_SESSION['fl'])){


		if($_SESSION['fl']){


			if(isset($_SESSION['search']))
			{

				$x = $_SESSION['search'];

				echo "<table border=1>";
				echo "<tr>";
				// echo "<th>ID</th>";
				echo "<th>Firstname</th>";
				echo "<th>LastName</th>";
				echo "<th>Gender</th>";				
				echo "</tr>";


				for($i=0; $i<sizeof($x); $i++)
				{
					echo "<tr>";
				// echo "<td>" . $x[0]['id'] . "</td>";
				echo "<td>" . $x[$i]['first name'] . "</td>";
				echo "<td>" . $x[$i]['last name'] . "</td>";
				echo "<td>" . $x[$i]['gender'] . "</td>";				
				echo "</tr>";
				}
				echo "</table>";
			}
		}
		else
		{
			echo "No data Found.";
		}

	}


	?>
	

</body>
</html>


