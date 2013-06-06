<?php
	session_start();
	
	mysql_connect("localhost","root","password");
	mysql_select_db("test");
	mysql_query("SET NAMES UTF8");
	$strSQL = "SELECT * FROM  `member` WHERE Email = '".mysql_real_escape_string($_POST['txtEmail'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "<script language=\"JavaScript\">";
            echo "alert('Email and Password Incorrect!');window.location='index.php';";
            echo "</script>";
			
			session_destroy();
			
			
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "Product Manager")
			{
				header("location:choosesystemadmin.php");
			}
			else
			{
				header("location:choosesystem.php");
			}
	}
	mysql_close();
?>
