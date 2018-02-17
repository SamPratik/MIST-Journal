<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	
	$authorLoginId = $_SESSION["authorLoginId"];

	$selectAuthorUpdatedTelephone = "SELECT tel FROM author WHERE id={$authorLoginId}";
	$resultAuthorUpdatedTelephone = mysqli_query($connection, $selectAuthorUpdatedTelephone);
	
	$rowAuthorTelephoneNumber = mysqli_fetch_assoc($resultAuthorUpdatedTelephone);
	
	echo $rowAuthorTelephoneNumber["tel"];

?>