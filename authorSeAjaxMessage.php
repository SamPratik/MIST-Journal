<?php include_once("dbConnector.php"); ?>

<?php
	$seId = $_POST["seId"];
	$authorId = $_POST["authorId"];
	$message = $_POST["message"];
?>

<?php
	$sql = "INSERT INTO se_author_message (se_id,author_id,author_message) VALUES ({$seId},{$authorId},'{$message}')";
	$result = mysqli_query($connection,$sql);
	
	if($result) {
		echo "success";	
	} else {
		echo "failed";	
	}
?>