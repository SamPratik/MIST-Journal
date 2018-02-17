<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$rLoginEmail = $_POST["rLoginEmail"];
	$rLoginPassword = $_POST["rLoginPassword"];
	$rLoginErrArr = array();
	$flag = 1;
?>

<?php

	  //---------Email Validation Check--------------
	  if (empty($_POST["rLoginEmail"])) {
		$rLoginErrArr[0] = "* Email is required";
	  } else {
		$rLoginEmail = test_input($_POST["rLoginEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($rLoginEmail, FILTER_VALIDATE_EMAIL)) {
		  $rLoginErrArr[0] = "* Invalid email format"; 
		} else {
			$rLoginErrArr[0] = "";	
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($_POST["rLoginPassword"])) {
		$rLoginErrArr[1] = "* Password is required";
	  } else {
		$rLoginPassword = test_input($_POST["rLoginPassword"]);
		$rLoginErrArr[1] = "";
	  }	
	  
	  foreach($rLoginErrArr as $each) {
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
		echo json_encode($rLoginErrArr);
	}
?>

<?php
	if($flag == 0) {
		$selectReviewer = "SELECT * FROM reviewer WHERE rEmail = '{$rLoginEmail}' AND rPassword = '{$rLoginPassword}'";
		$resultReiviewer = mysqli_query($connection,$selectReviewer);
		
		if(mysqli_num_rows($resultReiviewer) == 1) {
			$rowReviewer = mysqli_fetch_assoc($resultReiviewer);
			$_SESSION["rLoginId"] = $rowReviewer["id"];
			$_SESSION["rLoginEmail"] = $rowReviewer["rEmail"];
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