<?php  

	$dbHost = "localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "mist_journal_unicode";
	
	$connection = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

?>

<?php
	$rId = $_POST["rId"];
	$authorId = $_POST["authorId"];
	$rArr = array();
?>

<?php
	$sql = "SELECT review_comment,rating,cnc,figure,ref,understable,format FROM se_select_reviewer WHERE author_id={$authorId} AND r_id={$rId}";
	$result = mysqli_query($connection,$sql);
?>

<?php

	 	$row = mysqli_fetch_assoc($result);
		
		$rArr[0] = $row["review_comment"];	
		//$rArr[1] = $row["rating"];
		if($row["rating"] == "nc") {
			$rArr[1] = "Need Changes";
		} else {
			$rArr[1] = $row["rating"];	
		}
		$rArr[2] = "<li>".$row["cnc"]."</li>";
		$rArr[3] = "<li>".$row["figure"]."</li>";
		$rArr[4] = "<li>".$row["ref"]."</li>";
		$rArr[5] = "<li>".$row["understable"]."</li>";
		$rArr[6] = "<li>".$row["format"]."</li>";
		
		echo json_encode($rArr);
		
?>

