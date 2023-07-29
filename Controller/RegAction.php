<?php

	session_start();

	require('../model/User.php');

	$firstname = $lastname = $gender = $address = $email = $phone = $uname = $pass =  "";

		if ($_SERVER['REQUEST_METHOD'] === "POST"){

			function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$firstname = test_input($_POST['fname']);
			$lastname = test_input($_POST['lname']);
			$gender = isset($_POST['gender']) ? test_input($_POST['gender']) : NULL;
			$address = test_input($_POST['address']);
			$email = test_input($_POST['email']);
			$phone = test_input($_POST['phone']);			
			$uname = test_input($_POST['uname']);
			$pass = test_input($_POST['pass']);
			// $role = test_input($_POST['role']);


			$message = "";
			if(empty($firstname)) {

				$message .= "First Name is Empty";
				$message .= "<br>";
			}
			else{
				if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
					$message .= " Frist name Only letters and spaces";
					$message .= "<br>";
				}
			}
			if (empty($lastname)) {
				$message .= "Last Name is Empty";
				$message .= "<br>";
			}
			else{
				if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
					$message .= "Last name Only letters and spaces";
					$message .= "<br>";
				}
			}
			if (empty($gender)) {
				$message .= "Gender not Selected";
				$message .= "<br>";
			}
			if (empty($address)) {
				$message .= "Street/House/Road is Empty";
				$message .= "<br>";
			}
			if (empty($email)) {
				$message .= "Email is Empty";
				$message .= "<br>";
			}
			else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$message .= "Please correct your email";
					$message .= "<br>";
				}
			}
			if (empty($phone)) {
				$message .= "Mobileno is Empty";
				$message .= "<br>";
			}
			if(empty($uname)){
				$message .= "Username can't be Empty";
				$message .= "<br>";
			}

			if(empty($pass)){
				$message .= "Password can't be Empty";
				$message .= "<br>";
			}

			/* if(empty($role)){
				$message .= "Your role can't be Empty";
		    	$message .= "<br>";
			}*/
			
			if ($message === ""){

				$reg = registration($firstname, $lastname, $gender, $address, $email, $phone, $uname, $pass);
				if($reg){
					$_SESSION['reg'] = "Registration Successful.";
					header("Location: ../view/reg.php");
				}
			}
			
			else {
				
				$_SESSION['reg'] = $message;
				header("Location: ../view/reg.php");
			}
		}
?>