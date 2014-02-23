<?php

	require_once('sristi-config.php');
	require_once('sristi-sql-connect.php'); 

	//Variables assigned
	$emailid=addslashes(strip_tags(trim($_POST['username'])));
	$password=substr(md5(rand(0,1000000)),1,10);
	$md5password=md5($password);
	
	//error string parts (flags)
	$flag_wrong=0;
	$flag_sqlfail=0;

	//email ID validation + password match, then login
	if($err_occured!=1)
	{	
		
		$tbl_name=__SQL_TABLE_PREFIX__ . "registration";
		$sql_query="SELECT COUNT(*) AS existing FROM $tbl_name WHERE emailid='$emailid'";
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
			$tbl_name=__SQL_TABLE_PREFIX__ . "registration";
			$sql_query="UPDATE $tbl_name SET password='$md5password' WHERE emailid='$emailid'";
			$query_result=mysql_query($sql_query);
			if(!$query_result)
			{
				$err_occured=1;
				$flag_sqlfail=1;
			}
			else
			{
				$email_msg='Your newly generated password is ' . $password . '. You may login using this password now.';
				mail($emailid,'Sristi \'11 - Account Password Reset Request',$email_msg,'From: noreply@sristi.org.in');
			}
		}
		
		mysql_close($con);
	}
	

	//feedback to user
	$err_string="location: sristi-forgotten-password.php?r=";
	if($flag_confail==1 || $flag_sqlfail==1)
	{
		$err_string=$err_string . "sqlerror";
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