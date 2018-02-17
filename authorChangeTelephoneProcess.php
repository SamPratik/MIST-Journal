<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$authorLoginId = $_SESSION["authorLoginId"];
	$authorChangeTelephone = $_POST["authorChangeTelephone"];
	
	$updateAuthorTelephone = "UPDATE author SET tel='{$authorChangeTelephone}' WHERE id={$authorLoginId}";
	$resultAuthorTelephone = mysqli_query($connection, $updateAuthorTelephone);
	
	if($resultAuthorTelephone) {
		echo "Telephone Number has been successfully updated<br/>";	
	} else {
		echo "Telephone number can't be changed. try again...<br/>";	
	}
?>