<?php include_once("dbConnector.php"); ?>

<?php
	$ceFn = $_POST["ceFn"];
	$ceLn = $_POST["ceLn"];
	$cePassword = $_POST["cePassword"];
	$ceCity = $_POST["ceCity"];
	$ceState = $_POST["ceState"];
	$ceCountry = $_POST["ceCountry"];
	$ceInstitute = $_POST["ceInstitute"];
	$ceEmail = $_POST["ceEmail"];
	$ceTel = $_POST["ceTel"];
	$ceFax = $_POST["ceFax"];
	$ceWebsite = $_POST["ceWebsite"];
	
	$ceErrArr = array();
	$flag = 1;
?>

<?php
	  //---------First Name Validation Check--------------
	  if (empty($_POST["ceFn"])) {
		$ceErrArr[0] = "* First Name is required";
	  } else {
		$ceFn = test_input($_POST["ceFn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$ceFn)) {
		  $ceErrArr[0] = "* Only letters and white space allowed"; 
		} else {
			$ceErrArr[0] = "";	
		}
	  }
	  
	  //---------Last Name Validation Check--------------
	  if (empty($_POST["ceLn"])) {
		$ceErrArr[1] = "* Last Name is required";
	  } else {
		$ceLn = test_input($_POST["ceLn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$ceLn)) {
		  $ceErrArr[1] = "* Only letters and white space allowed"; 
		} else {
			$ceErrArr[1] = "";	
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($_POST["cePassword"])) {
		$ceErrArr[2] = "* Password is required";
	  } else {
		$cePassword = test_input($_POST["cePassword"]);
		$ceErrArr[2] = "";
	  }
	  
	  
	  //---------City Name Validation Check--------------
	  if (empty($_POST["ceCity"])) {
		$ceErrArr[3] = "* City Name is required";
	  } else {
		$ceCity = test_input($_POST["ceCity"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$ceCity)) {
		  $ceErrArr[3] = "* Only letters and white space allowed"; 
		} else {
			$ceErrArr[3] = "";	
		}
	  }	
	  
	  
	  //---------State Validation Check--------------
	  if (empty($_POST["ceState"])) {
		$ceErrArr[4] = "* State Name is required";
	  } else {
		$ceState = test_input($_POST["ceState"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$ceState)) {
		  $ceErrArr[4] = "* Only letters and white space allowed"; 
		} else {
			$ceErrArr[4] = "";	
		}
	  }
	  
	  
	  //---------Country Validation Check--------------
	  if (empty($_POST["ceCountry"])) {
		$ceErrArr[5] = "* Country Name is required";
	  } else {
		$ceCountry = test_input($_POST["ceCountry"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$ceCountry)) {
		  $ceErrArr[5] = "* Only letters and white space allowed"; 
		} else {
			$ceErrArr[5] = "";	
		}
	  }
	  
	  
	  //---------Instituion Validation Check--------------
	  if (empty($_POST["ceInstitute"])) {
		$ceErrArr[6] = "* Institution Name is required";
	  } else {
		$ceInstitute = test_input($_POST["ceInstitute"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$ceInstitute)) {
		  $ceErrArr[6] = "* Only letters and white space allowed"; 
		} else {
			$ceErrArr[6] = "";	
		}
	  }	
	  
	  //---------Email Validation Check--------------
	  if (empty($_POST["ceEmail"])) {
		$ceErrArr[7] = "* Email is required";
	  } else {
		$ceEmail = test_input($_POST["ceEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($ceEmail, FILTER_VALIDATE_EMAIL)) {
		  $ceErrArr[7] = "* Invalid email format"; 
		} else {
			$ceErrArr[7] = "";	
		}
	  }	
	  
	  
	  //---------Telephone Validation Check--------------
	  if (empty($_POST["ceTel"])) {
		$ceErrArr[8] = "* Telephone Number is required";
	  } else {
		$ceTel = test_input($_POST["ceTel"]);
		if (!preg_match("/^[0-9]*$/",$ceTel)) {
			$ceErrArr[8] = "* Only digits are allowed";	
		} else {
			$ceErrArr[8] = "";	
		}
	  }		  
	  
	  
	  //---------Fax Validation Check--------------
	  if (empty($_POST["ceFax"])) {
		$ceFax = "";
		$ceErrArr[9] = "";
	  } else {
		$ceFax = test_input($_POST["ceFax"]);
		if (!preg_match("/^[0-9]*$/",$ceFax)) {
			$ceErrArr[9] = "* Only digits are allowed";	
		} else {
			$ceErrArr[9] = "";	
		}
	  }
	  
	  //---------Website Validation Check--------------
	  if (empty($_POST["ceWebsite"])) {
		$ceWebsite = "";
		$ceErrArr[10] = "";
	  } else {
		$ceWebsite = test_input($_POST["ceWebsite"]);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$ceWebsite)) {
		  $ceErrArr[10] = "* Invalid URL"; 
		} else {
			$ceErrArr[10] = "";	
		}
	  }
?>

<?php
	foreach($ceErrArr as $each) {
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
		echo json_encode($ceErrArr);	
	}
?>

<?php
	if($flag == 0) {
		$insertCe = "INSERT INTO copy_editor (ceFn,ceLn,cePassword,ceCity,ceState,ceCountry,ceInstitute,ceEmail,";
		$insertCe .= "ceTel,ceFax,ceWebsite) ";
		$insertCe .= "VALUES ('{$ceFn}','{$ceLn}','{$cePassword}','{$ceCity}','{$ceState}','{$ceCountry}','{$ceInstitute}'";
		$insertCe .= ",'{$ceEmail}','{$ceTel}','{$ceFax}','{$ceWebsite}')";
		
		$resultCe = mysqli_query($connection, $insertCe);
		if($resultCe) {
			echo "You are registered successfully!!!";	
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