<?php include_once 'connect.php'; ?>
<?php include_once 'header.php'; ?>

  <body>
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
                            <li>ชื่อ :<span><?php echo $objResult["Name"];?></li>
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
    		<form action="adminsearch.php" method="get"enctype="multipart/form-data">  
    <div id="search-box">
        <div class="icon">
            <img src="images/icon-search.png">  
        </div>
        <div class="hgroup">
            <h1>ค้นหา</h1>
            <h2>ค้นหาข้อมูลที่ผ่านมา</h2>
        </div>  
        <div class="admin-search-content pd-btt">
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
            </from>
            <div class="table-head-searchpage ml-box">
                <div class="sub-head-searchpage">
                    <table>
                        <tr>
                        <td width="85px">วันที่</td>
                        <td width="100px">ชื่อ</td>
                        <td width="115px">ประเภท</td>
                        <td width="490px">รายการ</td>
                        <td width="80px">จำนวนเงิน</td>
                        <td width="90px">สถานะ</td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="bg-boxlistt">    
                    <table class="table table-list-searchpage font">
                        <tr>
                            <td class="cll-date">22/12/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">500</td>
                            <td class="cll-status stt-wait">รออนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">19/10/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">1,500</td>
                            <td class="cll-status stt-wait">รออนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">28/09/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">700</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>  
                        <tr>
                            <td class="cll-date">25/08/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">400</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">02/08/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">300</td>
                            <td class="cll-status stt-no">ไม่อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">17/06/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">900</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">03/05/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">1,200</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">15/04/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">1,000</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">07/04/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">600</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">01/04/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">300</td>
                            <td class="cll-status stt-yes">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">20/03/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
                            <td class="cll-type">เบิกค่าเดินทาง</td>
                            <td class="cll-list">เบิกค่าเดินทางออกไปพบลูกค้า</td>  
                            <td class="cll-total">500</td>
                            <td class="cll-status stt-no">ไม่อนุมัติ</td>
                        </tr>
                        <tr>
                            <td class="cll-date">01/03/2555</td>
                            <td class="cll-name">ภาคภูมิ</td>
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
                <a href="adminpage.php"><input style="font-family: THSarabunNew; font-size: 20px; 
                padding: 4px 12px; width: 90px;" class="btn btn-cancel" value="ยกเลิก"></a>
            </div>
        </div> 
    </div>
   
    <div id="footer">
        <p>© 2010-2013, Bizidea Co.,Ltd. All Rights Reserved.</p>
    </div>
  </body>
 </html>