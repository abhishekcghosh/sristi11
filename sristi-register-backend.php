<?php

	require_once('sristi-config.php');
	require_once('sristi-sql-connect.php'); 

	//set default
	$txtcollege="";
	$chkpicknplace=1; 
	$chkamphibian=1;
	$chkvigilance=1; 
	$chkcoding=1; 
	$chkbplan=1;
	$chkmockparliament=1;
	$chkdebate=1;
	$chkflipflop=1;
	$chkcstrike=1;
	$chknfsmw=1;
	$chkfifa=1;
	$chkaoe=1;
	$chkjunkyard=1;
	$chkcad=1;
	$chkquiz=1;
	$chkaeromod=1;
	$chkautorobo=1;
	$chkhacking=1;
	$chkwebdesign=1;
	
	//get variables
	$emailid=strtolower(addslashes(strip_tags($_POST['email'])));
	$fullname=addslashes(strip_tags($_POST['name']));
	$college=addslashes(strip_tags($_POST['college']));
	if(isset($_POST['txtcollege'])) { $txtcollege=addslashes(strip_tags($_POST['txtcollege'])); }
	$city=addslashes(strip_tags($_POST['city']));
	$year=addslashes(strip_tags($_POST['year']));
	$address=addslashes(strip_tags($_POST['address']));
	$phone=addslashes(strip_tags($_POST['phone']));
	if(isset($_POST['chkpicknplace'])) { $chkpicknplace=$_POST['chkpicknplace']; }
	if(isset($_POST['chkamphibian'])) { $chkamphibian=$_POST['chkamphibian']; }
	if(isset($_POST['chkvigilance'])) { $chkvigilance=$_POST['chkvigilance']; }
	if(isset($_POST['chkcoding'])) { $chkcoding=$_POST['chkcoding']; }
	if(isset($_POST['chkbplan'])) { $chkbplan=$_POST['chkbplan']; }
	if(isset($_POST['chkmockparliament'])) { $chkmockparliament=$_POST['chkmockparliament']; }
	if(isset($_POST['chkdebate'])) { $chkdebate=$_POST['chkdebate']; }
	if(isset($_POST['chkflipflop'])) { $chkdebate=$_POST['chkflipflop']; }
	if(isset($_POST['chkcstrike'])) { $chkcstrike=$_POST['chkcstrike']; }
	if(isset($_POST['chknfsmw'])) { $chknfsmw=$_POST['chknfsmw']; }
	if(isset($_POST['chkfifa'])) { $chkfifa=$_POST['chkfifa']; }
	if(isset($_POST['chkaoe'])) { $chkaoe=$_POST['chkaoe']; }
	if(isset($_POST['chkjunkyard'])) { $chkjunkyard=$_POST['chkjunkyard']; }
	if(isset($_POST['chkcad'])) { $chkcad=$_POST['chkcad']; }
	if(isset($_POST['chkquiz'])) { $chkquiz=$_POST['chkquiz']; }
	if(isset($_POST['chkaeromod'])) { $chkaeromod=$_POST['chkaeromod']; }
	if(isset($_POST['chkautorobo'])) { $chkautorobo=$_POST['chkautorobo']; }
	if(isset($_POST['chkhacking'])) { $chkhacking=$_POST['chkhacking']; }
	if(isset($_POST['chkwebdesign'])) { $chkwebdesign=$_POST['chkwebdesign']; }

	//create interest string and survey parameters
	$istring=""; 
	if($chkpicknplace=="on") {  $istring=$istring . "Pick-n-Place, " ; }
	if($chkamphibian=="on") {  $istring=$istring . "Amphibian, " ; }
	if($chkvigilance=="on") {  $istring=$istring . "Vigilance, "; }
	if($chkcoding=="on") {  $istring=$istring . "Coding, " ; }
	if($chkbplan=="on") {  $istring=$istring . "B-Plan, "; }
	if($chkmockparliament=="on") {  $istring=$istring . "Mock-Parliament, "; }
	if($chkdebate=="on") {  $istring=$istring . "Debate, "; }
	if($chkflipflop=="on") {  $istring=$istring . "Flip-flop, "; }
	if($chkcstrike=="on") {  $istring=$istring . "Counter-Strike 1.6, "; }
	if($chknfsmw=="on") {  $istring=$istring . "NFS Most Wanted, "; }
	if($chkfifa=="on") {  $istring=$istring . "FIFA 08, "; }
	if($chkaoe=="on") {  $istring=$istring . "Age Of Empires II, "; }
	if($chkjunkyard=="on") {  $istring=$istring . "Junkyard Wars, "; }
	if($chkcad=="on") {  $istring=$istring . "CADathlon, "; }
	if($chkquiz=="on") {  $istring=$istring . "Tech Quiz, "; }
	if($chkaeromod=="on") {  $istring=$istring . "Workshop_AeroModelling, "; }
	if($chkautorobo=="on") {  $istring=$istring . "Workshop_AutoRobo, "; }
	if($chkhacking=="on") {  $istring=$istring . "Workshop_Hacking, "; }
	if($chkwebdesign=="on") {  $istring=$istring . "Workshop_Webdesign, "; }
	
	//college setting
	if($txtcollege!="") { $collegefinal=$txtcollege; } else { $collegefinal=$college; }
	
	$password=substr(md5(rand(0,1000000)),1,10);
	//$password='password';
	$md5password=md5($password);
	
	//error string flags
	$flag_incomplete=0;
	$flag_mismatch=0;
	$flag_exists_emailid=0;
	$flag_exists_collegeroll=0;
	$flag_sqlfail=0;
	$flag_success=0;
	$flag_emailid=0;
	
	//check if all data present
	if($emailid=='' || $fullname=='' || $college=='' || $phone=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}

	//validate legal emailid
	if (!filter_var($emailid, FILTER_VALIDATE_EMAIL))
	{
		$flag_emailid=1;
		$err_occured=1;
	}

	//emailID/collegeRoll existence check, then entry
	if($err_occured!=1)
	{
	
		$tbl_name=__SQL_TABLE_PREFIX__ . "registration";
		$sql_query="SELECT COUNT(*) AS existing FROM $tbl_name WHERE emailid='$emailid'";
		$query_result=mysql_query($sql_query);
		$result_rows=mysql_fetch_array($query_result);
		$existing_count=$result_rows['existing'];
		if($existing_count!=0) 
		{
			$flag_exists_emailid=1;
		}
		else
		{
			//put info
			$tbl_name=__SQL_TABLE_PREFIX__ . "registration"; 
			$sql_query_2="INSERT INTO $tbl_name(emailid,password,privilege,fullname,college,year,city,address,phone,interests) VALUES('$emailid','$md5password','GENERAL','$fullname','$collegefinal','$year','$city','$address','$phone','$istring')";
			$query_result_2=mysql_query($sql_query_2);
			if(!$query_result_2)
			{
				$flag_sqlfail=1;
			}
			else
			{
				{
					$flag_success=1;
					//survey sql
					$email_msg='You have been successfully registered on the Sristi \'11 website. Your account password is ' . $password . '. You may login now.';
					mail($emailid,'Sristi \'11 - Successful Registration and Account Password',$email_msg,'From: noreply@sristi.org.in');
				}
			}
		}
	}		
		mysql_close($con);

//feedback to user	
	$err_string="location:sristi-register.php?r=";
	if($flag_confail==1 || $flag_sqlfail==1)
	{
		$err_string=$err_string . "sqlerror";
	}
	else if($flag_incomplete==1)
	{
		$err_string=$err_string . "incomplete";
	}
	else if($flag_emailid==1)
	{
		$err_string=$err_string . "invalidemail";
	}
	else if($flag_exists_emailid==1)
	{
		$err_string=$err_string . "emailexists";
	}
	else
	{
		$err_string=$err_string . "success";
	}
	header($err_string . "#fdbck");
?>