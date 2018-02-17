<?php include_once("dbConnector.php"); ?>

<?php
	$authorId = $_POST["authorId"];
	$message = $_POST["message"];
	$seId = $_POST["seId"];
	
?>
<?php //echo $authorId." ".$message." ".$seId; ?>
<?php
	$sql = "INSERT INTO se_author_message (se_id,author_id,se_message) VALUES ({$seId},{$authorId},'{$message}')";
	$result = mysqli_query($connection,$sql);
?>

<?php
	/*if($result) {
		echo "success";	
	} else {
		echo "failed";	
	}*/
?>