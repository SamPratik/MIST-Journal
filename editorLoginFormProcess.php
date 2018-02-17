<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$editorLoginEmail = $_POST["editorLoginEmail"];
	$editorLoginPassword = $_POST["editorLoginPassword"];
	
	$editorSelectLogin = "SELECT * FROM editor WHERE email='$editorLoginEmail' AND password='$editorLoginPassword'";
	$editorResultLogin = mysqli_query($connection,$editorSelectLogin);
	
	//echo $editorLoginEmail." ".$editorLoginPassword;
	
	if(mysqli_num_rows($editorResultLogin) == 1) {
		$editorLoginRow = mysqli_fetch_assoc($editorResultLogin);
		$_SESSION["editorLoginEmail"] = $editorLoginRow["email"];
		$_SESSION["editorLoginId"] = $editorLoginRow["id"];
		echo "success";
	} else {
		echo "failed";	
	}
?>