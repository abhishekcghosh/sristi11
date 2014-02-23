<?php

	require_once('sristi-config.php');
	require_once('sristi-sql-connect.php'); 
	require_once('sristi-session-info.php');
	if($li_privilege=='GUEST') { header("location: sristi-login.php"); }
	
	//Variables assigned
	$currentpass=addslashes(strip_tags(trim($_POST['currentpassword'])));
	$newpass=addslashes(strip_tags(trim($_POST['newpassword'])));
	$retypepass=addslashes(strip_tags(trim($_POST['retypenewpassword'])));
	$md5old=md5($currentpass);
	$md5new=md5($newpass);
	
	//error string parts (flags)
	$flag_incomplete=0;
	$flag_mismatch=0;
	$flag_sqlfail=0;
	$flag_wrong=0;

	//check if all data present
	if($currentpass=='' || $newpass=='' || $retypepass=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	
	//check for mismatch
	if($newpass!=$retypepass)
	{
		$flag_mismatch=1;
		$err_occured=1;
	}

	//email ID validation + password match, then login
	if($err_occured!=1)
	{	
		
		$tbl_name=__SQL_TABLE_PREFIX__ . "registration";
		$sql_query="SELECT COUNT(*) AS existing FROM $tbl_name WHERE emailid='$li_user' AND password='$md5old' AND (privilege='GENERAL' OR privilege='ADMIN')";
		$query_result=mysql_query($sql_query);
		$result_rows=mysql_fetch_array($query_result);
		$existing_count=$result_rows['existing'];

		if($existing_count==0) 
		{
			$flag_wrong=1;
			$err_occured=1;
		}
		else
		{
			$sql_query="UPDATE $tbl_name SET password='$md5new' WHERE emailid='$li_user'";
			$query_result=mysql_query($sql_query);
			if(!$query_result) 
			{
				$flag_sqlfail=1;
				$err_occured=1;
			}
		}
		
		
		
		mysql_close($con);
	}
	

	//feedback to user
	$err_string="location: sristi-user-changepass.php?r=";
	if($flag_confail==1 || $flag_sqlfail==1)
	{
		$err_string=$err_string . "sqlerror";
	}
	else if($flag_incomplete==1)
	{
		$err_string=$err_string . "incomplete";
	}
	else if($flag_wrong==1)
	{
		$err_string=$err_string . "wrong";
	}
	else if($flag_mismatch==1)
	{
		$err_string=$err_string . "mismatch";
	}
	else
	{
		$err_string=$err_string . "success";
	}
	header($err_string . "#fdbck");

?>