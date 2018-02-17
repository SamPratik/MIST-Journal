<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$ceLoginEmail = $_POST["ceLoginEmail"];
	$ceLoginPassword = $_POST["ceLoginPassword"];
	$ceLoginErrArr = array();
	$flag = 1;
?>

<?php

	  //---------Email Validation Check--------------
	  if (empty($_POST["ceLoginEmail"])) {
		$ceLoginErrArr[0] = "* Email is required";
	  } else {
		$ceLoginEmail = test_input($_POST["ceLoginEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($ceLoginEmail, FILTER_VALIDATE_EMAIL)) {
		  $ceLoginErrArr[0] = "* Invalid email format"; 
		} else {
			$ceLoginErrArr[0] = "";	
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($_POST["ceLoginPassword"])) {
		$ceLoginErrArr[1] = "* Password is required";
	  } else {
		$ceLoginPassword = test_input($_POST["ceLoginPassword"]);
		$ceLoginErrArr[1] = "";
	  }	
	  
	  foreach($ceLoginErrArr as $each) {
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
		echo json_encode($ceLoginErrArr);
	}
?>

<?php
	if($flag == 0) {
		$selectCe = "SELECT * FROM copy_editor WHERE ceEmail='{$ceLoginEmail}' AND cePassword = '{$ceLoginPassword}'";
		$resultCe = mysqli_query($connection,$selectCe);
		
		if(mysqli_num_rows($resultCe) == 1) {
			$rowCe = mysqli_fetch_assoc($resultCe);
			$_SESSION["ceLoginId"] = $rowCe["id"];
			$_SESSION["ceLoginEmail"] = $rowCe["ceEmail"];
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