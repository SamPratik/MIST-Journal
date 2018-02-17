<?php
	include_once("dbConnector.php");
?>

<?php
	$ceId = $_POST["ceId"];
	$authorId = $_POST["authorId"];
	$authorMessage = $_POST["authorMessage"];
?>

<?php //echo $_POST["ceId"]." ".$_POST["authorId"]." ".$_FILES["authorFile"]["name"]; ?>

<?php
 //----- file er name ta pacchi-------
 $file = $_FILES['authorFile']['name'];
 
 //---- file er path ta pacchi--------
 $file_loc = $_FILES['authorFile']['tmp_name'];
 
 //----file er size ta pacchi-------
 $file_size = $_FILES['authorFile']['size'];
 
 //----ki dhoroner file sheta pabo-----
 $file_type = $_FILES['authorFile']['type'];
 
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
 
 $sql = "INSERT INTO ce_author_message (ce_id,author_id,ce_article,ce_message) VALUES ({$ceId},{$authorId},'{$file}','{$authorMessage}')";
 $resultFileUpload = mysqli_query($connection,$sql);
 
 if($resultFileUpload) {
	echo "Author is notified & File is attached successfully!!!"; 
 } else {
	echo "Something went wrong!!!"; 
 }
?>