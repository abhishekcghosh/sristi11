<?php
	require_once('sristi-sql-connect.php');
	//GET MESSAGES
	$tbl_name=__SQL_TABLE_PREFIX__ . "general";
	$sql_query="SELECT attribvalue FROM $tbl_name WHERE attribname='hitcounter'";
	$query_result=mysql_query($sql_query);
	$result_row=mysql_fetch_array($query_result);
	$hits=$result_row['attribvalue']+1;
	$sql_query="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='hitcounter'";
	$query_result=mysql_query($sql_query);
?>
<div id="templatemo_footer">
    Sristi '11. All Rights Reserved.
    &middot;
    <?php echo $hits; ?> reads
    &middot;
    <a href="sristi-ourteam.php">Our Team</a>
    &middot;
    <a href="2010">Sristi 2010</a>
    &middot;
    <a href="http://www.jgec.org" target="_blank">JGEC</a>
    &middot;
    <a href="sristi-cfi.php">CFI</a>
    &middot;
    <a href="sristi-contactus.php">Contact Us</a>
    
</div> 