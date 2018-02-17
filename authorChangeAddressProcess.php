<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$authorChangeCity = $_POST["authorChangeCity"];
	$authorChangeState = $_POST["authorChangeState"];
	$authorChangeCountry = $_POST["authorChangeCountry"];
	
	$updateAuthorAddress = "UPDATE author SET city='{$authorChangeCity}', state='{$authorChangeState}', ";
	$updateAuthorAddress .= "country='{$authorChangeCountry}' WHERE id={$_SESSION['authorLoginId']}";
	
	$resultAuthorAdress = mysqli_query($connection, $updateAuthorAddress);
	
	if($resultAuthorAdress) {
		echo "Address has been updated successfully";	
	} else {
		echo "Address can't be updated";	
	}

?>