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

			<p class="text">
				We are an emerging cohousing group in the Boston Metro-North area. We are actively searching for new members and land. If you like what you see, shoot us an <a class="incontent" href="mailto:baystatecommons@gmail.com?">email</a>!
			</p>
			<div id="news">
				<h3>We have BIG NEWS!!</h3>
				<ul class="news">
					<li>
						<p class="text">
							Bay State Commons cohousing has just signed an Option to Purchase agreement for the American Legion site at 368 Pleasant Street in Malden! Malden was named "Best Place to Raise Your Kids" in Massachusetts by Bloomberg Businessweek in 2009. The site is 750 feet from the Malden T stop, 20 minutes to downtown Boston. It is a short walk to groceries, public and charter schools, restaurants, and public parks. It is 1 mile from the Middlesex Fells, a 2,200 acre state park.
						</p>
						<p class="text">
							Our next steps are to formally evaluate the site's suitability for our project, starting a title search and environmental and soil quality evaluations, then moving on to detailed engineering, financial, and local permitting assessments.  We will also be hiring an architect to design our future common space, and our homes.
						</p>
						<p class="text">
							If you’ve been thinking about cohousing, now is the time to seriously check out Bay State Commons.  We will be holding an open meeting soon to share more of our plans.
						</p>
					</li>
					<br />
					<li>
						Come by before one of our business meetings to meet a few members and learn about our project. We meet every other Tuesday from 7-9pm at Cornerstone Cohousing, 175 Harvey Street, Cambridge MA; we will be around to meet you at 6:30pm. Email <a href="mailto:baystatecommons@gmail.com?">baystatecommons@gmail.com</a> to find out when our next business meeting is. We look forward to meeting you!
					</li>
				</ul>
			</div>
		</div>
		<div id="footer">
   
			<?php include("includes/footer.php"); ?>

		</div>

	</body>
</html>
