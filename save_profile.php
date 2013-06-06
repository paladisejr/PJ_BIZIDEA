<?php
	
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	mysql_connect("localhost","root","password");
	mysql_select_db("test");
	mysql_query("SET NAMES UTF8");
	
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	$strSQL = "UPDATE member SET Password = '".trim($_POST['txtPassword'])."' 
	,Name = '".trim($_POST['txtName'])."' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysql_query($strSQL);
	
	//echo "Save Completed!<br>";		
	
	if($_SESSION["Status"] == "ADMIN")
	{
		/////echo "<br> Go to <a href='admin_page.php'>Admin page</a>";
		echo "<script language=\"JavaScript\">";
		echo "window.location='userpage.php?af=success'";
		echo "</script>";
	}
	else
	{
		
		echo "<script language=\"JavaScript\">";
		echo "window.location='adminpage.php?af=success'";
		echo "</script>";
	}
	
	mysql_close();
?>