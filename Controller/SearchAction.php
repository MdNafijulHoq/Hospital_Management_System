<?php  
require '../Controller/authintication.php';
	require'../model/User.php';

	$username = "";

	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$ID = $_POST['id'];

			$message = "";
			if(empty($ID)){
				$message .= "Insert ID to search";
				$message .= "<br>";
			}

			if($message === "")
			{	
				

				$_SESSION['search'] = searchpatient($ID);

				if(isset($_SESSION['search'])){
					$_SESSION['fl']=true;
					header("Location: ../view/search.php");
				}
			}
			else
			{
				
				$_SESSION['errord'] = $message;
				header("Location: ../view/search.php");
			}
	}

?>
