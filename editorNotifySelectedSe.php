<?php 
	
	include_once("dbConnector.php");
	
?>

<?php
	
	$message = $_POST["message"];
	
	$selectIdArticle = "SELECT se_id,editor_id,article FROM editor_send_article_to_se ORDER BY id DESC LIMIT 1";
	$resultIdArticle = mysqli_query($connection,$selectIdArticle);
	
	$rowIdArticle = mysqli_fetch_assoc($resultIdArticle);
	$se_id = $rowIdArticle["se_id"];
	$editor_id = $rowIdArticle["editor_id"];
	$article = $rowIdArticle["article"];
?>

<?php
	
	$insert = "INSERT INTO editor_se_message (editor_id,se_id,editor_article,editor_message) ";
	$insert .= "VALUES ({$editor_id},{$se_id},'{$article}','{$message}')";
	
	$resultInsert = mysqli_query($connection,$insert);
	
	if($resultInsert) {
		echo "Section editor has been notified successfully!!!";	
	} else {
		echo "Something went wrong!!!";
	}
	
?>