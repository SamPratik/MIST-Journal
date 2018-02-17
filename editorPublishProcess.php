<?php include_once("dbConnector.php"); ?>

<?php  
	$authorId = $_POST["authorId"];
	$volume = $_POST["volume"];
	$issue = $_POST["issue"];
	$order = $_POST["order"];
	
	//echo $authorId." ".$volume." ".$issue." ".$order." ".$_FILES["myFile"]["name"];
	
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
 
?>

<?php
	$publish = "INSERT INTO `mist_journal_unicode`.`publish_article` (`id`, `author_id`, `volume`, `issue`, `order`, `article`) VALUES (NULL, '{$authorId}', '{$volume}', '{$issue}', '{$order}', '{$file}')";
	$resultPublish = mysqli_query($connection,$publish);
	
	if($resultPublish) {
		echo "Article published!!!";	
	} else {
		echo "Something went wrong!!!";	
	}
?>