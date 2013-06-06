<?php
	header("content-type: text/html; charset=utf-8");
	$host ="localhost";
	$user ="root";
	$password = "password";
	$dbname="test";

	function setthai(){
	mysql_query("SET character_set_results=utf8"); 
	mysql_query("SET collation_connection=utf8_general_ci"); 
	mysql_query("SET NAMES 'utf8'");
	}
	
	
	
	//$date_cut = str_replace('/','-',$_POST["textdate1"]);
	$date_cut = explode('/',$_POST["textdate1"]);
	$date_true1 =  $date_cut[2].'-'.$date_cut[0].'-'.$date_cut[1];
	
	
	$UserId = $_POST["UserId"];
	$subject = $_POST["textsubject1"];
	$text1 = $_POST["text1"];
	$location = $_POST["textlocation"];
	$vehicle = $_POST["select"];
	$charges = $_POST["textchar"];
	$way = $_POST["textway"];
	$detail = $_POST["textdetail1"];
	$note = $_POST["textnote1"];
	$total = $_POST["texttotal1"];
	//$attach = $_POST[" "];
	//$status = $_POST[" "];
	
	
	mysql_connect($host,$user,$password)or die ("ติดต่อ Host ไม่ได้");
	mysql_select_db($dbname)or die("ติดต่อฐานข้อมูลไม่ได้");
	$sql="INSERT INTO data(UserId,date_time,subject,text1,location,vehicle,charges,way,detail,note,total)
      VALUES($UserId,'$date_true1','$subject','$text1','$location','$vehicle',$charges,$way,'$detail','$note',$total)";
	
	setthai();

	mysql_query($sql);
	echo "<script language=\"JavaScript\">";
	echo "window.location='userpage.php?ac=success'";
	echo "</script>";
	mysql_close();
