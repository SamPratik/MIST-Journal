<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	/*if(isset($_POST["authorLoginEmail"]) && isset($_POST["authorLoginPassword"])) {
		$authorLoginEmail = $_POST["authorLoginEmail"];
		$authorLoginPassword = $_POST["authorLoginPassword"];
	
		$selectAuthorLogin = "SELECT * FROM author WHERE email='{$authorLoginEmail}' AND password='{$authorLoginPassword}'";
		$resultAuthorLogin = mysqli_query($connection,$selectAuthorLogin);
		
		if(mysqli_num_rows($resultAuthorLogin) == 1) {
			$data = mysqli_fetch_assoc($resultAuthorLogin);
			$_SESSION["authorLoginEmail"] = $data["email"];
			$_SESSION["authorLoginId"] = $data["id"];
			echo $data["email"];
		}*/ /*else {
			echo "not ok";	
		}*/
	//}
?>

<?php
	$authorLoginEmail = $_POST["authorLoginEmail"];
	$authorLoginPassword = $_POST["authorLoginPassword"];
	$authorLoginErrArr = array();
	$flag = 1;
?>


<?php
	  //---------Email Validation Check--------------
	  if (empty($_POST["authorLoginEmail"])) {
		$authorLoginErrArr[0] = "* Email is required";
	  } else {
		$authorLoginEmail = test_input($_POST["authorLoginEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($authorLoginEmail, FILTER_VALIDATE_EMAIL)) {
		  $authorLoginErrArr[0] = "* Invalid email format"; 
		} else {
			$authorLoginErrArr[0] = "";	
		}
	  }
	  

	  //---------Password Validation Check--------------
	  if (empty($_POST["authorLoginPassword"])) {
		$authorLoginErrArr[1] = "* Password is required";
	  } else {
		$authorLoginPassword = test_input($_POST["authorLoginPassword"]);
		$authorLoginErrArr[1] = "";
	  }	
	  
	  foreach($authorLoginErrArr as $each) {
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
		echo json_encode($authorLoginErrArr);	
	}
?>

<?php
	
	if($flag == 0) {
		$selectAuthorLogin = "SELECT * FROM author WHERE email = '{$authorLoginEmail}' AND password = '{$authorLoginPassword}'";
		
		$resultAuthorLogin = mysqli_query($connection,$selectAuthorLogin);
		
		if(mysqli_num_rows($resultAuthorLogin) == 1) {
			$rowAuthorLogin = mysqli_fetch_assoc($resultAuthorLogin);
			
			$_SESSION["authorLoginId"] = $rowAuthorLogin["id"];	
			$_SESSION["authorLoginEmail"] = $rowAuthorLogin["email"];
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

