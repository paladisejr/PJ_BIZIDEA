<?php
    if ( empty($_SESSION) ) 
    {
        session_start();
    }

	mysql_connect("localhost","root","password");
	mysql_select_db("test");
    mysql_query("SET NAMES UTF8");
    if( ! empty($_SESSION['UserID']) )
    {
    	$user_id = $_SESSION['UserID'];
    }
    else
    {
    	$user_id = '';
    }
	$strSQL = "SELECT * FROM  `member` WHERE UserID = '".$user_id."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
