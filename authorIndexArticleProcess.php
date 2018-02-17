<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?> 
 
<?php  

	$authorAbstract = mysqli_real_escape_string($connection,$_POST["authorAbstract"]);
	$authorScope = $_POST["authorScope"];
	$authorLoginId = $_POST["authorLoginId"];
	$authorArticleTitle = $_POST["authorArticleTitle"];
	$authorKeywords = $_POST["authorKeywords"];
	$authorType = $_POST["authorType"];
	$authorIndexErrArr = array();
	$flag = 1;
?>

<?php
	  //---------Article Abstract Validation Check--------------
	  if (empty($_POST["authorAbstract"])) {
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
	  
	  foreach($authorIndexErrArr as $each) {
		  if($each == "") {
		  	  $flag = 0;
			  continue;
		  } else {
			  $flag = 1;
			  break;	  
		  }
	  }
?>

<?php
	if($flag == 1) {
		echo json_encode($authorIndexErrArr);
	}
?>

<?php
		//------sending atuhor indexing informations to article--------
		
		if($flag == 0) {	
		
			$insert = "INSERT INTO `mist_journal_unicode`.`author_index_article` (`id`, `author_id`, `title`, `abstract`, `type`, `scope`, `keywords`) VALUES (NULL, {$authorLoginId}, '{$authorArticleTitle}', '{$authorAbstract}', '{$authorType}', '{$authorScope}', '{$authorKeywords}')";
			
			$result = mysqli_query($connection,$insert);
			if($result) {
				echo "Article has been indexed successfully";
			} else {
				echo "something went wrong!";	
			}
			
		}
?>

<?php
	
	//------test_input() function------
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>