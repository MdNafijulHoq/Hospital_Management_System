<?php 
	require '../Controller/authintication.php';

	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$pmethod = test_input($_POST['pmethod']);

			$message = "";
			if(empty($pmethod)){
				$message .= "Select Payment method";
				$message .= "<br>";
			}

			if($message==="")
			{
				$_SESSION['pay'] = "Doccumnet is in printing process.";
				header("Location: ../view/payment.php");
			}

	}



?>