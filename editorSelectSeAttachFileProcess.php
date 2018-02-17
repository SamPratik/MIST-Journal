<?php
	include_once("dbConnector.php");
?>

<?php
	$selectLastId = "SELECT id FROM editor_send_article_to_se ORDER BY id DESC LIMIT 1";
	$resultLastId = mysqli_query($connection,$selectLastId);
	
	$rowLastId = mysqli_fetch_assoc($resultLastId);
	$getLastId = $rowLastId["id"];
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
 
 $sql="UPDATE editor_send_article_to_se SET article='{$file}' WHERE id={$getLastId}";
 $resultFileUpload = mysqli_query($connection,$sql); 
 
 if($resultFileUpload) {
	echo "File is attached successfully!!!"; 
 } else {
	echo "Something went wrong!!!"; 
 }

?>