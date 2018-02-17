<?php include_once("dbConnector.php"); ?>

<?php

	$editorOutput = "";
	$editorFn = $_POST["editorFn"];
	$editorLn = $_POST["editorLn"];
	$editorPassword = $_POST["editorPassword"];
	$editorCity = $_POST["editorCity"];
	$editorState = $_POST["editorState"];
	$editorCountry = $_POST["editorCountry"];
	$editorInstitution = $_POST["editorInstitution"];
	$editorAd = $_POST["editorAd"];
	$editorTitle = $_POST["editorTitle"];
	$editorEmail = $_POST["editorEmail"];
	$editorTel = $_POST["editorTel"];
	$editorFax = $_POST["editorFax"];
	$editorResearch = $_POST["editorResearch"];
	$editorWebsite = $_POST["editorWebsite"];

	
	  //---------First Name Validation Check--------------
	  if (empty($editorFn)) {
		$editorOutput .= "* First Name is required<br/>";
	  } else {
		$editorFn = test_input($editorFn);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$editorFn)) {
		  $editorOutput .= "* Only letters and white space allowed in First Name<br/>"; 
		}
	  }
	  
	  //---------Last Name Validation Check--------------
	  if (empty($editorLn)) {
		$editorOutput .= "* Last Name is required<br/>";
	  } else {
		$editorLn = test_input($editorLn);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$editorLn)) {
		  $editorOutput .= "* Only letters and white space allowed in Last Name<br/>"; 
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($editorPassword)) {
		$editorOutput .= "* Password is required<br/>";
	  } else {
		$editorPassword = test_input($editorPassword);
	  }	
	  
	  //---------City Name Validation Check--------------
	  if (empty($editorCity)) {
		$editorOutput .= "* City Name is required<br/>";
	  } else {
		$editorCity = test_input($editorCity);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$editorCity)) {
		  $editorOutput .= "* Only letters and white space allowed in City Field<br/>"; 
		}
	  }		  
	  
	  
	  //---------State Validation Check--------------
	  if (empty($editorState)) {
		$editorOutput .= "* State Name is required<br/>";
	  } else {
		$editorState = test_input($editorState);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$editorState)) {
		  $editorOutput .= "* Only letters and white space allowed in State Field<br/>"; 
		}
	  }		  
	  
	  
	  //---------Country Validation Check--------------
	  if (empty($editorCountry)) {
		$editorOutput .= "* Country Name is required<br/>";
	  } else {
		$editorCountry = test_input($editorCountry);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$editorCountry)) {
		  $editorOutput .= "* Only letters and white space allowed in Country Field<br/>"; 
		}
	  }
	  
	  //---------Instituion Validation Check--------------
	  if (empty($editorInstitution)) {
		$editorOutput .= "* Institution Name is required<br/>";
	  } else {
		$editorInstitution = test_input($editorInstitution);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$editorInstitution)) {
		  $editorOutput = "* Only letters and white space allowed in Institution Field<br/>"; 
		}
	  }	 
	  
	  //---------Academic Degree Validation Check--------------
	  if (empty($editorAd)) {
		$editorOutput .= "* You have to choose an academic degree<br/>";
	  } else {
		$editorAd = test_input($editorAd);
	  }		
	  
	  //---------Title Validation Check--------------
	  if (empty($editorTitle)) {
		$editorOutput .= "* You have to choose a Title<br/>";
	  } else {
		$editorTitle = test_input($editorTitle);
	  }	   	  	  

	  //---------Email Validation Check--------------
	  if (empty($editorEmail)) {
		$editorOutput .= "* Email is required<br/>";
	  } else {
		$editorEmail = test_input($editorEmail);
		// check if e-mail address is well-formed
		if (!filter_var($editorEmail, FILTER_VALIDATE_EMAIL)) {
			$editorOutput .= "* Invalid email format<br/>"; 
		}
	  }
	  
	  //---------Telephone Validation Check--------------
	  if (empty($editorTel)) {
		$editorOutput .= "* Telephone Number is required<br/>";
	  } else {
		$editorTel = test_input($editorTel);
		if (!preg_match("/^[0-9]*$/",$editorTel)) {
			$editorOutput .= "* Only digits are allowed in Telephone Field<br/>";	
		}
	  }		  
	  
	  
	  //---------Fax Validation Check--------------
	  if (empty($editorFax)) {
		$editorFax = "";
	  } else {
		$fax = test_input($editorFax);
		if (!preg_match("/^[0-9]*$/",$editorFax)) {
			$editorOutput .= "* Only digits are allowed in Fax Field<br/>";	
		}
	  }
		

	  //---------Research areas Validation Check--------------
	  if (empty($editorResearch)) {
		$editorOutput .= "* Research field can't be blank<br/>";
	  } else {
		$editorResearch = test_input($editorResearch);
	  }
	  
	  		
	  //---------Website Validation Check--------------
	  if (empty($editorWebsite)) {
		$editorWebsite = "";
	  } else {
		$editorWebsite = test_input($editorWebsite);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$editorWebsite)) {
		  $editorOutput .= "* Invalid URL<br/>"; 
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


<?php
	if($editorOutput == "") {
		$insertEditor = "INSERT INTO editor ";
		$insertEditor .= "(fn,ln,password,city,state,country,institute,ad,title,email,tel,fax,research,website) VALUES ";
		$insertEditor .= "('$editorFn','$editorLn','$editorPassword','$editorCity','$editorState','$editorCountry','$editorInstitution',";
		$insertEditor .= "'$editorAd','$editorTitle','$editorEmail','$editorTel','$editorFax','$editorResearch','$editorWebsite')";
		
		$resultInsertEditor = mysqli_query($connection,$insertEditor);
		
		echo "You are registered successfully as an Editor...";
	} else {
		echo $editorOutput; 
	}
?>