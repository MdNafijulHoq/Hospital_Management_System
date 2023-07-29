<?php 
	require('../Controller/ChangePassAction.php');
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


<form>
		<div align="center">
			<br><br><br><br><br><br><br><br>

			<?php 

				$x = $_SESSION['pa'];
				echo "<table border=1 align=center>";
				
					
					echo "<tr>";
					echo "<th>ID</th>";
					echo "<th>Firstname</th>";
					echo "<th>LastName</th>";
					echo "<th>Gender</th>";
			
					
					echo "</tr>";

				for($i=0; $i<sizeof($x);$i++)
				{
				
					echo "<tr>";
					echo "<td>" . $x[$i]['id'] . "</td>";
					echo "<td>" . $x[$i]['first name'] . "</td>";
					echo "<td>" . $x[$i]['last name'] . "</td>";
					echo "<td>" . $x[$i]['gender'] . "</td>";
					
	
					
					echo "</tr>";
				
				}

			echo "</table>";

			echo "<br><br>";


			
			?>

		

			<br><br>
	
			<br>

		</div>
</form>
<?php 
	include('footer.php');
?>

</body>
</html>

