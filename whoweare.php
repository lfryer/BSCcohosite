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
	<script>
		$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3000);
});
</script>

</head>
<body id="whoweare">
<?php include("includes/header.php"); ?>

<div class="content">

<?php include("whoweare/includes/sidebar.php"); ?>

<div class="main">
<?php
if ( isset($_GET['p']) && $_GET['p']=="aboutus") {
    include('whoweare/aboutus.php');
} elseif  ( isset($_GET['p']) && $_GET['p']=="vision") {
    include('whoweare/vision.php');
} elseif  ( isset($_GET['p']) && $_GET['p']=="memberbios") {
    include('whoweare/memberbios.php');
} elseif  ( isset($_GET['p']) && $_GET['p']=="photogallery") {
    include('whoweare/photogallery.php');
} else  {
    include('whoweare/aboutus.php');
}
?>
</div>

</div>
<div id="footer">
   
<?php include("includes/footer.php"); ?>

</div>

</body>
</html>
