<?php 
	session_start();
	require('../model/User.php');
?>

<?php 

	$username = "";
	$password = "";
	$role = "";

	if($_SERVER['REQUEST_METHOD'] === "POST"){

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$username = test_input($_POST['username']);
		$password = test_input($_POST['password']);

		$message = "";
		if(empty($username)){
				$message .= "Username can't be Empty";
				$message .= "<br>";
			}

		if(empty($password)){
				$message .= "Password can't be Empty";
				$message .= "<br>";
		}

	
		if ($message === ""){

			$flag = Checklogin($username, $password);

			if($flag){
				$_SESSION['auth'] = "Doctor";
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header("Location: ../view/dashboard.php");
			}
			else
			{
				echo "Password / Username not correct.";
			}
		}
		else{
			
			echo "$message";
		}
	}

?>
