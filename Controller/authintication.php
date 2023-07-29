<?php 

session_start();

$_SESSION['status'] = "";

if(!isset($_SESSION['auth'])){
	$_SESSION['status'] = "Access Denied. Login to view this page.";
	header("Location: ../view/login.php");
	exit(0);
}

else
{
	if($_SESSION['auth'] == "Doctor"){

	}
	else{
		$_SESSION['status'] = "You are not Doctor.";
		header("Location: ../view/login.php");
		exit(0);
	}
}
?>
