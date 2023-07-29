<?php 

	require('Connect.php');

	function Checklogin($username , $password){
		$conn = connect();

		if($conn){

			$sql = "SELECT * FROM doctor Where username = '" . $username . "' and password = '" . $password . "'";

			$req = mysqli_query($conn, $sql);

			if($req->num_rows === 1)
				return true;
			else
				return false;
		}
	}

	function registration($fname, $lname, $gen, $add, $e, $ph, $user, $pass){
		$conn = connect();
		if($conn){
            $stmt = $conn->prepare("Insert INTO doctor (firstname , lastname , gender, address, email, phone, username, password ) VALUES(?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssss", $firstname , $lastname , $gender, $address, $email, $phone, $username, $password);

           	$firstname = $fname;
            $lastname = $lname;
            $gender = $gen;
            $address = $add;
            $email = $e;
            $phone = $ph;
            $username = $user;
            $password = $pass;
            
            $stmt->execute();
            return true;
        }
        else{
            return false;
        }
	}

	function passwordchange($username, $oldpass, $newpass){

		$conn = connect();
		if($conn){
			$sql = "UPDATE `doctor` SET `password` = '" . $newpass . "' WHERE username = '" . $username . "' and password = '" . $oldpass . "'";
			mysqli_query($conn, $sql);

			return true;
		}

		return false;
	}

	function viewprofile($username, $password) {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT firstname , lastname , gender, address, email, phone FROM doctor WHERE username = '" . $username . "' and password = '" . $password . "'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}



	function updateprofile($add, $mail, $ph, $uname){
		$conn = connect();

		if($conn){
			$sql = "UPDATE doctor SET address = '$add' , email = '$mail' , phone = '$ph'  WHERE username = '$uname'";

			mysqli_query($conn, $sql);
			return true;
		}
		else{
			return false;
		}
	}

	function searchpatient($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT first name , last name , gender FROM patient WHERE id = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			//echo "$users";
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['searchpatient'] = "No data found";
				$_SESSION['flagp'] = false;
				header("Location: ../view/searchpatient.php");
				return array();
			}
			
		}
	}

	function appointment() {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM appointment";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}

	function getAll() {

		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM patient";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}





?>


