<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bizidea Web Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- script.js -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <div id="twoCol">
    <div id="logo">
      <img src="images/logo.png">
    </div>  
    <div id="aside-login">
      <div class="icon-pagelogin">
        <img src="images/icon.png">
        Sign in
      </div>
      <form class="form-horizontal" method="post" action="check_login.php">
      <div class="control-group ">
        <label class="control-label lebel-font" for="inputEmail">Email :</label>
        <div class="controls">
          <input name="txtEmail" type="text" id="txtEmail" placeholder="Email" autocomplete="off" >
        </div>
      </div>
      <div class="control-group">
        <label class="control-label lebel-font" for="inputPassword">Password :</label>
        <div class="controls">
          <input name="txtPassword" type="password" id="txtPassword" placeholder="Password" autocomplete="off" >
        </div>
      </div>
      <span class="ctrl-forgotpass"><a href="forgetpassword.php">forgot Password</a></span>
      <div class="control-bt">
          <button type="submit" class="btn btn-primary fl">Sign in</button>
          <div class="register">
            <a href="register.php"><div class="img-register"> </div></a>  
          </div>
      </div>
      </div>
      </form>
    </div>
  </div>
  </body>
</html>