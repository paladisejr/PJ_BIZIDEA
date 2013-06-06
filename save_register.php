<?php
	mysql_connect("localhost","root","password");
	mysql_select_db("test");
	mysql_query("SET NAMES UTF8");
	
	if(trim($_POST["txtEmail"]) == "")
	{
		echo "Please input Email!";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}	
	
	$strSQL = "SELECT * FROM member WHERE Email = '".trim($_POST['txtEmail'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO member (Email,Password,Name,Status,filename)
			 VALUES ('".$_POST["txtEmail"]."', '".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["ddlStatus"]."','". $_FILES['pic']['name']."')";
			 
		$objQuery = mysql_query($strSQL);
		move_uploaded_file($_FILES["pic"]["tmp_name"],"images/member/".$_FILES["pic"]["name"]);
		
		echo "<script language=\"JavaScript\">";
		echo "window.location='index.php?ac=success'";
		echo "</script>";
		
	}

	mysql_close();
?>