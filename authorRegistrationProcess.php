<?php include_once("dbConnector.php"); ?>

<?php
	$output = "";
	$authorFn = $_POST["authorFirstName"];
	$authorLn = $_POST["authorLastName"];
	$authorPass = $_POST["authorPassword"];
	$authorCity = $_POST["authorCity"];
	$authorState = $_POST["authorState"];
	$authorCountry = $_POST["authorCountry"];
	$authorDept = $_POST["authorDept"];
	$authorInstitution = $_POST["authorInstitution"];
	$authorAffliation = $_POST["authorAffliation"];
	$authorEmail = $_POST["authorEmail"];
	$authorTel = $_POST["authorTel"];
	$authorFax = $_POST["authorFax"];
	$authorFoi = $_POST["authorFoi"];
	$authorWebsite = $_POST["authorWebsite"];
	
	  //---------First Name Validation Check--------------
	  if (empty($authorFn)) {
		$output .= "* First Name is required<br/>";
	  } else {
		$authorFn = test_input($authorFn);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$authorFn)) {
		  $output .= "* Only letters and white space allowed<br/>"; 
		}
	  }
	  
	  
	  //---------Last Name Validation Check--------------
	  if (empty($authorLn)) {
		$output .= "* Last Name is required<br/>";
	  } else {
		$authorLn = test_input($authorLn);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$authorLn)) {
		  $output .= "* Only letters and white space allowed<br/>";
		}
	  }
	  
	  //---------Password Validation Check--------------
	  if (empty($authorPass)) {
		$output .= "* Password is required<br/>";
	  } else {
		$authorPass = test_input($authorPass);
	  }
		
	  //---------City Name Validation Check--------------
	  if (empty($authorCity)) {
		$output .= "* City Name is required<br/>";
	  } else {
		$authorCity = test_input($authorCity);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$authorCity)) {
		  $output .= "* Only letters and white space allowed<br/>"; 
		}
	  }		  
	  
	  
	  //---------State Validation Check--------------
	  if (empty($authorState)) {
		$output .= "* State Name is required<br/>";
	  } else {
		$authorState = test_input($authorState);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$authorState)) {
		  $output .= "* Only letters and white space allowed<br/>"; 
		}
	  }
	  
	  //---------Country Validation Check--------------
	  if (empty($authorCountry)) {
		$output .= "* Country Name is required<br/>";
	  } else {
		$authorCountry = test_input($authorCountry);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$authorCountry)) {
		  $output .= "* Only letters and white space allowed<br/>"; 
		}
	  }
	  
	  //---------Department Validation Check--------------
	  if (empty($authorDept)) {
		$output .= "* Department Name is required<br/>";
	  } else {
		$authorDept = test_input($authorDept);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$authorDept)) {
		  $output .= "* Only letters and white space allowed<br/>"; 
		}
	  }		  
	  
	  
	  //---------Instituion Validation Check--------------
	  if (empty($authorInstitution)) {
		$output .= "* Institution Name is required<br/>";
	  } else {
		$authorInstitution = test_input($authorInstitution);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$authorInstitution)) {
		  $output .= "* Only letters and white space allowed<br/>"; 
		}
	  }
	  
	  //---------Affliation Validation Check--------------	
	  if(empty($authorAffliation)) {
		  $authorAffliation = "";  
	  } else {
			$authorAffliation = test_input($authorAffliation);  
	  }	  
	  
	  //---------Email Validation Check--------------
	  if (empty($authorEmail)) {
		$output .= "* Email is required<br/>";
	  } else {
		$authorEmail = test_input($authorEmail);
		// check if e-mail address is well-formed
		if (!filter_var($authorEmail, FILTER_VALIDATE_EMAIL)) {
		  $output .= "* Invalid email format<br/>"; 
		}
	  }
	  
	  //---------Telephone Validation Check--------------
	  if (empty($authorTel)) {
		$output .= "* Telephone Number is required<br/>";
	  } else {
		$authorTel = test_input($authorTel);
		if (!preg_match("/^[0-9]*$/",$authorTel)) {
			$output .= "* Only digits are allowed<br/>";	
		}
	  }
	  
	  //---------Fax Validation Check--------------
	  if (empty($authorFax)) {
		$authorFax = "";
	  } else {
		$authorFax = test_input($authorFax);
		if (!preg_match("/^[0-9]*$/",$authorFax)) {
			$output .= "* Only digits are allowed<br/>";	
		}
	  }
	  
	  //---------Fields of Interest Validation Check--------------
	  if (empty($authorFoi)) {
		$authorFoi = "";
	  } else {
		$authorFoi = test_input($authorFoi);
	  }
	  
	  //---------Website Validation Check--------------
	  if (empty($authorWebsite)) {
		$authorWebsite = "";
	  } else {
		$authorWebsite = test_input($authorWebsite);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$authorWebsite)) {
		  $output .= "* Invalid URL"; 
		}
	  }
	  	 
?>

<?php
	if($output == "") {
		$insertAuthorInfo = "INSERT INTO author "; 
		$insertAuthorInfo .= "(fn,ln,password,city,state,country,dept,institution,affliation,email,tel,fax,foi,website) ";
		$insertAuthorInfo .= "VALUES ";
		$insertAuthorInfo .= "('$authorFn','$authorLn','$authorPass','$authorCity',";
		$insertAuthorInfo .= "'$authorState','$authorCountry','$authorDept','$authorInstitution',";
		$insertAuthorInfo .= "'$authorAffliation','$authorEmail','$authorTel','$authorFax',";
		$insertAuthorInfo .= "'$authorFoi','$authorWebsite')";
		
		mysqli_query($connection,$insertAuthorInfo);			
	}
?>



<!--------------test_input() function-------------->
<?php
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}	
?>

<?php echo $output."<br/>"; ?>