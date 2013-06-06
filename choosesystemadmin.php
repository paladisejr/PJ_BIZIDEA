<?
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "Product Manager")
	{
		echo "This page for User only!";
		exit();
	}	
	
	mysql_connect("localhost","root","password");
	mysql_select_db("test");
  mysql_query("SET NAMES UTF8");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Choose SystemAdmin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- script.js -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <div id="twoCol">
    <div id="logo">
      <img src="images/logo.png">
    </div>  
    <div id="aside-login">
      <div class="icon-pagelogin">
        <img src="images/icon-choose.png">
        เลือกระบบ
      </div>
      <div class="img-system">
        <a href="weekly.php"><div class="img-system1"> </div></a>  
        <a href="adminpage.php"><div class="img-system2"> </div></a>  
      </div>
    </div>
  </div>
  </body>
</html>