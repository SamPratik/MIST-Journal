<?php

	$output = "";
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	
	if(empty($firstName)) {
		$output .= "First Name is required<br/>";		
	} if(!empty($firstName)) {
		$output .= "First Name is ". $firstName . "<br/>";	
	}
	
	if(empty($lastName)) {
		$output .= "Last Name is required<br/>";	
	} if(!empty($lastName)) {
		$output .= "Last Name is ". $lastName . "<br/>";	
	}
	
	echo $output;

?>