<?php
	
	session_start();									//start session to access session info
	unset($_SESSION['srisri11_username']);				//delete logged in user's Email ID info
	unset($_SESSION['sristi11_mid']);				//delete logged in user's Email ID info
	unset($_SESSION['sristi11_privilege']);				//delete logged in user's privilege info
	unset($_SESSION['sristi11_fullname']);				//delete logged in user's Email ID info
	
	session_destroy();									//destroy session completely
	header("location: sristi-home.php");				//go to home page
	
?>
