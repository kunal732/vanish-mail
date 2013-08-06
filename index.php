<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MagicMail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
<?php  
  
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
  
?> 
    <div class="login-screen">
      <div class="login-icon">
            <img src="images/login/icon.png" alt="Welcome to Snap Mail Hack" />
        <h4>Welcome to <small>The Magic Mail Hack</small></h4>
          </div>
          
          <div class="login-form">
          <form id="sendmail" action="sendmagic2.php" method="post">
            <div class="control-group large">
            <input id ="to" type="text" value="" name="to" placeholder="To" class="span3">
          </div>


            <div class="control-group">
            <input type="text" value="" id ="subject" name="subject" placeholder="Subject" class="span3">
          </div>
          
                      <div class="demo-content ptl">
            <textarea rows="5" id="body" name="body" placeholder="Enter email body..." class="span12"></textarea>
          </div>
		<div class="form-actions">
        	<input type="hidden" name="save" value="magicmail">  
            <button type="submit"  class="btn btn-primary btn-large btn-block">Send a magic mail</button>
            <!--<a class="btn btn-primary btn-large btn-block" href="#">Send a magic mail</a>-->
            </div>
            </form>
          </div>
          </div>
   
   
   <br><br>
   <div class="alert alert-info">
            <!--<button type="button" class="close fui-cross" data-dismiss="alert"></button>-->
            All email sent from MagicMail will only be visible for a couple of minutes after its first opened. Afterwards the email will just show a blank message. This hack takes advantage of SendGrid's event webhook &amp; SMTP api.
          </div>
   
    </div>
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.stacktable.js"></script>
  </body>
</html>
