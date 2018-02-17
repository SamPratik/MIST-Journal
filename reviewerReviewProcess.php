<?php include_once("dbConnector.php"); ?>

<?php
	
	$rating = $_POST["rating"];
	$cnc = $_POST["cnc"];
	$figure = $_POST["figure"];
	$ref = $_POST["ref"];
	$understable = $_POST["understable"];
	$format = $_POST["format"];
	$comment = $_POST["comment"];
	$rId = $_POST["rId"];
	$authorId = $_POST["authorId"];
?>

<?php //echo $rating." ".$cnc." ".$figure." ".$ref." ".$understable." ".$format." ".$comment." ".$rId." ".$authorId." "."success"; ?>

<?php
	$sql = "UPDATE se_select_reviewer SET review_comment='{$comment}',rating='{$rating}',figure='{$figure}',cnc='{$cnc}',ref='{$ref}',understable='{$understable}',format='{$format}' WHERE r_id={$rId} AND author_id={$authorId}";
	
	$result = mysqli_query($connection,$sql);
	if($result) {
		echo "success";	
	} else {
		echo "failed";	
	}
?>