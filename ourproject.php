<!DOCTYPE html>
<html>
<head>
<title>Bay State Commons</title>
	<link rel="stylesheet" href="css/cohousingsite.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
  var mybodyid = $('body').attr('id');
  var mynavid = '#nav' + mybodyid;
  $(mynavid).attr('id','iamhere');
});
	</script>
</head>
<body id="project">
<?php include("includes/header.php"); ?>
<div class="content">

<?php include("ourproject/includes/sidebar.php"); ?>

<div class="main">
<?php
if ( isset($_GET['p']) && $_GET['p']=="project") {
    include('ourproject/project.php');
} elseif  ( isset($_GET['p']) && $_GET['p']=="projecttimeline") {
    include('ourproject/projecttimeline.php');
} elseif  ( isset($_GET['p']) && $_GET['p']=="faqs") {
    include('ourproject/faqs.php');
} else  {
    include('ourproject/project.php');
}
?>
</div>

</div>

<div id="footer">
   
<?php include("includes/footer.php"); ?>

</div>

</body>
</html>
