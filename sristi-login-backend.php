<?php

	require_once('sristi-config.php');
	require_once('sristi-sql-connect.php'); 

	//Variables assigned
	$emailid=addslashes(strip_tags(trim($_POST['username'])));
	$password=addslashes(strip_tags(trim($_POST['password'])));
	$md5password=md5($password);
	
	//error string parts (flags)
	$flag_incomplete=0;
	$flag_wrong=0;
	$flag_sqlfail=0;

	//check if all data present
	if($emailid=='' || $password=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}

	//email ID validation + password match, then login
	if($err_occured!=1)
	{	
		
		$tbl_name=__SQL_TABLE_PREFIX__ . "registration";
		$sql_query="SELECT COUNT(*) AS existing FROM $tbl_name WHERE emailid='$emailid' AND password='$md5password' AND (privilege='GENERAL' OR privilege='ADMIN')";
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
			session_start();
			$_SESSION['sristi11_username']=strtolower($emailid);
			$tbl_name=__SQL_TABLE_PREFIX__ . "registration";
			$sql_query="SELECT mid,privilege,fullname FROM $tbl_name WHERE emailid='$emailid'";
			$query_result=mysql_query($sql_query);
			$result_rows=mysql_fetch_array($query_result);
			$_SESSION['sristi11_mid']=$result_rows['mid'];
			$_SESSION['sristi11_privilege']=$result_rows['privilege'];
			$_SESSION['sristi11_fullname']=$result_rows['fullname'];
		}
		
		mysql_close($con);
	}
	

	//feedback to user
	$err_string="location: sristi-login.php?r=";
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
	else
	{
		$err_string=$err_string . "success";
	}
	header($err_string . "#fdbck");

?>