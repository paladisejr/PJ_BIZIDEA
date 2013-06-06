<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form_1</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="save_form1.php">
  <table width="500" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="2">แบบฟอร์มขอเบิกค่าใช้จ่ายอุปกรณ์สำนักงานและอื่นๆ</td>
    </tr>
    <tr>
      <td width="191">
 
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
          <td><input name="textdate2" type="text" id="datepicker"  /></td>
          
    </tr>
    <tr>
      <td>เรื่อง</td>
      <td><label for="textsubject2"></label>
      <input type="text" name="textsubject2" id="textsubject2" /></td>
    </tr>
    <tr>
      <td>รายละเอียด</td>
      <td><textarea name="textdetail2" id="textdetail2" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>หมายเหตุ</td>
      <td><label for="textnote2"></label>
      <textarea name="textnote2" id="textnote2" cols="45" rows="2"></textarea>        <label for="textdetail2"></label></td>
    </tr>
    <tr>
      <td>จำนวนเงิน</td>
      <td><label for="texttotal2"></label>
      <input type="text" name="texttotal2" id="texttotal2" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="บันทึก" />
     				 <input type="submit" name="button2" id="button2" value="ยกเลิก" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>