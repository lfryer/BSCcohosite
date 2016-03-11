<!DOCTYPE html>
<html>
<head>
<title>Bay State Commons</title>
	<link rel="stylesheet" href="css/cohousingsite.css" type="text/css" />
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
<body id="contact">
<?php include("includes/header.php"); 
include("code-archive/inc/storeAddress.php");
?>
<div class="content">
	<p class="text">Questions? Send us an email at <a href="mailto:baystatecommons@gmail.com?">baystatecommons@gmail.com</a>.</p>
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
</div>
<div id="footer">
   
<?php include("includes/footer.php"); ?>

</div>
</body>
</html>
