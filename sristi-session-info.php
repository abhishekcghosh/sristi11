<?php
	session_start();														//Starting Session to obtain data
	if(isset($_SESSION['sristi11_username']))
	{
		//Logged In User's Data
		$li_user=$_SESSION['sristi11_username'];							//Email ID
		$li_mid=$_SESSION['sristi11_mid'];								//Internal Member ID
		$li_privilege=strtoupper($_SESSION['sristi11_privilege']);		//User Privilege Level
		$li_fullname=$_SESSION['sristi11_fullname'];
	}
	else
	{
		//Guest User (No Login)
		$li_user='Guest';													//Guest Name
		$li_mid=0;															//None
		$li_privilege='GUEST';												//Guest User Privilege
		$li_fullname='Guest';
	}
?>
