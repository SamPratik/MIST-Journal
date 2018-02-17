<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$authorLoginId = $_SESSION["authorLoginId"]; 
	$newPasswordInput = $_POST["newPasswordInput"];
	$updatePasswordChange = "UPDATE author SET password='{$newPasswordInput}' WHERE id={$authorLoginId}";
	
	$resultPasswordChange = mysqli_query($connection,$updatePasswordChange);
	if($resultPasswordChange) {
		echo "Password has been successfully changed";	
	}	else {
		echo "Password can't be changed, try again...";	
	}
?>