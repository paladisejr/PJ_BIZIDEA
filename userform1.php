<?php
	session_start();
	mysql_connect("localhost","root","password");
	mysql_select_db("test");
    mysql_query("SET NAMES UTF8");
	$strSQL = "SELECT * FROM  `member` WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>User Form-1</title>
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
    <script language="javascript">

    function checkform() {


    var datepicker = $('#datepicker').val();
    var textsubject1 = $('#textsubject1').val();
    var text1 = $('#text1').val();
    var textlocation = $('#textlocation').val();
    var textchar = $('#textchar').val();
    var textdetail1 = $('#textdetail1').val();
    var texttotal1 = $('#texttotal1').val();

    if(datepicker == ""){
    alert('กรอกวันที่');
    $('#datepicker').focus();
    return false;
    }

    if(textsubject1 == ""){
    alert('กรอกเรื่อง');
    $('#textsubject1').focus();
    return false;
    }

    if(text1 == ""){
    alert('กรอกชื่อลูกค้า');
    $('#text1').focus();
    return false;
    }

    if(textlocation == ""){
    alert('กรอกสถานที่');
    $('#textlocation').focus();
    return false;
    }

    if(textchar == ""){
    alert('กรอกค่าใช้จ่าย');
    $('#textchar').focus();
    return false;
    }
    if(textdetail1 == ""){
    alert('กรอกรายละเอียด');
    $('#textdetail1').focus();
    return false;
    }
    if(texttotal1 == ""){
    alert('กรอกยอดรวม');
    $('#texttotal1').focus();
    return false;
    }


    $('.go2').submit();

    }
    </script>


    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
 
  <form enctype="multipart/form-data" class="go2" action="save_form1.php" method="post">
  	<input typt="hidden" value="<?php echo $_SESSION['UserID']; ?>" name="UserId">
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
                <a href="" title="แก้ไขข้อมูลส่วนตัว"><div class="img-setting"> </div></a>  
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
                        <span>แบบฟอร์มขอเบิกค่าใช้จ่ายเดินทางไปพบลูกค้า</span>
                    </div>
                    <div class="left-form2">
                        <ul>
                            <li><img src="images/bus.jpg"></li>
                            <li><img src="images/car2.jpg"></li> 
                            <li><img src="images/gas.jpg"></li>     
                        </ul>
                    </div>
                    <div class="center-form1">
                        <ul>
                            <li class="ctrl-date">
                                <label>วันที่</label>
                                <input name="textdate1" type="text" id="datepicker" autocomplete="off">
                                <img src="images/calendar.png">
                            </li>
                            <li>
                                <label>เรื่อง</label>
                                <input type="text" name="textsubject1" id="textsubject1">
                            </li>
                            <li>
                                <label>ชื่อลูกค้า</label>
                                <input type="text" name="text1" id="text1" >
                            </li>
                            <li>
                                <label>สถานที่</label>
                                <input type="text" name="textlocation" id="textlocation">
                            </li>
                            <li>
                                <label>เดินทางโดย</label>
                                <select name="select" id="select">
                                    <option>รถส่วนตัว</option>
                                    <option>รถประจำทาง</option>
                                    <option>รถแท็กซี่</option>
                                </select>
                            </li>
                            <li class="ctrl-money">
                                <label>ค่าใช้จ่าย</label>
                                <input type="text" name="textchar" id="textchar" >
                                <span>บาท.</span>
                            </li>
                            <li class="ctrl-money">
                                <label>ค่าทางด่วน</label>
                                <input type="text" name="textway" id="textway">
                                <span>บาท.</span>
                            </li>
                            <li>
                                <label>รายละเอียด</label>
                                <textarea name="textdetail1" id="textdetail1" rows="3"></textarea>
                            </li>    
                            <li>
                                <label>หมายเหตุ</label>
                                <textarea name="textnote1" id="textnote1" rows="3"></textarea>
                            </li>
                            <li class="ctrl-money">
                                <label>รวมเป็นเงิน</label>
                                <input type="text" name="texttotal1" id="texttotal1" >
                                <span>บาท.</span>
                            </li> 
                            <li class="ctrl-file">
                                <label>เอกสารแนบ</label>
                                <input type="text" >
                                <a href="">เลือกไฟล์</a>
                            </li>          
                        </ul>
                    </div>
                    <div class="right-form2">
                        <ul>
                            <li><img src="images/form.jpg"></li>
                            <li><img src="images/computer.jpg"></li> 
                            <li><img src="images/desk.jpg"></li>     
                        </ul>
                    </div>   
                </div>
            </div>    
        <div class="button-group">
        	<div class="ctrl-button-group btt-input">
        	<button class="btn btn-newlist mr" type="button" onclick='return checkform();'>บันทึก</button>
	        <input  class="btn btn-cancel" type="reset" value="ยกเลิก">
	        </div>
        </div>         
        </div>
    </div>
    <div id="footer">
        <p>© 2010-2013, Bizidea Co.,Ltd. All Rights Reserved.</p>
    </div>
  </body>
 </html>