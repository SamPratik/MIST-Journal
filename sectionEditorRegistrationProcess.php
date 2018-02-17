<?php include_once("dbConnector.php"); ?>

<?php
	$seFn = $_POST["seFn"];
	$seLn = $_POST["seLn"];
	$sePassword = $_POST["sePassword"];
	$seCity = $_POST["seCity"];
	$seState = $_POST["seState"];
	$seCountry = $_POST["seCountry"];
	$seInstitute = $_POST["seInstitute"];
	$seAd = $_POST["seAd"];
	$seTitle = $_POST["seTitle"];
	$seEmail = $_POST["seEmail"];
	$seTel = $_POST["seTel"];
	$seFax = $_POST["seFax"];
	$seResearch = $_POST["seResearch"];
	$seWebsite = $_POST["seWebsite"];
	
	$seErrArr = array();
	$flag = 1;
?>

<?php
		
	  //---------First Name Validation Check--------------
	  if (empty($_POST["seFn"])) {
		$seErrArr[0] = "* First Name is required";
	  } else {
		$seFn = test_input($_POST["seFn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$seFn)) {
		  $seErrArr[0] = "* Only letters and white space allowed"; 
		} else {
			$seErrArr[0] = "";	
		}
	  }
	  
	  //---------Last Name Validation Check--------------
	  if (empty($_POST["seLn"])) {
		$seErrArr[1] = "* Last Name is required";
	  } else {
		$seLn = test_input($_POST["seLn"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$seLn)) {
		  $seErrArr[1] = "* Only letters and white space allowed"; 
		} else {
			$seErrArr[1] = "";	
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($_POST["sePassword"])) {
		$seErrArr[2] = "* Password is required";
	  } else {
		$sePassword = test_input($_POST["sePassword"]);
		$seErrArr[2] = "";
	  }
	  
	  
	  //---------City Name Validation Check--------------
	  if (empty($_POST["seCity"])) {
		$seErrArr[3] = "* City Name is required";
	  } else {
		$seCity = test_input($_POST["seCity"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$seCity)) {
		  $seErrArr[3] = "* Only letters and white space allowed"; 
		} else {
			$seErrArr[3] = "";	
		}
	  }	
	  
	  
	  //---------State Validation Check--------------
	  if (empty($_POST["seState"])) {
		$seErrArr[4] = "* State Name is required";
	  } else {
		$seState = test_input($_POST["seState"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$seState)) {
		  $seErrArr[4] = "* Only letters and white space allowed"; 
		} else {
			$seErrArr[4] = "";	
		}
	  }
	  
	  
	  //---------Country Validation Check--------------
	  if (empty($_POST["seCountry"])) {
		$seErrArr[5] = "* Country Name is required";
	  } else {
		$seCountry = test_input($_POST["seCountry"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$seCountry)) {
		  $seErrArr[5] = "* Only letters and white space allowed"; 
		} else {
			$seErrArr[5] = "";	
		}
	  }
	  
	  
	  //---------Instituion Validation Check--------------
	  if (empty($_POST["seInstitute"])) {
		$seErrArr[6] = "* Institution Name is required";
	  } else {
		$seInstitute = test_input($_POST["seInstitute"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$seInstitute)) {
		  $seErrArr[6] = "* Only letters and white space allowed"; 
		} else {
			$seErrArr[6] = "";	
		}
	  }
	  
	  
	  //---------Academic Degree Validation Check--------------
	  if (empty($seAd)) {
		$seErrArr[7] = "* You have to choose an academic degree<br/>";
	  } else {
		$seAd = test_input($seAd);
		$seErrArr[7] = "";
	  }	
	  
	  
	  //---------Title Validation Check--------------
	  if (empty($seTitle)) {
		$seErrArr[8] = "* You have to choose a Title<br/>";
	  } else {
		$seTitle = test_input($seTitle);
		$seErrArr[8] = "";
	  }	 
	  
	  
	  //---------Email Validation Check--------------
	  if (empty($_POST["seEmail"])) {
		$seErrArr[9] = "* Email is required";
	  } else {
		$seEmail = test_input($_POST["seEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($seEmail, FILTER_VALIDATE_EMAIL)) {
		  $seErrArr[9] = "* Invalid email format"; 
		} else {
			$seErrArr[9] = "";	
		}
	  }	
	  
	  
	  //---------Telephone Validation Check--------------
	  if (empty($_POST["seTel"])) {
		$seErrArr[10] = "* Telephone Number is required";
	  } else {
		$seTel = test_input($_POST["seTel"]);
		if (!preg_match("/^[0-9]*$/",$seTel)) {
			$seErrArr[10] = "* Only digits are allowed";	
		} else {
			$seErrArr[10] = "";	
		}
	  }		  
	  
	  
	  //---------Fax Validation Check--------------
	  if (empty($_POST["seFax"])) {
		$seFax = "";
		$seErrArr[11] = "";
	  } else {
		$seFax = test_input($_POST["seFax"]);
		if (!preg_match("/^[0-9]*$/",$seFax)) {
			$seErrArr[11] = "* Only digits are allowed";	
		} else {
			$seErrArr[11] = "";	
		}
	  }
	  
	  
	  //---------Research field Validation Check--------------
	  if (empty($_POST["seResearch"])) {
		$seErrArr[12] = "* This field can't be blank";
	  } else {
		$seResearch = test_input($_POST["seResearch"]);
		$seErrArr[12] = "";
	  }
		
		
	  //---------Website Validation Check--------------
	  if (empty($_POST["seWebsite"])) {
		$seWebsite = "";
		$seErrArr[13] = "";
	  } else {
		$seWebsite = test_input($_POST["seWebsite"]);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$seWebsite)) {
		  $seErrArr[13] = "* Invalid URL"; 
		} else {
			$seErrArr[13] = "";	
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
		$insertSectionEditorReg = "INSERT INTO section_editor (seFn,seLn,sePassword,seCity,seState,seCountry,seInstitute,seAd,seTitle,seEmail,";
		$insertSectionEditorReg .= "seTel,seFax,seResearch,seWebsite) ";	
		$insertSectionEditorReg .= "VALUES ('{$seFn}','{$seLn}','{$sePassword}','{$seCity}','{$seState}','{$seCountry}','{$seInstitute}',";
		$insertSectionEditorReg .= "'{$seAd}','{$seTitle}','{$seEmail}','{$seTel}','{$seFax}','{$seResearch}','{$seWebsite}')";
		
		$resultSectionEditorReg = mysqli_query($connection, $insertSectionEditorReg);
		
		if($resultSectionEditorReg) {
			echo "You are Registered successfully !!!";	
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