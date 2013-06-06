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
	$date_cut = explode('/',$_POST["textdate2"]);
	$date_true =  $date_cut[2].'-'.$date_cut[0].'-'.$date_cut[1];

	$UserId = $_POST["UserId"];
   	$subject = $_POST["textsubject2"];
	$detail = $_POST["textdetail2"];
	$note = $_POST["textnote2"];
	$total = $_POST["texttotal2"];
	//$attach =
	//$status = 
	
	mysql_connect($host,$user,$password)or die ("ติดต่อ Host ไม่ได้");
	mysql_select_db($dbname)or die("ติดต่อฐานข้อมูลไม่ได้");
	
	$sql="INSERT INTO data2(UserId,date_time,subject,detail,note,total)
      VALUES($UserId,'$date_true','$subject','$detail','$note',$total)";
	
	setthai();

	mysql_query($sql);
	echo "<script language=\"JavaScript\">";
	echo "window.location='userpage.php?ac=success'";
	echo "</script>";
	
	mysql_close();



?>
