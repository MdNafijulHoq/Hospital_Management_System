<?php

	session_start();

	require('../model/User.php');

	$_SESSION['ty'] = viewprofile($_SESSION['username'], $_SESSION['password']);

	if(isset($_SESSION['ty'])){
		header("Location: ../view/viewprofile.php");
	}

?>