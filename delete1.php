<?php

$delete_id = $_GET['delete_id'];//รับค่าGET ที่ส่งมาจากไฟล์ show
require_once("connect.php");
$sql= "DELETE FROM data WHERE Id ='$delete_id'";//คำสั่งลบข้อมูล
$result = mysql_query($sql);

if($result){
    echo "<script language=\"JavaScript\">";
	echo "window.location='userpage.php?ab=success'";
	echo "</script>";
} else {
    echo"<script type='text/javascript'>alert('Delete unsuccessful.');window.history.go(-1);</script>";
}    

?>