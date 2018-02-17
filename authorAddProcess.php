<?php include_once("dbConnector.php"); ?>

<?php
	
	$authorAddFn = $_POST["authorAddFn"];
	$authorAddLn = $_POST["authorAddLn"];
	$authorAddEmail = $_POST["authorAddEmail"];
	$authorId = $_POST["authorId"];
	$flag = 0;
	
?>

<?php

	/*-----------------------------------------------
	------------Validation Message generate----------
	------------------------------------------------*/
	
		
	  //---------First Name Validation Check--------------
	  if (empty($_POST["authorAddFn"])) {
		$seErrArr[0] = "* First Name is required";
	  } else {
		$authorAddFn = test_input($_POST["authorAddFn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$authorAddFn)) {
		  $seErrArr[0] = "* Only letters and white space allowed"; 
		} else {
			$seErrArr[0] = "";	
		}
	  }
	  
	  //---------Last Name Validation Check--------------
	  if (empty($_POST["authorAddLn"])) {
		$seErrArr[1] = "* Last Name is required";
	  } else {
		$authorAddLn = test_input($_POST["authorAddLn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$authorAddLn)) {
		  $seErrArr[1] = "* Only letters and white space allowed"; 
		} else {
			$seErrArr[1] = "";	
		}
	  }	 
	  
	  
	  //---------Email Validation Check--------------
	  if (empty($_POST["authorAddEmail"])) {
		$seErrArr[2] = "* Email is required";
	  } else {
		$authorAddEmail = test_input($_POST["authorAddEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($authorAddEmail, FILTER_VALIDATE_EMAIL)) {
		  $seErrArr[2] = "* Invalid email format"; 
		} else {
			$seErrArr[2] = "";	
		}
	  }
	  
	  foreach($seErrArr  as $each) {
		  if($each == "") {
			 $flag = 0;
			 continue;
		  } else {
			  $flag = 1;
			  break;
		  }
	  }	
	  
	  if($flag == 1) {
		  echo json_encode($seErrArr);  
	  }

?>

<?php
	
	if($flag == 0) {
		
		$addAuthorSql = "INSERT INTO author (fn,ln,email,author_id) VALUES ('{$authorAddFn}','{$authorAddLn}','{$authorAddEmail}',{$authorId})";
		$resultAddAuthor = mysqli_query($connection,$addAuthorSql);
		
		if($resultAddAuthor) {
			echo "success";	
		} else {
			echo "failed";	
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