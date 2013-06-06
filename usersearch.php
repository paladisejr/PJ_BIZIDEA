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
    <title>Search Engine</title>
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
                <a href="edit_profile.php" title="แก้ไขข้อมูลส่วนตัว"><div class="img-setting"> </div></a>  
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
                <a class="btn btn-newlist dropdown-toggle" data-toggle="dropdown" ><span class="caret icon-white"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="userform1.php"><i class="car-icon"></i> เบิกค่าเดินทาง</a></li>
                    <li><a href="userform2.php"><i class="com-icon"></i> เบิกค่าอุปกรณ์</a></li>
                </ul>
            </div>           
        </div>
    </div>
    		<form action="usersearch.php" method="get" enctype="multipart/form-data">  
    <div id="search-box">
        <div class="icon">
            <img src="images/icon-search.png">  
        </div>
        <div class="hgroup">
            <h1>ค้นหา</h1>
            <h2>ค้นหาข้อมูลที่ผ่านมา</h2>
        </div>  
        <div class="search-content pd-btt">
            <div class="control-content">
                <p>ระหว่างวันที่ : <input type="text" id="datepicker" autocomplete="off" /></p>
                <p>ถึงวันที่ : <input type="text" id="datepicker" autocomplete="off" /></p>
                <p>สถานะ :
                    <select>
                        <option>ทั้งหมด</option>                        
                        <option>รอการอนุมัติ</option>
                        <option>อนุมัติ</option>
                        <option>ไม่อนุมัติ</option>
                    </select>
                </p>
                <p>ประเภท :
                    <select>
                        <option>ทั้งหมด</option>                        
                        <option>เบิกค่าเดินทาง</option>
                        <option>เบิกค่าอุปกรณ์</option>
                    </select>
                </p>
                <button class="btn btn-search" type="submit">ค้นหา</button>
            </div>
            </from>
            <div class="table-head-searchpage ml-box">
                <div class="sub-head-searchpage">
                    <table>
                        <tr>
                        <td width="85px">วันที่</td>
                        <td width="115px">ประเภท</td>
                        <td width="525px">รายการ</td>
                        <td width="120px">จำนวนเงิน</td>
                        <td width="115px">สถานะ</td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="bg-boxlistt">    
                    <table class="table table-striped table-list-searchpage font">
                        <tr>
                            <td class="cll-date">22/12/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">500</td>
                            <td class="cll-status stt-wait">รออนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">19/10/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">1,500</td>
                            <td class="cll-status stt-wait">รออนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">28/09/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">700</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>  
                        <tr>
                            <td class="cll-date">25/08/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">400</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">02/08/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">300</td>
                            <td class="cll-status stt-no">ไม่อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">17/06/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">900</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">03/05/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">1,200</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">15/04/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">1,000</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">07/04/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">600</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">01/04/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">300</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">20/03/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">500</td>
                            <td class="cll-status stt-no">ไม่อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">01/03/2555</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">700</td>
                            <td class="cll-status stt-no">ไม่อนุมัติ</td>
                        </tr>                                                                          
                    </table>
                </div>
            </div>
            <div id="pagnition-control">
                <div class="pagination pagination-mini t-left">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
                <select>
                    <option>12</option>
                    <option>24</option>
                    <option>36</option>
                    <option>48</option>
                    <option>60</option>
                </select>
            </div>
            <div class="button-cancel">
                <a href="userpage.php"><button class="btn btn-cancel" >ยกเลิก</button></a>
            </div>
        </div> 
    </div>
   
    <div id="footer">
        <p>© 2010-2013, Bizidea Co.,Ltd. All Rights Reserved.</p>
    </div>
  </body>
 </html>