<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Bay State Commons</title>
	<link rel="stylesheet" href="css/cohousingsite.css" type="text/css" />
	<link rel="shortcut icon" href="http://baystatecommons.org/favicon.ico" type="image/icon">
	<link rel="icon" href="http://baystatecommons.org/favicon.ico" type="image/icon">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js" type="text/javascript"></script>
	<script>
	$(document).ready(function(){
  var mybodyid = $('body').attr('id');
  var mynavid = '#nav' + mybodyid;
  $(mynavid).attr('id','iamhere');
});
	</script>
	<!-- this is the script for the mailing list sign-up form -->
	<script type="text/javascript" src="js/prototype.js"></script> 
    <script type="text/javascript" src="js/mailingList.js"></script>
    <!-- this is the script for the calendar -->
    <script data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>
</head>
<body id="welcome">
<?php include("includes/header.php"); 
include("code-archive/inc/storeAddress.php");
 ?>
<div class="content">
<div class="rightfloat">
<p class="button">
<a href="ourproject/membersonly/membersonly.php">
Members Area
</a>
</p>
</div>
<form id="addressForm" action="index.php" method="post"> 

  <fieldset> 

    <legend>Join our mailing list!</legend> 

    <p> 
      <label for="address">email:</label>
      <input type="text" name="address" id="address" /> 
      <label for="name">name:</label>
      <input type="text" name="name" id="name" />

      <input type="submit" value="Sign Up" /> 

    </p> 

    <p id="response"><?php echo(storeAddress()); ?></p> 

  </fieldset> 

</form>

    <p class="text">We are an emerging cohousing group in the Boston Metro-North area. 
    We are actively searching for new members and land. If you like what you see, shoot us an <a class="incontent" href="mailto:baystatecommons@gmail.com?">email</a>!</p>
    <div id="news">
    <h3>NEWS</h3>
    <p class="text"></p>
    <ul class="news">
    <li>Come by one before one of our business meetings to meet a few members and learn about our project. We meet every other Tuesday from 7-9pm at Cornerstone Cohousing, 175 Harvey Street, Cambridge MA; we will be around to meet you at 6:30pm. Email <a href="mailto:baystatecommons@gmail.com?">baystatecommons@gmail.com</a> to find out when our next business meeting is. We look forward to meeting you!
    </ul>
	
	</div>


</div>
<div id="footer">
   
<?php include("includes/footer.php"); ?>

</div>

</body>
</html>
