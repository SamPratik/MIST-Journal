<?php include_once("dbConnector.php"); ?>

<?php
	$pFn = $_POST["pFn"];
	$pLn = $_POST["pLn"];
	$pPassword = $_POST["pPassword"];
	$pCity = $_POST["pCity"];
	$pState = $_POST["pState"];
	$pCountry = $_POST["pCountry"];
	$pInstitute = $_POST["pInstitute"];
	$pEmail = $_POST["pEmail"];
	$pTel = $_POST["pTel"];
	$pFax = $_POST["pFax"];
	$pWebsite = $_POST["pWebsite"];
	
	$pErrArr = array();
	$flag = 1;
?>

<?php
	  //---------First Name Validation Check--------------
	  if (empty($_POST["pFn"])) {
		$pErrArr[0] = "* First Name is required";
	  } else {
		$pFn = test_input($_POST["pFn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$pFn)) {
		  $pErrArr[0] = "* Only letters and white space allowed"; 
		} else {
			$pErrArr[0] = "";	
		}
	  }
	  
	  //---------Last Name Validation Check--------------
	  if (empty($_POST["pLn"])) {
		$pErrArr[1] = "* Last Name is required";
	  } else {
		$pLn = test_input($_POST["pLn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$pLn)) {
		  $pErrArr[1] = "* Only letters and white space allowed"; 
		} else {
			$pErrArr[1] = "";	
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($_POST["pPassword"])) {
		$pErrArr[2] = "* Password is required";
	  } else {
		$pPassword = test_input($_POST["pPassword"]);
		$pErrArr[2] = "";
	  }
	  
	  
	  //---------City Name Validation Check--------------
	  if (empty($_POST["pCity"])) {
		$pErrArr[3] = "* City Name is required";
	  } else {
		$pCity = test_input($_POST["pCity"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$pCity)) {
		  $pErrArr[3] = "* Only letters and white space allowed"; 
		} else {
			$pErrArr[3] = "";	
		}
	  }	
	  
	  
	  //---------State Validation Check--------------
	  if (empty($_POST["pState"])) {
		$pErrArr[4] = "* State Name is required";
	  } else {
		$pState = test_input($_POST["pState"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$pState)) {
		  $pErrArr[4] = "* Only letters and white space allowed"; 
		} else {
			$pErrArr[4] = "";	
		}
	  }
	  
	  
	  //---------Country Validation Check--------------
	  if (empty($_POST["pCountry"])) {
		$pErrArr[5] = "* Country Name is required";
	  } else {
		$pCountry = test_input($_POST["pCountry"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$pCountry)) {
		  $pErrArr[5] = "* Only letters and white space allowed"; 
		} else {
			$pErrArr[5] = "";	
		}
	  }
	  
	  
	  //---------Instituion Validation Check--------------
	  if (empty($_POST["pInstitute"])) {
		$pErrArr[6] = "* Institution Name is required";
	  } else {
		$pInstitute = test_input($_POST["pInstitute"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$pInstitute)) {
		  $pErrArr[6] = "* Only letters and white space allowed"; 
		} else {
			$pErrArr[6] = "";	
		}
	  }
	  
	  
	  //---------Email Validation Check--------------
	  if (empty($_POST["pEmail"])) {
		$pErrArr[7] = "* Email is required";
	  } else {
		$pEmail = test_input($_POST["pEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($pEmail, FILTER_VALIDATE_EMAIL)) {
		  $pErrArr[7] = "* Invalid email format"; 
		} else {
			$pErrArr[7] = "";	
		}
	  }	
	  
	  
	  //---------Telephone Validation Check--------------
	  if (empty($_POST["pTel"])) {
		$pErrArr[8] = "* Telephone Number is required";
	  } else {
		$pTel = test_input($_POST["pTel"]);
		if (!preg_match("/^[0-9]*$/",$pTel)) {
			$pErrArr[8] = "* Only digits are allowed";	
		} else {
			$pErrArr[8] = "";	
		}
	  }		  
	  
	  
	  //---------Fax Validation Check--------------
	  if (empty($_POST["pFax"])) {
		$pFax = "";
		$pErrArr[9] = "";
	  } else {
		$pFax = test_input($_POST["pFax"]);
		if (!preg_match("/^[0-9]*$/",$pFax)) {
			$pErrArr[9] = "* Only digits are allowed";	
		} else {
			$pErrArr[9] = "";	
		}
	  }
	  
	  //---------Website Validation Check--------------
	  if (empty($_POST["pWebsite"])) {
		$pWebsite = "";
		$pErrArr[10] = "";
	  } else {
		$pWebsite = test_input($_POST["pWebsite"]);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$pWebsite)) {
		  $pErrArr[10] = "* Invalid URL"; 
		} else {
			$pErrArr[10] = "";	
		}
	  }
?>

<?php
	foreach($pErrArr as $each) {
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
		echo json_encode($pErrArr);	
	}
?>

<?php
	if($flag == 0) {
		$insertP = "INSERT INTO proofreader (pFn,pLn,pPassword,pCity,pState,pCountry,pInstitute,";
		$insertP .= "pEmail,pTel,pFax,pWebsite) ";	
		$insertP .= "VALUES ('{$pFn}','{$pLn}','{$pPassword}','{$pCity}','{$pState}','{$pCountry}',";
		$insertP .= "'{$pInstitute}','{$pEmail}','{$pTel}','{$pFax}','{$pWebsite}')";
		
		$resultP = mysqli_query($connection,$insertP);
		if($resultP) {
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