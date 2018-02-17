<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$seLoginEmail = $_POST["seLoginEmail"];
	$seLoginPassword = $_POST["seLoginPassword"];
	$seLoginErrArr = array();
	$flag = 1;
?>


<?php
	  //---------Email Validation Check--------------
	  if (empty($_POST["seLoginEmail"])) {
		$seLoginErrArr[0] = "* Email is required";
	  } else {
		$seLoginEmail = test_input($_POST["seLoginEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($seLoginEmail, FILTER_VALIDATE_EMAIL)) {
		  $seLoginErrArr[0] = "* Invalid email format"; 
		} else {
			$seLoginErrArr[0] = "";	
		}
	  }
	  

	  //---------Password Validation Check--------------
	  if (empty($_POST["seLoginPassword"])) {
		$seLoginErrArr[1] = "* Password is required";
	  } else {
		$seLoginPassword = test_input($_POST["seLoginPassword"]);
		$seLoginErrArr[1] = "";
	  }	
	  
	  foreach($seLoginErrArr as $each) {
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
		echo json_encode($seLoginErrArr);	
	}
?>

<?php
	
	if($flag == 0) {
		$selectSeLogin = "SELECT * FROM section_editor WHERE seEmail = '{$seLoginEmail}' AND sePassword = '{$seLoginPassword}'";
		
		$resultSeLogin = mysqli_query($connection,$selectSeLogin);
		
		if(mysqli_num_rows($resultSeLogin) == 1) {
			$rowSeLogin = mysqli_fetch_assoc($resultSeLogin);
			
			$_SESSION["seLoginId"] = $rowSeLogin["id"];	
			$_SESSION["seLoginEmail"] = $rowSeLogin["seEmail"];
			echo "Login successful";
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