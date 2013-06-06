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
function getName($UserId_get){
	$sql = "SELECT Name FROM  `member` WHERE UserID = '".$UserId_get."' ";
	$query = mysql_query($sql);
	$result = mysql_fetch_array($query);

	return $result['Name'];

}

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
    <title>Admin Profile</title>
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

         $('body').click(function(){
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


	<div id="container">
  	<?php if ( ! empty($_GET['ad']) ): ?>
		<div style="display:block;" class="showstatus">
			<img src="images/icon-ok.png" style="margin-left: 10px; margin-top: -5px;"><span>ทำรายการเสร็จเรียบร้อยแล้ว</span>
		
	<?php endif ?>
    <?php if ( ! empty($_GET['af']) ): ?>
        <div style="display:block;" class="showstatus">
            <img src="images/icon-ok.png" style="margin-left: 10px; margin-top: -5px;"><span>แก้ไขข้อมูลเรียบร้อยแล้ว</span>
        
    <?php endif ?>
	</div>

    <form action="adminsearch.php" method="get" enctype="multipart/form-data">  
    <div id="search-box">
        <div class="icon">
            <img src="images/icon-search.png">  
        </div>
        <div class="hgroup">
            <h1>ค้นหา</h1>
            <h2>ค้นหาข้อมูลที่ผ่านมา</h2>
        </div>  
        <div class="admin-search-content">
            <div class="control-content">
                <p>ระหว่างวันที่ : <input type="text" id="from" autocomplete="off"></p>
                <p>ถึงวันที่ : <input type="text" id="to" autocomplete="off"></p>
                <p>ชื่อ: <input type="text" autocomplete="off"></p>
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
        </div>    
    </div>
    </from>
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
            <div class="body-boxlist">
                <div class="table-head ml-box">
                    <div class="admin-sub-head">
                    <table>
                        <tr>
                        <td width="65px">วันที่</td>
                        <td width="65px">ชื่อ</td>
                        <td width="210px">รายการ</td>
                        <td width="65px">จำนวนเงิน</td>
                        <td width="45px"></td>
                        </tr>
                    </table>
                    </div>
                </div>
                    <div class="bg-boxlist" style=" Cursor:pointer">    
                   
                    <table class="table table-list font">
                   
                    <?php
					include("connect.php");
					$result = mysql_query("SELECT * FROM data order by status ASC, date_time ASC limit 0, 10");
					// ASC, DESC
					while($row = mysql_fetch_array($result))
					 {
					  $Name_user = getName($row['UserId']);
					  $date_user = gettime($row['date_time']);
					  $status = $row['status']; 

					  echo "<tr >";
					    echo"<td class='am-cl-date'>" .$date_user ."</td>";

					    echo"<td class='am-cl-name'><div class='ct-am-name'>" .$Name_user." </div></td>";

						if ($status == 0){
						echo"<td class='am-cl-list'><div class='ct-am-name'><a href='adminformshow1.php?id_order=".$row['id']."'>" 
						    .$row['subject']."</a></div></td>";
						    }elseif($status == 1){
						    	echo"<td class='am-cl-list'><div class='ct-am-name'><a href='adminformshow_1.php?id_order=".$row['id']."'>" 
						    .$row['subject']."</a></div></td>";
						    	}elseif($status == 2){
						    		echo"<td class='am-cl-list'><div class='ct-am-name'><a href='adminformshow_1.php?id_order=".$row['id']."'>" 
						    .$row['subject']."</a></div></td>";
						    		}

					    echo"<td class='am-cl-total'>" .$row['total']."</td>";

					    if ($status == 0){
					   	echo"<td class='am-cl-total' style='cursor: default;'><img src='images/icon-wait.png'title='รออนุมัติ' ></td>";

					    }elseif($status == 1){
					    
					    echo"<td class='am-cl-total'style='cursor: default;'><img src='images/icon-ok.png' title='อนุมัติ'></td>";

					    }elseif($status == 2){
					    
					    echo"<td class='am-cl-total'style='cursor: default;'><img src='images/icon-no.png' title='ไม่อนุมัติ'></td>";

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
                        <td width="65px">วันที่</td>
                        <td width="65px">ชื่อ</td>
                        <td width="210px">รายการ</td>
                        <td width="65px">จำนวนเงิน</td>
                        <td width="45px"></td>
                        </tr>
                    </table>
                    </div>
                </div>
                    <div class="bg-boxlist" style=" Cursor:pointer"div > 
                    <table class="table table-list font ">
                    <?php
					include("connect.php");
					$result = mysql_query("SELECT * FROM data2 order by status ASC, date_time ASC limit 0, 10");
					// ASC, DESC
					while($row = mysql_fetch_array($result))
					 {
					  $Name_user = getName($row['UserId']);
					  $date_user = gettime($row['date_time']);
					  $status = $row['status']; 

					  echo "<tr >";
					    echo"<td class='am-cl-date'>" .$date_user ."</td>";

					    echo"<td class='am-cl-name'><div class='ct-am-name'>" .$Name_user." </div></td>";

						if ($status == 0){
						echo"<td class='am-cl-list'><div class='ct-am-name'><a href='adminformshow2.php?id_order=".$row['id']."'>" 
						    .$row['subject']."</a></div></td>";
						    }elseif($status == 1){
						    	echo"<td class='am-cl-list'><div class='ct-am-name'><a href='adminformshow_2.php?id_order=".$row['id']."'>" 
						    .$row['subject']."</a></div></td>";
						    	}elseif($status == 2){
						    		echo"<td class='am-cl-list'><div class='ct-am-name'><a href='adminformshow_2.php?id_order=".$row['id']."'>" 
						    .$row['subject']."</a></div></td>";
						    		}

					    echo"<td class='am-cl-total'>" .$row['total']."</td>";

					    	if ($status == 0){

					   	echo"<td class='am-cl-total' style='cursor: default;'><img src='images/icon-wait.png' title='รออนุมัติ' ></td>";

					    	}elseif($status == 1){
					    
					    echo"<td class='am-cl-total' style='cursor: default;'><img src='images/icon-ok.png' title='อนุมัติ'></td>";

					    	}elseif($status == 2){
					    
					    echo"<td class='am-cl-total' style='cursor: default;'><img src='images/icon-no.png' title='ไม่อนุมัติ'></td>";

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
        <from>
        <div class="button-back">
		<a href="choosesystemadmin.php"><input value="กลับหน้าหลัก" class="btn btn-back"
		style="font-family: THSarabunNew; font-size: 20px; padding: 4px 12px; width: 90px;"></a>
		</div>

        </from>
    </div>
    <div id="footer">
        <p>© 2010-2013, Bizidea Co.,Ltd. All Rights Reserved.</p>
    </div>
  </body>
 </html>