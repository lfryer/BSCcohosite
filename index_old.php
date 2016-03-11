<!DOCTYPE html>
<html>
<head>
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
</head>
<body id="welcome">
<?php include("includes/header.php"); ?>
<div class="content">
    <p class="text">We are an emerging cohousing group in the Boston Metro-North area. 
    We are actively searching for new members and land. If you like what you see, shoot us an <a id="inherit" href="mailto:baystatecommons@gmail.com?">email</a>!</p>
    <h3>NEWS</h3>
    <p class="text">
    <ul class="news">
    <li>We have a new forum! <a id="inherit" href="http://baystatecommons.org/forum/index.php">Head on over</a> to see what we're talking about, ask us questions, and get information for any social events coming up!</li>
    </ul>

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

<p>    
	<?php include("includes/footer.php"); ?></p>
	


</div>


</body>
</html>
