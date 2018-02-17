<?php include_once("dbConnector.php"); ?>

<?php
	$volume = $_POST["volume"];
	$issue = $_POST["issue"];
?>

<?php
	$sql = "INSERT INTO announcement (volume,issue) VALUES ({$volume},{$issue})";
	$result = mysqli_query($connection,$sql);
	
	if($result) {
		echo "You have annouced successfully!!!";	
	} else {
		echo "Failed to announce!!!";	
	}
?>