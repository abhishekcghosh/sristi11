<?php

	if(!isset($_GET['q'])) { header('location: index.php'); exit(); }
	
	$qstring=trim($_GET['q']);
	
	if($qstring=='') { header('location: index.php'); exit(); }
	
	function sanitizeURLEncoding($srcText)
	{
		//self-manipulation
		$srcText=str_replace('%','%25',$srcText);
		//really unsafe
		$srcText=str_replace('$','%24',$srcText);
		$srcText=str_replace('&','%26',$srcText);
		$srcText=str_replace('+','%2B',$srcText);
		$srcText=str_replace(',','%2C',$srcText);
		$srcText=str_replace('/','%2F',$srcText);
		$srcText=str_replace(':','%3A',$srcText);
		$srcText=str_replace(';','%3B',$srcText);
		$srcText=str_replace('=','%3D',$srcText);
		$srcText=str_replace('?','%3F',$srcText);
		$srcText=str_replace('@','%40',$srcText);
		//possibly unsafe
		$srcText=str_replace(' ','%20',$srcText);
		$srcText=str_replace('"','%22',$srcText);
		$srcText=str_replace('<','%3C',$srcText);
		$srcText=str_replace('>','%3E',$srcText);
		$srcText=str_replace('#','%23',$srcText);
		$srcText=str_replace('{','%7B',$srcText);
		$srcText=str_replace('}','%7D',$srcText);
		$srcText=str_replace('|','%7C',$srcText);
		$srcText=str_replace('\\','%5C',$srcText);
		$srcText=str_replace('^','%5E',$srcText);
		$srcText=str_replace('~','%7E',$srcText);
		$srcText=str_replace('[','%5B',$srcText);
		$srcText=str_replace(']','%5D',$srcText);
		$srcText=str_replace('`','%60',$srcText);
		return $srcText;
	}

	$qstrStz=sanitizeURLEncoding($qstring);
	
	header('location: http://www.google.com/search?hl=en&safe=off&q=site%3Awww.sristi.org.in+' . $qstrStz); 
	
	exit();
	
?>
