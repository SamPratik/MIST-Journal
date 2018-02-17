<?php include_once("dbConnector.php"); ?>

<?php
	$seId = $_POST["seId"];
	$rId = $_POST["rId"];
	$message = $_POST["message"];
?>

<?php
	$sql = "INSERT INTO se_reviewer_meassage (se_id,r_id,r_message) VALUES ({$seId},{$rId},'{$message}')";
	$result = mysqli_query($connection,$sql);
?>

<?php
	if($result) {
		echo "success";	
	} else {
		echo "failed";	
	}
?>

<?php
	//echo $seId." ".$rId." ".$message;
?>