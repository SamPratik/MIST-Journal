<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	/*$selectLastId = "SELECT id FROM se_select_reviewer ORDER BY id DESC LIMIT 1";
	$resultLastId = mysqli_query($connection,$selectLastId);
	
	$rowLastId = mysqli_fetch_assoc($resultLastId);
	$getLastId = $rowLastId["id"];*/
?>

<?php
	$getLastSpecialId = "SELECT special_id FROM se_select_reviewer ORDER BY id DESC LIMIT 1";
	$resultLastSpecialId = mysqli_query($connection,$getLastSpecialId);
	
	$rowLastSpecialId = mysqli_fetch_assoc($resultLastSpecialId);
	$specialId = $rowLastSpecialId["special_id"];
?>

<?php
	/*$insertSpecialId = "INSERT INTO se_select_reviewer (special_id) VALUES ({$specialId})";
	$resultInsertSpecialId = mysqli_query($connection,$insertSpecialId);*/
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
 
 
 $sql="UPDATE se_select_reviewer SET submitted_article='{$file}' WHERE special_id={$specialId}";
 
 $resultFileUpload = mysqli_query($connection,$sql); 
 
 if($resultFileUpload) {
	echo "success"; 
 }

?>