<?php  
require '../Controller/authintication.php';
require'../model/User.php';


			$_SESSION['app'] = appointment();

			if(isset($_SESSION['app'])){
				$_SESSION['fl']=true;
				header("Location: ../view/appointment.php");
			}
			
			else
			{
				
				$_SESSION['errord'] = $message;
				header("Location: ../view/appointment.php");
			}
	

?>


