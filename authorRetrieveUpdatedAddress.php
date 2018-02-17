<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php	
	$selectChangeAuthorAddress = "SELECT city, state, country FROM author WHERE id={$_SESSION['authorLoginId']}";
	$resultChangeAuthorAddress = mysqli_query($connection, $selectChangeAuthorAddress);
	
	$rowAuthorChangePassword = mysqli_fetch_assoc($resultChangeAuthorAddress);
	

	echo $rowAuthorChangePassword["city"].", ".$rowAuthorChangePassword["state"].", ".$rowAuthorChangePassword["country"];
    
?>