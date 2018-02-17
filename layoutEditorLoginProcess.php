<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$leLoginEmail = $_POST["leLoginEmail"];
	$leLoginPassword = $_POST["leLoginPassword"];
	$leLoginErrArr = array();
	$flag = 1;
?>

<?php

	  //---------Email Validation Check--------------
	  if (empty($_POST["leLoginEmail"])) {
		$leLoginErrArr[0] = "* Email is required";
	  } else {
		$leLoginEmail = test_input($_POST["leLoginEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($leLoginEmail, FILTER_VALIDATE_EMAIL)) {
		  $leLoginErrArr[0] = "* Invalid email format"; 
		} else {
			$leLoginErrArr[0] = "";	
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($_POST["leLoginPassword"])) {
		$leLoginErrArr[1] = "* Password is required";
	  } else {
		$leLoginPassword = test_input($_POST["leLoginPassword"]);
		$leLoginErrArr[1] = "";
	  }	
	  
	  foreach($leLoginErrArr as $each) {
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
		echo json_encode($leLoginErrArr);
	}
?>

<?php
	if($flag == 0) {
		$selectLe = "SELECT * FROM layout_editor WHERE leEmail='{$leLoginEmail}' AND lePassword = '{$leLoginPassword}'";
		$resultLe = mysqli_query($connection,$selectLe);
		
		if(mysqli_num_rows($resultLe) == 1) {
			$rowLe = mysqli_fetch_assoc($resultLe);
			$_SESSION["leLoginId"] = $rowLe["id"];
			$_SESSION["leLoginEmail"] = $rowLe["leEmail"];
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
