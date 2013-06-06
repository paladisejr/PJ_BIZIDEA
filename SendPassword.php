<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
mysql_connect("localhost","root","password");
mysql_select_db("test");
$strSQL = "SELECT * FROM member WHERE Email = '".trim($_POST['txtEmail'])."'
OR Email = '".trim($_POST['txtEmail'])."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

if(!$objResult)
{
	echo "<script language=\"JavaScript\">";
	echo "window.location='index.php';";
	echo "</script>";
}
else
{
echo "Your password send successful.<br>Send to mail : ".$objResult["Email"];    
 
$strTo = $objResult["Email"];
$strSubject = "Your Account information username and password.";
$strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
$strHeader .= "From: Bizidea@hotmail.co.th";
$strMessage = "";
$strMessage .= "Welcome : ".$objResult["Name"]."<br>";
$strMessage .= "Password : ".$objResult["Password"]."<br>";
$strMessage .= "=================================<br>";
$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);
 
}
mysql_close();
?>

</body>
</html>
