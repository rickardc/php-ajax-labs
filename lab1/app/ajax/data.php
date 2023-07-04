<!--file data.php -->
<?php

	// get name and password passed from client
	$name = $_GET['namefield'];
	$pwd = $_GET['pwdfield'];
	// sleep for 5 seconds to slow server response down
	sleep(2);
	// write back the password concatenated to end of the name
	ECHO ("User name: ".$name."<br>".
		"Password : ".$pwd."<br>".
		"Time : ".date("H:i:s"));
?>
