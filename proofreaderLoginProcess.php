<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$pLoginEmail = $_POST["pLoginEmail"];
	$pLoginPassword = $_POST["pLoginPassword"];
	$pLoginErrArr = array();
	$flag = 1;
?>

<?php

	  //---------Email Validation Check--------------
	  if (empty($_POST["pLoginEmail"])) {
		$pLoginErrArr[0] = "* Email is required";
	  } else {
		$pLoginEmail = test_input($_POST["pLoginEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($pLoginEmail, FILTER_VALIDATE_EMAIL)) {
		  $pLoginErrArr[0] = "* Invalid email format"; 
		} else {
			$pLoginErrArr[0] = "";	
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($_POST["pLoginPassword"])) {
		$pLoginErrArr[1] = "* Password is required";
	  } else {
		$pLoginPassword = test_input($_POST["pLoginPassword"]);
		$pLoginErrArr[1] = "";
	  }	
	  
	  foreach($pLoginErrArr as $each) {
		  if($each == "") {
			 $flag = 0;
			 continue; 
		  } else {
			$flag = 1;
			break;	  
		  }
	  }

?>

<?php
	if($flag == 1) {
		echo json_encode($pLoginErrArr);
	}
?>

<?php
	if($flag == 0) {
		$selectP = "SELECT * FROM proofreader WHERE pEmail='{$pLoginEmail}' AND pPassword = '{$pLoginPassword}'";
		$resultP = mysqli_query($connection,$selectP);
		
		if(mysqli_num_rows($resultP) == 1) {
			$rowP = mysqli_fetch_assoc($resultP);
			$_SESSION["pLoginId"] = $rowP["id"];
			$_SESSION["pLoginEmail"] = $rowP["pEmail"];
			echo "Logged in successfully";
		} else {
			echo "Login Failed";	
		}
	}
?>

<?php

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
?>