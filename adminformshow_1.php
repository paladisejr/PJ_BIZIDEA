<?php
    
	session_start();
	mysql_connect("localhost","root","password"); 
	mysql_select_db("test");
	mysql_query("SET NAMES UTF8");
	$strSQL = "SELECT * FROM  `member` WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

    $_GET['id_order'];

?>


<?php 
function gettime($date_get){
 
	$date_cut = explode('-',$date_get);
	$date_true1 =  $date_cut[2].'/'.$date_cut[1].'/'.$date_cut[0];

	return $date_true1;

}

?>

<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Form-Show 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/jquery-ui-1.10.3.custom.css" rel="stylesheet">

    <!-- script.js -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script>
        $(function() {
        $( "#datepicker" ).datepicker();
        });
    </script>
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

	<div id="header-control">
        <div id="header-user">
            <ul class="nav-head">
            <li class="welcome">Welcome : <span><?php echo $objResult["Name"];?></span></li>    
            <li class="signout"><a href="logout.php">Sign out</a></li>
            </ul>
        </div>
    </div>
  	<div id="top-user">
		<div class="img-taglogo">
            <img src="images/head-tag1.jpg">
        </div> 
        <div id="box-profile">
            <div class="head-boxprofile">
                <div class="icon">
                    <img src="images/icon-admin1.png">  
                </div>
                <div class="hgroup">
                    <h1>ข้อมูลส่วนตัว</h1>
                    <h2>ประวัติส่วนตัว</h2>
                </div> 
                <div class="setting-icon">
                <a href="editprofile.php" title="แก้ไขข้อมูลส่วนตัว"><div class="img-setting"> </div></a>  
                </div> 
            </div>               
                <div class="content-profile">   
                    <div class="pic-profile">
                        <img src="images/member/<?php echo $objResult["filename"];?>">
                        <input class="logo_user" type="hidden" value="" name="logo_user">
                    </div>
                    <div class="content-detail">
                        <ul>
                            <li>ชื่อ :<span><?php echo $objResult["Name"];?></span></li>
                            <li>ตำแหน่ง :<span>-</span></li>
                            <li>ฝ่าย/แผนก :<span><?php echo $objResult["Status"];?></span></li>
                        </ul>
                    </div>
                </div>           
        </div>
        <div class="head-boxreverse">
            <div class="icon">
                <img src="images/icon-baht.png">  
            </div>
            <div class="hgroup">
                <h1>ระบบเบิกค่าใช้จ่าย</h1>
                <h2>การเบิกค่าอุปกรณ์สำนักงาน,การเบิกค่าเดินทางไปพบลูกค้า</h2>
            </div>         
        </div>
    </div>
    <div id="form-box">
        <div class="icon">
            <img src="images/icon-list.png">  
        </div>
        <div class="hgroup">
            <h1>แสดงรายการ</h1>
            <h2>การเบิกค่าอุปกรณ์สำนักงาน,การเบิกค่าเดินทางไปพบลูกค้า</h2>
        </div>  
        <div class="form-content">
            <div class="ctrl-content">
                <div class="bg-group">
                    <div class="sub-head-formpage">
                        <span>รายการขอเบิกค่าใช้จ่ายเดินทางไปพบลูกค้า</span>
                        <img src="images/icon-print.png">
                    </div>
                    <div class="left-form1">
                        <img src="images/left-form1.jpg">
                    </div>
                    <div class="center-formshow">
                        <div class="ctrl-group-td">
                            <div class="set-tableform">

							<?php
							mysql_connect("localhost","root","password");
							mysql_select_db("test");
							mysql_query("SET NAMES UTF8");
							$strSQL = "SELECT * FROM  `data` WHERE id = '".$_GET['id_order']."' ";
							$objQuery = mysql_query($strSQL);
							$objResult = mysql_fetch_array($objQuery);
								
							$date_user = gettime($objResult["date_time"]);
	
							?>
                                <table>
                                    <tr>
                                        <td class="ctrl-td1">วันที่</td>
                                        <td class="ctrl-td2-1"><?php echo $date_user;?></td>
                                    </tr>
                                    <tr>
                                        <td class="ctrl-td1">เรื่อง</td>
                                        <td class="ctrl-td2"><?php echo $objResult["subject"];?></td>
                                    </tr>  
                                    <tr>
                                        <td class="ctrl-td1">ชื่อลูกค้า</td>
                                        <td class="ctrl-td2"><?php echo $objResult["text1"];?></td>
                                    </tr>
                                    <tr>
                                        <td class="ctrl-td1">สภานที่</td>
                                        <td class="ctrl-td2"><?php echo $objResult["location"];?></td>
                                    </tr> 
                                    <tr>
                                        <td class="ctrl-td1">เดินทางโดย</td>
                                        <td class="ctrl-td2"><?php echo $objResult["vehicle"];?></td>
                                    </tr>
                                </table>
                                <table> 
                                    <tr>
                                        <td class="ctrl-td1">ค่าใช้จ่าย</td>
                                        <td class="ctrl-td2-1"><?php echo $objResult["charges"];?></td>
                                        <td class="ctrl-td-pl"><font color="#525252">บาท.</color></td>
                                        <td class="ctrl-td1 ctrl-td-pl">ค่าทางด่วน</td>
                                        <td class="ctrl-td2-1"><?php echo $objResult["way"];?></td>
                                        <td class="ctrl-td-pl"><font color="#525252">บาท.</color></td>
                                    </tr> 
                                </table>
                                <table>
                                    <tr>
                                        <td class="ctrl-td1">รายละเอียด</td>
                                        <td class="ctrl-td2"><?php echo $objResult["detail"];?>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td class="ctrl-td1">หมายเหตุ</td>
                                        <td class="ctrl-td2"><?php echo $objResult["note"];?></td>
                                    </tr>
                                </table>
                            </div>
                            <hr>
                            <table>
                                <tr>
                                    <td class="ctrl-td1">รวมเป็นเงิน</td>
                                    <td class="ctrl-td2-1"><?php echo $objResult["total"];?></td>
                                    <td class="ctrl-td-pl"><font color="#1c1c1c">บาท.</color></td>
                                </tr> 
                                <tr>
                                    <td class="ctrl-td1">เอกสารแนบ</td>
                                    <td class="ctrl-td2-1">IMG_01215.jpg</td>
                                    <td class="ctrl-td-pl"><a href="#">ดาวน์โหลด</a></td>
                                </tr>          
                            </table>
                    </div>
                    </div>
                    <div class="right-form1">
                        <img src="images/right-form1.jpg">
                    </div>   
                </div>
            </div>    
        <div class="button-group">
           
            <a href="adminpage.php"><button class="btn btn-back" >ดูรายการอื่น</button></a>
        </div>         
        </div>
    </div>
    <div id="footer">
        <p>© 2010-2013, Bizidea Co.,Ltd. All Rights Reserved.</p>
    </div>
  </body>
 </html>