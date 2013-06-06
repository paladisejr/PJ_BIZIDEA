<?php
	session_start();
	mysql_connect("localhost","root","password");
	mysql_select_db("test");
	mysql_query("SET NAMES UTF8");
	$strSQL = "SELECT * FROM  `member` WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

	

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
    <title>User Form-Show2</title>
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
                    <img src="images/icon-user1.png">  
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
            <div class="btn-group btn-control">
                <a class="btn btn-newlist"> เพิ่มรายการ</a>
                <a class="btn btn-newlist dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret icon-white"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="userform1.php"><i class="car-icon"></i> เบิกค่าเดินทาง</a></li>
                    <li><a href="userform2.php"><i class="com-icon"></i> เบิกค่าอุปกรณ์</a></li>
                </ul>
            </div>           
        </div>
    </div>
    <div id="form-box">
        <div class="icon">
            <img src="images/icon-new.png">  
        </div>
        <div class="hgroup">
            <h1>เพิ่มรายการ</h1>
            <h2>การเบิกค่าอุปกรณ์สำนักงาน,การเบิกค่าเดินทางไปพบลูกค้า</h2>
        </div>  
        <div class="form-content">
            <div class="ctrl-content">
                <div class="bg-group">
                    <div class="sub-head-formpage">
                        <span>แบบฟอร์มขอเบิกค่าใช้จ่ายอุปกรณ์สำนักงาน</span>
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
							$strSQL = "SELECT * FROM  `data2` WHERE id = '".$_GET['id_order']."' ";
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
                                    <td class="ctrl-td1">จำนวนเงิน</td>
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
        	<div class="ctrl-button-group">
			<a href="#"><button class="btn btn-inverse mr" >แก้ไข</button></a>
			<a href="userpage.php"><button class="btn btn-cancel" >ยกเลิก</button></a>
			</div>

        </div>         
        </div>
    </div>
    <div id="footer">
        <p>© 2010-2013, Bizidea Co.,Ltd. All Rights Reserved.</p>
    </div>
  </body>
 </html>