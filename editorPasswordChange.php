<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$editorLoginId = $_SESSION["editorLoginId"]; 
	$editorNewPasswordInput = $_POST["editorNewPasswordInput"];
	$updatePasswordChange = "UPDATE editor SET password='{$editorNewPasswordInput}' WHERE id={$editorLoginId}";
	
	$resultPasswordChange = mysqli_query($connection,$updatePasswordChange);
	if($resultPasswordChange) {
		echo "Password has been successfully changed";	
	}	else {
		echo "Password can't be changed, try again...";	
	}
?>