<?php include_once("dbConnector.php"); ?>
<?php
	$rId = $_POST["rId"];
	$seId = $_POST["seId"];
	$authorId = $_POST["authorId"];
	//$specialId = $_POST["specialId"];
	$article = $_POST["article"];
	$seMessageR = $_POST["seMessageReviewer"];
?>



<?php
	//echo "rId = ".$rId." seId = ".$seId." authorId= ".$authorId;
	$seSelectReviewer = "INSERT INTO se_select_reviewer (author_id,se_id,r_id,submitted_article) VALUES ";
	$seSelectReviewer .= "({$authorId},{$seId},{$rId},'{$article}')";
	
	$resultSeSelectReviewer = mysqli_query($connection,$seSelectReviewer);
?>

<?php  
	$seMessage = "INSERT INTO se_reviewer_meassage (se_id,r_id,se_message,se_article) VALUES ";
	$seMessage .= "({$seId},{$rId},'{$seMessageR}','{$article}')";
	$resultMessage = mysqli_query($connection,$seMessage);
?>

<?php  
	if($resultSeSelectReviewer && $resultMessage) {
		echo "Article has been forwarded to the selected Reviewers";	
	}
?>

