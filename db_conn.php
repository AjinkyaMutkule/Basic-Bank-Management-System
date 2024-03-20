<?php


	$conn = mysqli_connect('localhost','root','','ajinkya');

	if(!$conn){
		die("Could not connect to the database - Error:  ".mysqli_connect_error());
	}

?>