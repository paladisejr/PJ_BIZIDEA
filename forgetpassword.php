<?php include_once 'header.php'; ?>
  <body>
  <div id="twoCol">
    <div id="logo">
      <img src="images/logo.png">
    </div>  
    <div id="aside-login">
      <div class="icon-pageregister ml-forgetpass">
        <img src="images/icon.png">
        Forget Password
      </div>
      <form class="form-horizontal" name="form1" method="post" action="SendPassword.php">
      <div class="control-group ">
        <label class="control-label lebel-font" for="inputEmail">E-mail :</label>
        <div class="controls">
        <input name="txtEmail" type="text" id="txtEmail" placeholder="E-mail">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label lebel-font" for="inputPassword">Confirm E-mail :</label>
        <div class="controls">
          <input name="txtEmail" type="text" id="txtEmail" placeholder="Confirm E-mail">
        </div>
      </div>
      <div class="button">
          <div class="bt-submit">
          <input type="submit" style="background-color: rgb(0, 68, 204); height: 30px;" id="confirm" value="Submit" class="btn btn-primary">          
          </div>
          <div class="bt-cancel">
          <a href="index.php"><button type="button" class="btn btn-inverse">Cancel</button>
          </a></div>
      </div>
      </div>
      </form>
    </div>
  </div>
  </body>
</html>