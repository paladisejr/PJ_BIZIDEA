<?php
	session_start();
	mysql_connect("localhost","root","password");
	mysql_select_db("test");
	mysql_query("SET NAMES UTF8");
	$_GET['id_order'];
	$ac = $_GET['ac'];

 	if($ac == 'confirm'){
		$strSQL = "UPDATE data SET status = '".trim('1')."' WHERE id = '".$_GET['id_order']."' ";
		$objQuery = mysql_query($strSQL);

		echo "<script language=\"JavaScript\">";
		echo "window.location='adminpage.php?ad=success'";
		echo "</script>";

	}else{
		
		$strSQL = "UPDATE data SET status = '".trim('2')."' WHERE id = '".$_GET['id_order']."' ";
		$objQuery = mysql_query($strSQL);

	    echo "<script language=\"JavaScript\">";
		echo "window.location='adminpage.php?ad=success'";
		echo "</script>";
		
	}
?>