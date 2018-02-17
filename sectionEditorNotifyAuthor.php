<?php include_once("dbConnector.php"); ?>

<?php
	$authorId = $_POST["authorId"];
	$message = $_POST["message"];
	
	echo $authorId." ".$message;
?>