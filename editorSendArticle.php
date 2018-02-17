<?php
	include_once("dbConnector.php");
?>

<?php
	
	$authorId = $_POST["authorId"];
	$editorId = $_POST["editorId"];
	$seId = $_POST["seId"];
	
?>

<?php
	
	$insertId = "INSERT INTO editor_send_article_to_se (author_id,editor_id,se_id) VALUES ($authorId,$editorId,$seId)";
	$resultId = mysqli_query($connection,$insertId);
	
?>