<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$selectLastId = "SELECT id FROM author_index_article ORDER BY id DESC LIMIT 1";
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
 
 
 $sessionLoginId = $_SESSION["authorLoginId"];
 
 //-------PC er main location theke upload folder e move hocche file upload er pore------
 move_uploaded_file($file_loc,$folder.$file);
 
 $selectAuthorName = "SELECT fn,ln FROM author WHERE id={$sessionLoginId}";
 
 $resultAuthorName = mysqli_query($connection,$selectAuthorName);
 
 $rowAuthorName = mysqli_fetch_assoc($resultAuthorName);
 $authorFnSubmitArticle = $rowAuthorName["fn"];
 $authorLnSubmitArticle = $rowAuthorName["ln"];
 
 $authorFullName = $authorFnSubmitArticle. " " . $authorLnSubmitArticle;
 
 $sql="INSERT INTO author_submitted_article (index_article_id,author_id,author_name,article) VALUES";
 $sql .= " ({$getLastId},{$sessionLoginId},'{$authorFullName}','{$file}')";
 $resultFileUpload = mysqli_query($connection,$sql); 
 
 if($resultFileUpload) {
	echo "File is uploaded successfully!!!"; 
 } else {
	echo "Something went wrong!!!"; 
 }

?>