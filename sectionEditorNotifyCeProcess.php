<?php include_once("dbConnector.php"); ?>
<?php
	
	$ceId = $_POST["ceId"];
	$seId = $_POST["seId"];
	$authorId = $_POST["authorId"];
	$message = $_POST["message"];
	//echo $ceId." ".$seId." ".$authorId;
	
?>

<?php
	/*$sql = "INSERT INTO se_select_ce (author_id,se_id,ce_id) VALUES ({$authorId},{$seId},{$ceId})";
	$result = mysqli_query($connection,$sql);*/
?>

<?php
	$sql1 = "INSERT INTO se_ce_message (se_id,ce_id,author_id,se_message) VALUES ({$seId},{$ceId},{$authorId},'{$message}')";
	$result1 = mysqli_query($connection,$sql1);
	
	if($result1) {
		echo "Selected copy editor has been notified!!!";
	} else {
		echo "Something went wrong!!!";
	}
?>