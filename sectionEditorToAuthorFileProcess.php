<?php
	include_once("dbConnector.php");
?>

<?php

	$authorId = $_POST["authorId"];
	$seId = $_POST["seId"];
	$message = $_POST["message"];

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
 
 $sql="INSERT INTO `mist_journal_unicode`.`se_author_message` (`id`, `se_id`, `author_id`, `se_message`, `author_message`, `se_article`, `author_article`) VALUES (NULL, '{$seId}', '{$authorId}', '{$message}', NULL, '{$file}', NULL)";
 $resultFileUpload = mysqli_query($connection,$sql); 
 
 if($resultFileUpload) {
	echo "Notified & File attached successfully!!!"; 
 } else {
	echo "Something went wrong!!!"; 
 }

?>