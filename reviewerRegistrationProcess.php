<?php include_once("dbConnector.php"); ?>

<?php
	$rFn = $_POST["rFn"];
	$rLn = $_POST["rLn"];
	$rPassword = $_POST["rPassword"];
	$rCity = $_POST["rCity"];
	$rState = $_POST["rState"];
	$rCountry = $_POST["rCountry"];
	$rInstitute = $_POST["rInstitute"];
	$rAd = $_POST["rAd"];
	$rTitle = $_POST["rTitle"];
	$rEmail = $_POST["rEmail"];
	$rTel = $_POST["rTel"];
	$rFax = $_POST["rFax"];
	$rResearch = $_POST["rResearch"];
	$rWebsite = $_POST["rWebsite"];
	
	$rErrArr = array();
	$flag = 1;
?>

<?php
	  //---------First Name Validation Check--------------
	  if (empty($_POST["rFn"])) {
		$rErrArr[0] = "* First Name is required";
	  } else {
		$rFn = test_input($_POST["rFn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$rFn)) {
		  $rErrArr[0] = "* Only letters and white space allowed"; 
		} else {
			$rErrArr[0] = "";	
		}
	  }
?>


<?php
	  //---------Last Name Validation Check--------------
	  if (empty($_POST["rLn"])) {
		$rErrArr[1] = "* Last Name is required";
	  } else {
		$rLn = test_input($_POST["rLn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$rLn)) {
		  $rErrArr[1] = "* Only letters and white space allowed"; 
		} else {
			$rErrArr[1] = "";	
		}
	  }
?>	

<?php
	  //---------Password Validation Check--------------
	  if (empty($_POST["rPassword"])) {
		$rErrArr[2] = "* Password is required";
	  } else {
		$rPassword = test_input($_POST["rPassword"]);
		$rErrArr[2] = "";
	  }
?>

<?php 
	  //---------City Name Validation Check--------------
	  if (empty($_POST["rCity"])) {
		$rErrArr[3] = "* City Name is required";
	  } else {
		$rCity = test_input($_POST["rCity"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$rCity)) {
		  $rErrArr[3] = "* Only letters and white space allowed"; 
		} else {
			$rErrArr[3] = "";	
		}
	  }	
	  
	  
	  //---------State Validation Check--------------
	  if (empty($_POST["rState"])) {
		$rErrArr[4] = "* State Name is required";
	  } else {
		$rState = test_input($_POST["rState"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$rState)) {
		  $rErrArr[4] = "* Only letters and white space allowed"; 
		} else {
			$rErrArr[4] = "";	
		}
	  }
	  
	  
	  //---------Country Validation Check--------------
	  if (empty($_POST["rCountry"])) {
		$rErrArr[5] = "* Country Name is required";
	  } else {
		$rCountry = test_input($_POST["rCountry"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$rCountry)) {
		  $rErrArr[5] = "* Only letters and white space allowed"; 
		} else {
			$rErrArr[5] = "";	
		}
	  }
	  
	  //---------Instituion Validation Check--------------
	  if (empty($_POST["rInstitute"])) {
		$rErrArr[6] = "* Institution Name is required";
	  } else {
		$rInstitute = test_input($_POST["rInstitute"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$rInstitute)) {
		  $rErrArr[6] = "* Only letters and white space allowed"; 
		} else {
			$rErrArr[6] = "";	
		}
	  }
	  
	  
	  //---------Academic Degree Validation Check--------------
	  if (empty($rAd)) {
		$rErrArr[7] = "* You have to choose an academic degree<br/>";
	  } else {
		$rAd = test_input($rAd);
		$rErrArr[7] = "";
	  }	
	  
	  
	  //---------Title Validation Check--------------
	  if (empty($rTitle)) {
		$rErrArr[8] = "* You have to choose a Title<br/>";
	  } else {
		$rTitle = test_input($rTitle);
		$rErrArr[8] = "";
	  }	 
	  
	  
	  //---------Email Validation Check--------------
	  if (empty($_POST["rEmail"])) {
		$rErrArr[9] = "* Email is required";
	  } else {
		$rEmail = test_input($_POST["rEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($rEmail, FILTER_VALIDATE_EMAIL)) {
		  $rErrArr[9] = "* Invalid email format"; 
		} else {
			$rErrArr[9] = "";	
		}
	  }	
	  
	  
	  //---------Telephone Validation Check--------------
	  if (empty($_POST["rTel"])) {
		$rErrArr[10] = "* Telephone Number is required";
	  } else {
		$rTel = test_input($_POST["rTel"]);
		if (!preg_match("/^[0-9]*$/",$rTel)) {
			$rErrArr[10] = "* Only digits are allowed";	
		} else {
			$rErrArr[10] = "";	
		}
	  }		  
	  
	  
	  //---------Fax Validation Check--------------
	  if (empty($_POST["rFax"])) {
		$rFax = "";
		$rErrArr[11] = "";
	  } else {
		$rFax = test_input($_POST["rFax"]);
		if (!preg_match("/^[0-9]*$/",$rFax)) {
			$rErrArr[11] = "* Only digits are allowed";	
		} else {
			$rErrArr[11] = "";	
		}
	  }
	  
	  
	  //---------Research field Validation Check--------------
	  if (empty($_POST["rResearch"])) {
		$rErrArr[12] = "* This field can't be blank";
	  } else {
		$rResearch = test_input($_POST["rResearch"]);
		$rErrArr[12] = "";
	  }
		
		
	  //---------Website Validation Check--------------
	  if (empty($_POST["rWebsite"])) {
		$rWebsite = "";
		$rErrArr[13] = "";
	  } else {
		$rWebsite = test_input($_POST["rWebsite"]);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$rWebsite)) {
		  $rErrArr[13] = "* Invalid URL"; 
		} else {
			$rErrArr[13] = "";	
		}
	  }
?>

<?php
	foreach($rErrArr as $each) {
		if($each == "") {
			$flag = 0;
			continue;	
		} else {
			$flag = 1;
			break;	
		}
	}
	
	if($flag == 1) {
		echo json_encode($rErrArr);	
	}
?>  

<?php
	if($flag == 0) {
		$insertReviewerReg = "INSERT INTO reviewer (rFn,rLn,rPassword,rCity,rState,rCountry,rInstitute,rAd,rTitle,rEmail,";
		$insertReviewerReg .= "rTel,rFax,rResearch,rWebsite) ";	
		$insertReviewerReg .= "VALUES ('{$rFn}','{$rLn}','{$rPassword}','{$rCity}','{$rState}','{$rCountry}','{$rInstitute}',";
		$insertReviewerReg .= "'{$rAd}','{$rTitle}','{$rEmail}','{$rTel}','{$rFax}','{$rResearch}','{$rWebsite}')";
		
		$resultReviewerReg = mysqli_query($connection, $insertReviewerReg);
		
		if($resultReviewerReg) {
			echo "You are Registered successfully as a Reviewer!!!";	
		} else {
			echo "something wrong";
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