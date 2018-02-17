<?php
	include_once("dbConnector.php");
?>

<?php
	$ceId = $_POST["ceId"];
	$seId = $_POST["seId"];
	$seAuthorId = $_POST["seAuthorId"];
	$seMessage = $_POST["seMessage"];
?>

<?php //echo $_POST["ceId"]." ".$_POST["authorId"]." ".$_FILES["authorFile"]["name"]; ?>

<?php
 //----- file er name ta pacchi-------
 $file = $_FILES['seFile']['name'];
 
 //---- file er path ta pacchi--------
 $file_loc = $_FILES['seFile']['tmp_name'];
 
 //----file er size ta pacchi-------
 $file_size = $_FILES['seFile']['size'];
 
 //----ki dhoroner file sheta pabo-----
 $file_type = $_FILES['seFile']['type'];
 
 //----jei directory te file gula save thakbe upload er pore----
 $folder="uploads/";
 
 //-------PC er main location theke upload folder e move hocche file upload er pore------
 move_uploaded_file($file_loc,$folder.$file);
 
 /*$sql="UPDATE se_select_ce SET article='{$file}' WHERE id={$getLastId}";
 $resultFileUpload = mysqli_query($connection,$sql); 
 
 if($resultFileUpload) {
	echo "File is attached successfully!!!"; 
 } else {
	echo "Something went wrong!!!"; 
 }*/
 
 $sql = "INSERT INTO se_ce_message (se_id,ce_id,author_id,ce_article,ce_message) VALUES ({$seId},{$ceId},{$seAuthorId},'{$file}','{$seMessage}')";
 $resultFileUpload = mysqli_query($connection,$sql);
 
 $sql1 = "INSERT INTO ce_send_article_to_se (ce_id,se_id,author_id,article) VALUES ({$ceId},{$seId},{$seAuthorId},'{$file}')";
 $result1 = mysqli_query($connection,$sql1);
 
 
 if($result1) {
	echo "Author is notified & File is attached successfully!!!"; 
 } else {
	echo "Something went wrong!!!"; 
 }
?>