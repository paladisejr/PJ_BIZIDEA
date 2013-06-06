<?php
	session_start();
	mysql_connect("localhost","root","password");
	mysql_select_db("test");
	$strSQL = "SELECT * FROM  `member` WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

?>
<!DOCTYPE html>
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

<body>
<table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;Email</td>
        <td width="197"><?php echo $objResult["Email"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?php echo $objResult["Name"];?></td>
      </tr>
    </tbody>
  </table>
  <p>เลือกแบบฟอร์ม</p>
  <div class="btn-group">
  <a class="btn btn-primary" href="#"><i class="icon-pencil icon-white"></i> แบบฟอร์ม</a>
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="form_1.php"><i class="icon-shopping-cart"></i> เบิกค่าอุปกรณ์</a></li>
    <li><a href="form_2.php"><i class="icon-road"></i> ค่าเดินทาง</a></li>
    <li class="divider"></li>
    </ul>
</div>

  <p>&nbsp;</p>
 <table width="500" border="1" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td><strong>date</strong></td>
    <td><strong>subject</strong></td>
    <td><strong>total</strong></td>
  </tr>
<?php
include("connect.php");
$result = mysql_query("SELECT * FROM data order by date DESC limit 8");
// ASC, DESC
while($row = mysql_fetch_array($result))
 {
  echo "<tr>";
    echo"<td>" .$row['date']."</td>";
    echo"<td>" .$row['subject']."</td>";
    echo"<td>" .$row['total']."</td>";
  echo"</tr>";
 }
echo "</table>";
 mysql_close();
?>
  <p>
    <input type="submit" name="back" id="back" value="กลับหน้าหลัก" onClick="window.location='user_page.php'">
  </p>
<p>&nbsp; </p>
<p>&nbsp;</p>
</body>
</html>