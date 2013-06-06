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
    <title>User Profile</title>
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
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
    </script>
    
    <script>
    $(function(){

         $('#container').click(function(){
            if ($('div').hasClass('showstatus'))
            {
                $('.showstatus').fadeOut();
            };
        })

    });

    </script>

    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
 
  </head>
  <body>
  <div id="container">
    <input type="hidden"  value="<?php echo $_GET['ac'];?>">
         
    

    <div id="header-control">
        <div id="header-user";>
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
    <?php if ( ! empty($_GET['ac']) ): ?>
    <div style="display:block;" class="showstatus">
        <img src="images/icon-ok.png" style="margin-left: 20px; margin-top: -5px;"><span>บันทึกข้อมูลเรียบร้อยแล้ว</span>
    </div>
    <?php endif ?>
    <div id="container">
    <?php if ( ! empty($_GET['ab']) ): ?>
    <div style="display:block;" class="showstatus">
    <img src="images/icon-ok.png" style="margin-left: 10px; margin-top: -5px;"><span>ลบข้อมูลเสร็จแล้ว</span>
    </div>
    <?php endif ?>
    <?php if ( ! empty($_GET['ag']) ): ?>
    <div style="display:block;" class="showstatus">
        <img src="images/icon-ok.png" style="margin-left: 20px; margin-top: -5px;"><span>แก้ไขข้อมูลเรียบร้อยแล้ว</span>
    </div>
    <?php endif ?>
    <form action="usersearch.php" method="get" enctype="multipart/form-data">  
    <div id="search-box">
        <div class="icon">
            <img src="images/icon-search.png">  
        </div>
        <div class="hgroup">
            <h1>ค้นหา</h1>
            <h2>ค้นหาข้อมูลที่ผ่านมา</h2>
        </div>
        
        <div class="search-content" >
            <div class="control-content">
                <p >ระหว่างวันที่ : <input type="text" id="from" autocomplete="off" /></p>
                <p >ถึงวันที่ : <input type="text" id="to" autocomplete="off" /></p>
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
                <button class="btn btn-search" type="submit" value="Search">ค้นหา</button>
            </div>
        </div>    
    </div>
    </form> 
    <div id="bottom-user">
        <div class="box">
            <div class="box-list">
                <div class="icon">
                    <img src="images/icon-car.png">  
                </div> 
                <div class="hgroup">
                    <h1>เบิกค่าเดินทาง</h1>
                    <h2>รายการเบิกค่าเดินทางออกไปพบลูกค้า</h2>
                </div> 
            <div class="body-boxlist" style=" Cursor:pointer">
                <div class="table-head ml-box">
                    <div class="sub-head">
                    <table>
                        <tr>
                        <td width="75px">วันที่</td>
                        <td width="260px">รายการ</td>
                        <td width="70px">จำนวนเงิน</td>
                        <td width="45px"></td>
                        </tr>
                    </table>
                    </div>
                </div>
                    <div class="bg-boxlist">    
                    <table  class="table table-list font ">
                    <?php
                    include("connect.php");
                    $result = mysql_query("SELECT * FROM data WHERE UserID = '".$_SESSION['UserID']."' order by status ASC, date_time DESC limit 0,10");
                    // ASC, DESC
                    while($row = mysql_fetch_array($result))
                     {

                      $status = $row['status']; 
                      $date_user = gettime($row['date_time']);

                      echo "<tr>";
                        echo"<td class='cl-date'>" .$date_user."</td>";
                        
                        if ($status == 0){
                        echo"<td class='cl-list'><div class='ct-am-name'>
                        <a href='userformshow1.php?id_order=".$row['id']."'>" .$row['subject']."</a></div></td>";
                        }elseif($status == 1){
                            echo"<td class='cl-list'><div class='ct-am-name'>
                        <a href='userformshow_1.php?id_order=".$row['id']."'>" .$row['subject']."</a></div></td>";
                        }elseif($status == 2){
                                echo"<td class='cl-list'><div class='ct-am-name'>
                        <a href='userformshow_1.php?id_order=".$row['id']."'>" .$row['subject']."</a></div></td>";
                        }

                        echo"<td class='cl-total'>" .$row['total']."</td>";

                        if ($status == 0){
                        echo"<td class='am-cl-status'><img src='images/icon-wait.png' style='cursor: default;'title='รออนุมัติ'><a href='delete1.php?delete_id=".$row['id']."'><img src='images/icon-del.png'title='ลบข้อมูล'></a></td>";

                        }elseif($status == 1){
                        
                        echo"<td class='am-cl-status'><img src='images/icon-ok.png' style='cursor: default;'title='อนุมัติ'><img src='images/icon-del1.png'title='ลบข้อมูลไม่ได้' style='cursor: default;'></td>";

                        }elseif($status == 2){
                        
                        echo"<td class='am-cl-status'><img src='images/icon-no.png' style='cursor: default;'title='ไม่อนุมัติ'><img src='images/icon-del1.png'title='ลบข้อมูลไม่ได้' style='cursor: default;'></td>";

                        }       
                          echo"</tr>";
                      echo"</tr>";
                     }
                    echo "</table>";
                     mysql_close();
                    ?>
                    </table>
                </div>
            </div>
                <div class="pagination pagination-mini t-right">
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
            </div>
        </div>
        <div class="box ml-box">
            <div class="box-list">
                <div class="icon">
                    <img src="images/icon-com.png">  
                </div>
                <div class="hgroup">
                    <h1>เบิกค่าอุปกรณ์</h1>
                    <h2>รายการเบิกค่าอุปกรณ์สำนักงาน</h2>
                </div>        
            <div class="body-boxlist">
                <div class="table-head ml-box">
                    <div class="sub-head">
                    <table>
                        <tr>
                        <td width="75px">วันที่</td>
                        <td width="260px">รายการ</td>
                        <td width="70px">จำนวนเงิน</td>
                        <td width="45px"></td>
                        </tr>
                    </table>
                    </div>
                </div>
                    <div class="bg-boxlist" style=" Cursor:pointer"> 
                    <table class="table  table-list font ">
                        <?php
                        include("connect.php");
                        $result = mysql_query("SELECT * FROM data2 WHERE UserID = '".$_SESSION['UserID']."'order by status ASC, date_time DESC limit 0,10");
                        // ASC, DESC
                        while($row = mysql_fetch_array($result))
                         {

                          $status = $row['status']; 
                          $date_user = gettime($row['date_time']);

                        echo "<tr>";

                        echo"<td class='cl-date'>" .$date_user."</td>";
                        
                        if ($status == 0){
                        echo"<td class='cl-list'><div class='ct-am-name'>
                        <a href='userformshow2.php?id_order=".$row['id']."'>" .$row['subject']."</a></div></td>";
                        }elseif($status == 1){
                            echo"<td class='cl-list'><div class='ct-am-name'>
                        <a href='userformshow_2.php?id_order=".$row['id']."'>" .$row['subject']."</a></div></td>";
                        }elseif($status == 2){
                                echo"<td class='cl-list'><div class='ct-am-name'>
                        <a href='userformshow_2.php?id_order=".$row['id']."'>" .$row['subject']."</a></div></td>";
                        }
                        
                        echo"<td class='cl-total'>" .$row['total']."</td>";

                        if ($status == 0){
                        echo"<td class='am-cl-status'><img src='images/icon-wait.png' style='cursor: default;'title='รออนุมัติ'><a href='delete2.php?delete_id=".$row['id']."'><img src='images/icon-del.png'title='ลบข้อมูล'></a></td>";

                        }elseif($status == 1){
                        
                        echo"<td class='am-cl-status'><img src='images/icon-ok.png' style='cursor: default;'title='อนุมัติ'><img src='images/icon-del1.png'title='ลบข้อมูลไม่ได้'style='cursor: default;'></td>";

                        }elseif($status == 2){
                        
                        echo"<td class='am-cl-status'><img src='images/icon-no.png' style='cursor: default;'title='ไม่อนุมัติ'><img src='images/icon-del1.png'title='ลบข้อมูลไม่ได้' style='cursor: default;'></td>";

                        }       
                    
                          echo"</tr>";
                         }
                        echo "</table>";
                         mysql_close();
                        ?>
                                           
                    </table>
                    </div>
            </div>  
                <div class="pagination pagination-mini t-right">
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
            </div>
        </div>
        <div class="button-back">
        <a href="choosesystem.php"><input value="กลับหน้าหลัก" class="btn btn-back"
        style="font-family: THSarabunNew; font-size: 20px; padding: 4px 12px; width: 90px;"></a>
        </div>

    </div>
    <div id="footer">
        <p>© 2010-2013, Bizidea Co.,Ltd. All Rights Reserved.</p>
    </div>
   
   </div>
  </body>
</html>

