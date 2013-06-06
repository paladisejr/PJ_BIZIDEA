<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form_2</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="save_form2.php">
  <table width="500" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="2">แบบฟอร์มขอเบิกค่าเดินทางในการออกพบลูกค้านอกสถานที่</td>
    </tr>
    <tr>
      <td width="191"><meta charset="utf-8" />
          <title></title>
          <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
          <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
          <link rel="stylesheet" href="/resources/demos/style.css" />
        <script>
		  $(function() {
			  
	      $( "#datepicker" ).datepicker()({dateFormat:'yyyy-mm-dd'});
		  
		  });
		 </script>
		  </script>วันที่:</td>
         
          <td><input name="textdate1" type="text" id="datepicker" /></td>
    </tr>
    <tr>
      <td>เรื่อง</td>
      <td><label for="textsubject1"></label>
      <input type="text" name="textsubject1" id="textsubject1" />
      </td>
    </tr>
    <tr>
      <td>ชื่อลูกค้า</td>
      <td><label for="textfield2"></label>
        <label for="select2"></label>
        <input type="text" name="text1" id="text1" /></td>
    </tr>
    <tr>
      <td>สถานที่</td>
      <td><p>
        <label for="textfield3"></label>
        <label for="select"></label>
        <input type="text" name="textlocation" id="textlocation" />
      </p>
      <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td>เดินทางโดย</td>
      <td><label for="textlocation">
        <select name="select" id="select">
          <option>รถส่วนตัว</option>
          <option>รถแท็กซี่</option>
          <option>รถประจำทาง</option>
        </select>
        <br />
        <br />
        <br />
<br />
      </label></td>
    </tr>
    <tr>
      <td>ค่าใช้จ่าย</td>
      <td><label for="textfield8"></label>
        <label for="select7"></label>
        <input type="text" name="textchar" id="textchar" /></td>
    </tr>
    <tr>
      <td>ค่าทางด่วน</td>
      <td><label for="textfield9"></label>
        <label for="select8"></label>
        <input type="text" name="textway" id="textway" /></td>
    </tr>
    <tr>
      <td>รายละเอียด</td>
      <td><p>
        <label for="textdetail1"></label>
        <textarea name="textdetail1" id="textdetail1" cols="45" rows="5"></textarea>
      </p>
      <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td>หมายเหตุ</td>
      <td><label for="textnote1"></label>
      <textarea name="textnote1" id="textnote1" cols="45" rows="2"></textarea></td>
    </tr>
    <tr>
      <td>จำนวนเงิน</td>
      <td><label for="texttotal1"></label>
      <input type="text" name="texttotal1" id="texttotal1" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="บันทึก" />
      <input type="submit" name="button2" id="button2" value="ยกเลิก" /></td>
    </tr>
  </table>
</form>

</body>
</html>