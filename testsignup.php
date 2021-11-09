<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$conn = mysqli_connect("localhost", "root", "", "newsys") or die("Connection faild");
		if(!empty($_POST['save'])){
			$userName = filter_input(INPUT_POST, "userName");
			$pass     = filter_input(INPUT_POST, "pass");
			$email    = filter_input(INPUT_POST, "email");
			$phone    = filter_input(INPUT_POST, "phone");
			if(!empty($userName)){
				if(!empty($pass)){
						$sql = "INSERT INTO reglog (userName, pass, email, phone) values('$userName', '$pass', '$email', '$phone')"; 
						if($conn->query($sql)){
							include "userpage.php";
						}else{
							echo "error : " . $sql . "<br>" . $conn->error;
						}
						$conn->close();
				}else{
					echo "PassWord Must not Be Empty";
					die();
				}
			}else{
				echo "UserName Must not Be Empty";
				die();
			}
		}
	}
	
/*
	<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	//$admin  = array("ahmed", "Ali", "B", "C");
	$dsn    = "mysql:host=localhost;dbname=dblog";
	$user   = "root";
	$pass   = "";
	$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",);
	try {
		$conn = new PDO($dsn, $user, $pass, $option);
		//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("INSERT INTO reglog(EnterFirstName, EnterLastName, EnterPass, gender) values(?, ?, ?, ?)");
		$stmt = bind_param("sssssi", $EnterFirstName, $EnterLastName, $EnterPass, $gender);
		$stmt->execute();
		echo "successflly ..... ";
		$stmt->close();
		$conn->close();
	
	}
	catch(PDOException $e){
		echo "Faild" . $e->getMessage();
	}

	$EnterFirstName = $_POST["EnterFirstName"];
	$EnterLastName  = $_POST["EnterLastName"];
	//$email          = $_POST["email"];
	$EnterPass      = $_POST["EnterPass"];
	$gender         = $_POST["gender"];

}



*/