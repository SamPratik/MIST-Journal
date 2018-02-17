<?php include_once("dbConnector.php"); ?>

<?php  
	$editorId = $_POST["editorId"];
	$authorId = $_POST["authorId"];
	$seId = $_POST["seId"];
	$message = $_POST["message"];
	
	//echo $authorId." ".$pId." ".$seId." ".$message." ".$_FILES["myFile"]["name"];
?>

<?php
 //----- file er name ta pacchi-------
 $file = $_FILES['myFile']['name'];
 
 //---- file er path ta pacchi--------
 $file_loc = $_FILES['myFile']['tmp_name'];
 
 //----file er size ta pacchi-------
 $file_size = $_FILES['myFile']['size'];
 
 //----ki dhoroner file sheta pabo-----
 $file_type = $_FILES['myFile']['type'];
 
 //----jei directory te file gula save thakbe upload er pore----
 $folder="uploads/";
 
 //-------PC er main location theke upload folder e move hocche file upload er pore------
 move_uploaded_file($file_loc,$folder.$file);
 
 $sql = "INSERT INTO se_send_article_to_editor (se_id,editor_id,author_id,article) VALUES ({$seId},{$editorId},{$authorId},'{$file}')";
 $resultFileUpload = mysqli_query($connection,$sql);
 
 if($resultFileUpload) {
	echo "File is attached successfully!!!"; 
 } else {
	echo "Something went wrong!!!"; 
 }
?>