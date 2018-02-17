<?php include_once("dbConnector.php"); ?>

<?php
	$leFn = $_POST["leFn"];
	$leLn = $_POST["leLn"];
	$lePassword = $_POST["lePassword"];
	$leCity = $_POST["leCity"];
	$leState = $_POST["leState"];
	$leCountry = $_POST["leCountry"];
	$leInstitute = $_POST["leInstitute"];
	$leEmail = $_POST["leEmail"];
	$leTel = $_POST["leTel"];
	$leFax = $_POST["leFax"];
	$leWebsite = $_POST["leWebsite"];
	
	$leErrArr = array();
	$flag = 1;
?>

<?php
	  //---------First Name Validation Check--------------
	  if (empty($_POST["leFn"])) {
		$leErrArr[0] = "* First Name is required";
	  } else {
		$leFn = test_input($_POST["leFn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$leFn)) {
		  $leErrArr[0] = "* Only letters and white space allowed"; 
		} else {
			$leErrArr[0] = "";	
		}
	  }
	  
	  //---------Last Name Validation Check--------------
	  if (empty($_POST["leLn"])) {
		$leErrArr[1] = "* Last Name is required";
	  } else {
		$leLn = test_input($_POST["leLn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$leLn)) {
		  $leErrArr[1] = "* Only letters and white space allowed"; 
		} else {
			$leErrArr[1] = "";	
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($_POST["lePassword"])) {
		$leErrArr[2] = "* Password is required";
	  } else {
		$lePassword = test_input($_POST["lePassword"]);
		$leErrArr[2] = "";
	  }
	  
	  
	  //---------City Name Validation Check--------------
	  if (empty($_POST["leCity"])) {
		$leErrArr[3] = "* City Name is required";
	  } else {
		$leCity = test_input($_POST["leCity"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$leCity)) {
		  $leErrArr[3] = "* Only letters and white space allowed"; 
		} else {
			$leErrArr[3] = "";	
		}
	  }	
	  
	  
	  //---------State Validation Check--------------
	  if (empty($_POST["leState"])) {
		$leErrArr[4] = "* State Name is required";
	  } else {
		$leState = test_input($_POST["leState"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$leState)) {
		  $leErrArr[4] = "* Only letters and white space allowed"; 
		} else {
			$leErrArr[4] = "";	
		}
	  }
	  
	  
	  //---------Country Validation Check--------------
	  if (empty($_POST["leCountry"])) {
		$leErrArr[5] = "* Country Name is required";
	  } else {
		$leCountry = test_input($_POST["leCountry"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$leCountry)) {
		  $leErrArr[5] = "* Only letters and white space allowed"; 
		} else {
			$leErrArr[5] = "";	
		}
	  }
	  
	  
	  //---------Instituion Validation Check--------------
	  if (empty($_POST["leInstitute"])) {
		$leErrArr[6] = "* Institution Name is required";
	  } else {
		$leInstitute = test_input($_POST["leInstitute"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$leInstitute)) {
		  $leErrArr[6] = "* Only letters and white space allowed"; 
		} else {
			$leErrArr[6] = "";	
		}
	  }
	  
	  
	  //---------Email Validation Check--------------
	  if (empty($_POST["leEmail"])) {
		$leErrArr[7] = "* Email is required";
	  } else {
		$leEmail = test_input($_POST["leEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($leEmail, FILTER_VALIDATE_EMAIL)) {
		  $leErrArr[7] = "* Invalid email format"; 
		} else {
			$leErrArr[7] = "";	
		}
	  }	
	  
	  
	  //---------Telephone Validation Check--------------
	  if (empty($_POST["leTel"])) {
		$leErrArr[8] = "* Telephone Number is required";
	  } else {
		$leTel = test_input($_POST["leTel"]);
		if (!preg_match("/^[0-9]*$/",$leTel)) {
			$leErrArr[8] = "* Only digits are allowed";	
		} else {
			$leErrArr[8] = "";	
		}
	  }		  
	  
	  
	  //---------Fax Validation Check--------------
	  if (empty($_POST["leFax"])) {
		$leFax = "";
		$leErrArr[9] = "";
	  } else {
		$leFax = test_input($_POST["leFax"]);
		if (!preg_match("/^[0-9]*$/",$leFax)) {
			$leErrArr[9] = "* Only digits are allowed";	
		} else {
			$leErrArr[9] = "";	
		}
	  }
	  
	  //---------Website Validation Check--------------
	  if (empty($_POST["leWebsite"])) {
		$leWebsite = "";
		$leErrArr[10] = "";
	  } else {
		$leWebsite = test_input($_POST["leWebsite"]);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$leWebsite)) {
		  $leErrArr[10] = "* Invalid URL"; 
		} else {
			$leErrArr[10] = "";	
		}
	  }
?>

<?php
	foreach($leErrArr as $each) {
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
		echo json_encode($leErrArr);	
	}
?>

<?php
	if($flag == 0) {
		$insertLe = "INSERT INTO layout_editor (leFn,leLn,lePassword,leCity,leState,leCountry,leInstitute,";
		$insertLe .= "leEmail,leTel,leFax,leWebsite) ";	
		$insertLe .= "VALUES ('{$leFn}','{$leLn}','{$lePassword}','{$leCity}','{$leState}','{$leCountry}',";
		$insertLe .= "'{$leInstitute}','{$leEmail}','{$leTel}','{$leFax}','{$leWebsite}')";
		
		$resultLe = mysqli_query($connection,$insertLe);
		if($resultLe) {
			echo "You are registered successfully";	
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