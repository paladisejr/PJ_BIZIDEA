<?php
  session_start();
  if($_SESSION['UserID'] == "")
  {
    echo "Please Login!";
    exit();
  }
  
  mysql_connect("localhost","root","password");
  mysql_select_db("test");
  mysql_query("SET NAMES UTF8");
  $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="_assets/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />  


    <!-- script.js -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script src="_assets/js/jquery.js" type="text/javascript"></script>
    <script src="_assets/js/jquery.ui.draggable.js" type="text/javascript"></script>   
    <script src="_assets/js/jquery.alerts.js" type="text/javascript"></script>

    <script type="text/javascript">
 
        $(document).ready(function() {
                     
            $("#alert1").click(function() {

                jAlert('error', 'This is the error dialog box with some extra text.', 'Error Dialog');
            });
 
            $("#alert2").click(function() {
                jAlert('warning', 'This is the warning dialog along with some <u>html</u>.', 'Warning Dialog');
            });
 
            $("#alert3").click(function() {
              
                
                jAlert('success', 'การแก้ไขข้อมูลเรียบร้อยแล้ว', 'Success Dialog', function(r)
                {
                    if (r) 
                      {
                         $('form').submit()
                      };
                });
                return false;
                
            });
 
            $("#alert4").click(function() {
                jAlert('info', 'This is the info dialog.', 'Info Dialog');
            });
 
            $("#confirm").click(function() {
              jConfirm('Can you confirm this?', 'Confirmation Dialog', function(r) {
                if (r)
                {
                $('form').submit()
                };
                });
                return false
            });
 
            $("#prompt").click(function() {
                jPrompt('Type something:', 'Prefilled value', 'Prompt Dialog', function(r) {
                    if (r) alert('You entered ' + r);
                });
            });
        });
             
    </script> 
    
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <div id="twoCol">
    <div id="logo">
      <img src="images/logo.png">
    </div>  
    <div id="aside-register">
      <div class="icon-pageregister">
        <img src="images/icon.png">
      Edit Profile !
      </div>
      <form method="post" action="save_profile.php">
      <div class="ctrl-edit-aside">
        <table>
          <tr>
            <td class="ctrl-txt">Email :</td>
            <td><font color="#00C0FF"><?php echo $objResult["Email"];?></color></td>
          </tr>
          <tr>
            <td class="ctrl-txt">Passwrod :</td>
            <td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["Password"];?>"></td>
          </tr>
          <tr>
            <td class="ctrl-txt">Confirm Password :</td>
            <td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["Password"];?>"></td>
          </tr>
          <tr>
            <td class="ctrl-txt">Name :</td>
            <td><input name="txtName" type="text" id="txtName" value="<?php echo $objResult["Name"];?>"></td>
          </tr>
          <tr>
            <td class="ctrl-txt">Status :</td>
            <td><font color="#00C0FF"><?php echo $objResult["Status"];?></color></td>
          </tr>
        </table>
      </div>
      <div class="button">
          <div class="bt-submit">
          <input type="submit" style="background-color: rgb(0, 68, 204); height: 30px;" id="confirm" value="Submit" class="btn btn-primary">
          </div>
          <div class="bt-cancel">
          <a href="index.php"><button type="button" class="btn btn-inverse">Cancel</button></a>
          </div>
      </div>
      </form>
    </div>
  </div>
  </body>
</html>