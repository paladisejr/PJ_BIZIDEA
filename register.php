<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- script.js -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

    <script>   
        jQuery(document).ready(function($) {
            $('.upload').click(function(){
                $('.set1').click();
            })
            $('.set1').change(function(){
                a = $(this).val();
                $('.name_img').html(a);
            }) 
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
      Register
      </div>
      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="save_register.php">
      <div class="control-group">
        <label class="control-label lebel-font" for="inputEmail">Email :</label>
        <div class="controls">
          <input name="txtEmail" type="text" id="txtEmail" placeholder="Email">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label lebel-font" for="inputPassword">Password :</label>
        <div class="controls">
          <input name="txtPassword" type="password" id="txtPassword" placeholder="Password">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label lebel-font" for="inputConPassword">Confirm Password :</label>
        <div class="controls">
          <input name="txtConPassword" type="password" id="txtConPassword" placeholder="Confirm Password">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label lebel-font" for="inputName">Name :</label>
        <div class="controls">
          <input name="txtName" type="text" id="txtName" placeholder="Name - Lastname">
        </div>
      </div>
      <div class="controls-row">
        <label class="control-label lebel-font">Group :</label>
        <div class="controls">
          <select name="ddlStatus" id="ddlStatus">
            <option value="0">---</option>
            <option value="1">Product Manager</option>
            <option value="2">System analyst</option>
            <option value="3">Programmer</option>
            <option value="4">Designer</option>
            <option value="5">Sale</option>
          </select>  
        </div>
      </div>
      <div class="controls-row">
        <label class="control-label lebel-font" for="inputPhotos">Profile Pictures :</label>
        <div class="browse ">
          <input type="file" class="set1" style="display: none;" name='pic'> 
          <span class="btn upload btn-newlist">Browse..</span>
          <span class="name_img" ></span>
        </div>
      </div> 
      <div class="control-group">
        <label class="control-label lebel-font" for="inputName">Security Code :</label>
        <div class="controls">
          <input type="password" id="inputSecurity" placeholder="Security Code">
        </div>
      </div>
             
      <div class="button">
          <div class="bt-submit">
          <button type="submit" class="btn btn-primary">Submit</button>
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