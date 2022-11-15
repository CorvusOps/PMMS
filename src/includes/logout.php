<?php
	//start or resume existing session
    session_start();

	// Unset all of the session variables
	$_SESSION = array();
	
	// destroy all data registered to a session	
	session_destroy();

	/*
	 * Change this pathing when the login client is pushed
	 */
	header("location: ../../index.php");
?>