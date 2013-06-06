<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Forget Password</title>
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