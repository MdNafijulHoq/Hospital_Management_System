<?php

	session_start();

	require('../model/User.php');

	$_SESSION['pa'] = getAll();

	if(isset($_SESSION['pa'])){
		header("Location: ../view/viewpatient.php");
	}

?>