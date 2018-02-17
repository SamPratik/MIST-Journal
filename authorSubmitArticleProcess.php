<?php
	include_once("dbConnector.php");
?>


<?php


	/*--------------------------------------------------------------------------------------

	--------------------------Article INDEXING INFO Variables-------------------------------
	
	--------------------------------------------------------------------------------------*/
	
	if(empty($_POST["authorScope"])) {
		$_POST["authorScope"] = "";	
	}
	
	else {
		$authorAbstract = mysqli_real_escape_string($connection,$_POST["authorArticleAbstract"]);
		$authorScope = $_POST["authorScope"];
		$authorArticleTitle = $_POST["authorArticleTitle"];
		$authorKeywords = $_POST["authorKeywords"];
		$authorType = $_POST["authorType"];
		$authorId = $_POST["authorId"];
		$authorIndexErrArr = array();
		$flag = 1;
	}
	
	
	//echo $authorAbstract." ".$authorScope." ".$authorArticleTitle;

?>



<?php


	/*--------------------------------------------------------------------------------------

	--------------------------Article INDEXING INFO Validations-----------------------------
	
	--------------------------------------------------------------------------------------*/
	
	
	  //---------Article Abstract Validation Check--------------
	  if (empty($_POST["authorArticleAbstract"])) {
		$authorIndexErrArr[0] = "* Article abstract is required";
	  } else {
		//$authorAbstract = test_input($_POST["authorAbstract"]);
		$authorIndexErrArr[0] = "";	
	  }
	  
	  //---------Scope Validation Check--------------
	  if (empty($_POST["authorScope"])) {
		$authorIndexErrArr[1] = "* Please select a scope for the article";
	  } else {
		$authorScope = test_input($_POST["authorScope"]);
		$authorIndexErrArr[1] = "";	
	  }
	  
	  //---------Article Title Validation Check--------------
	  if (empty($_POST["authorArticleTitle"])) {
		$authorIndexErrArr[2] = "* Article Title is required";
	  } else {
		$authorArticleTitle = test_input($_POST["authorArticleTitle"]);
		$authorIndexErrArr[2] = "";	
	  }
	  
	  //---------Article Keywords Validation Check--------------
	  if (empty($_POST["authorKeywords"])) {
		$authorIndexErrArr[3] = "* Article Keywords is required";
	  } else {
		$authorKeywords = test_input($_POST["authorKeywords"]);
		$authorIndexErrArr[3] = "";	
	  }
	  
	  //---------Article Type Validation Check--------------
	  if (empty($_POST["authorType"])) {
		$authorIndexErrArr[4] = "* Article Type is required";
	  } else {
		$authorType = test_input($_POST["authorType"]);
		$authorIndexErrArr[4] = "";	
	  }
	  
	  //------File Validation Check-------------------------
	  if(empty($_FILES)) {
	  	$authorIndexErrArr[5] = "* You have to choose a file";		  
	  } else {
		$authorIndexErrArr[5] = "";  
	  }


?>



<?php



	foreach($authorIndexErrArr as $each) {
		if($each == "") {
		  	$flag = 0;
			continue;
		} else {
			$flag = 1;
			break;	  
		}
	}
	  
	if($flag == 1) {
		echo json_encode($authorIndexErrArr);
		//echo "error";
		exit;
	}


?>



<?php


	/*--------------------------------------------------------------------------------------

	---------------------Inserting Into author_index_article TABLE--------------------------
	
	--------------------------------------------------------------------------------------*/

	
	if($flag == 0) {
	

		$insertIndex = "INSERT INTO author_index_article (author_id,title,abstract,type,scope,keywords) VALUES ({$authorId},'{$authorArticleTitle}','{$authorAbstract}','{$authorType}','{$authorScope}','{$authorKeywords}')";
		
		$resultIndex = mysqli_query($connection,$insertIndex);
		
		if($resultIndex) {
			$indexingError = 0;
		} else {
			$indexingError = 1;	
		}
		
	}
?>




<?php


	/*--------------------------------------------------------------------------------------

	--------------------------Variables Related to Files Info-------------------------------
	
	--------------------------------------------------------------------------------------*/
	
	
	
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
	
	/*------------------------------------------------------------------------
	
	-----------Selecting the id of author_index_article-----------------------
	
	------------------------------------------------------------------------*/
	
	$selectLastId = "SELECT id FROM author_index_article ORDER BY id DESC LIMIT 1 ";
	$resultLastId = mysqli_query($connection,$selectLastId);
	
	$rowLastId = mysqli_fetch_assoc($resultLastId);
	$getLastId = $rowLastId["id"];
?>

<?php


	/*------------------------------------------------------------------------
	
	------Inserting Into author_submitted_article & sending response text------
	
	------------------------------------------------------------------------*/
		
	 if($flag == 0) {
	 
		 if($indexingError == 0) { 	
			 $sql = "INSERT INTO author_submitted_article (index_article_id,author_id,article) VALUES";
			 $sql .= " ({$getLastId},{$authorId},'{$file}')";
			 $resultFileUpload = mysqli_query($connection,$sql); 
		 }
		 
		 if($resultFileUpload && $indexingError == 0) {
			
			echo "success"; 
			
		 } 
		 
		 if(!$resultFileUpload || $indexingError == 1) {
			echo "failed"; 
		 }	
	 
	 }
?>



<?php
	
	
	
	/*------------------------------------------------------------------------
	
	-----------Selecting the id of author_index_article-----------------------
	
	------------------------------------------------------------------------*/
	
	
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

