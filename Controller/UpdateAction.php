<?php 
require '../model/User.php';
include('../Controller/authintication.php');



$address = $email = $phone = "";

if($_SERVER['REQUEST_METHOD'] === "POST"){

	function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$address = test_input($_POST['address']);
		$email = test_input($_POST['email']);
		$phone = test_input($_POST['phone']);

		$message = "";

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

		if ($message == ""){

			$user = $_SESSION['username'];
			$pas = $_SESSION['password'];

			$reg = updateprofile($address, $email, $phone, $user);
			
			if($reg){
				$_SESSION['up'] = "Data updated.";
				header("Location: ../view/update.php");
			}
			else
			{
				$_SESSION['up'] = "Failed to update data. Try again...";
				header("Location: ../view/update.php");	
			}
		}
		else{
			$_SESSION['up'] = $message;
			header("Location: ../view/update.php");
		}
}
?>