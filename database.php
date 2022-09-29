<?php
	$mysqli = mysqli_connect("localhost","root","","dbmatricula"); 
	if (!$mysqli)
	{
		die("Connection error: " . mysqli_connect_error());
	}
?>