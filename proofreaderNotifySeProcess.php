<?php
	include_once("dbConnector.php");
?>

<?php
	$pId = $_POST["pId"];
	$seId = $_POST["seId"];
	$authorId = $_POST["authorId"];
	$message = $_POST["message"];
?>

<?php //echo $_POST["ceId"]." ".$_POST["authorId"]." ".$_FILES["authorFile"]["name"]; ?>

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
 
 $sql1 = "INSERT INTO p_send_article_to_se (p_id,se_id,author_id,article) VALUES ({$pId},{$seId},{$authorId},'{$file}')";
 $result1 = mysqli_query($connection,$sql1);
 
 
 if($result1) {
	echo "Section Editor is notified & File is attached successfully!!!"; 
 } else {
	echo "Something went wrong!!!"; 
 }
?>