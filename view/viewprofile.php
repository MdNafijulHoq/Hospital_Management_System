<?php 
	include('header.php');
	require'../Controller/authintication.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Profile</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/nafis.css">

<style type="text/css">
	table{
		border-collapse: collapse;
		width: 25%;
		color: darkslateblue;
		font-family: monospace;
		font-size: 18px;
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



		<div align="center">
			<br><br><br><br><br><br><br><br>

			<?php 
				
				$x = $_SESSION['ty'];
				echo "<br><br>";
				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Firstname</th>";
				echo "<th>LastName</th>";
				echo "<th>Gender</th>";
				echo "<th>Address</th>";
				echo "<th>Email</th>";
				echo "<th>Phone No</th>";
				
				echo "</tr>";

				echo "<tr>";
				echo "<td>" . $x[0]['firstname'] . "</td>";
				echo "<td>" . $x[0]['lastname'] . "</td>";
				echo "<td>" . $x[0]['gender'] . "</td>";
				echo "<td>" . $x[0]['address'] . "</td>";
				echo "<td>" . $x[0]['email'] . "</td>";
				echo "<td>" . $x[0]['phone'] . "</td>";
				echo "</tr>";
			


			echo "</table>";

			echo "<br><br>";


			
			?>

		

			<br><br>
			<a href="update.php">Edit/Update Profile</a>
			<br>

		</div>


</body>
</html>

<?php 
	include('footer.php');
?>