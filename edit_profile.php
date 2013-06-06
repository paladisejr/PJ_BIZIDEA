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
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Base Web Application</title>
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
     <div id="aside-register">
      <div class="icon-pageregister">
        <img src="images/icon.png">
      Edit Profile!
      </div>
			
			 <form class="form-horizontal" method="post" action="save_profile.php">
      
			
			  
			  <table width="400" border="1" style="width: 400px">
			    <tbody>
			      <tr>
			        <td width="125"> &nbsp;UserID</td>
			        <td width="180">
			          <?php echo $objResult["UserID"];?>
			        </td>
			      </tr>
			      <tr>
			        <td> &nbsp;Email</td>
			        <td>
			          <?php echo $objResult["Email"];?>
			        </td>
			      </tr>
			      <tr>
			        <td> &nbsp;Password</td>
			        <td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["Password"];?>">
			        </td>
			      </tr>
			      <tr>
			        <td> &nbsp;Confirm Password</td>
			        <td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["Password"];?>">
			        </td>
			      </tr>
			      <tr>
			        <td>&nbsp;Name</td>
			        <td><input name="txtName" type="text" id="txtName" value="<?php echo $objResult["Name"];?>"></td>
			      </tr>
			      <tr>
			        <td> &nbsp;Status</td>
			        <td>
			          <?php echo $objResult["Status"];?>
			        </td>
			      </tr>
			    </tbody>
			  </table>
			  <br>
			  <input type="submit" name="Submit" value="Save">
			</form>
			</div>
      
        </div>
</body>
</html>

