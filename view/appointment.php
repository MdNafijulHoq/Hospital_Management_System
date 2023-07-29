<?php 
	require('../Controller/SearchAction.php');
	include('header.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show Appointment</title>
	<script src="JS/search.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">

<style type="text/css">
	table{
		border-collapse: collapse;
		width: 25%;
		color: darkslateblue;
		font-family: monospace;
		font-size: 17px;
		text-align: center;
	}
	th{
		background-color: lightseagreen;
		color: white;
	}
	tr:nth-child(even).{background-color: .#f2f2f2}
</style>
</head>

<body>
	<br><br><br><br><br><br><br>
	<div align="center">

		<?php 	
			if(isset($_SESSION['errord'])){
					echo $_SESSION['errord'];
				}
		?>
	

	
	<hr>

	<?php 
	if(isset($_SESSION['fl'])){


		if($_SESSION['fl']){


			if(isset($_SESSION['app']))
			{

				$x = $_SESSION['app'];
				echo "<br><br><br><br>";
				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Patient Name</th>";
				echo "<th>Appointment Date</th>";
				echo "<th>Appointment Time</th>";
				echo "</tr>";
				for($i=0; $i<sizeof($x); $i++)
				{
					echo "<tr>";
				echo "<td>" . $x[$i]['patient name'] . "</td>";
				echo "<td>" . $x[$i]['appointment date'] . "</td>";
				echo "<td>" . $x[$i]['appointment time'] . "</td>";	
				echo "</tr>";
				}
				echo "</table>";
				echo "<br><br>";
			}
		}
		else
		{
			echo "No data Found.";
		}

	}

	
	?>
	
</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>

<?php include('footer.php')  ?>
