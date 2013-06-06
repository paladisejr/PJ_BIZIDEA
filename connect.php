<?php
$host="localhost";
$user="root";
$pass="password";
$dbname="test";
$connect=mysql_connect($host,$user,$pass);
mysql_select_db($dbname) ;
mysql_query("SET NAMES utf8",$connect);
if(!$connect) {
echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้".mysql_error();
die();
}
?>
