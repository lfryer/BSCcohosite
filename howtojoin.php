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
<body id="howtojoin">
<?php include("includes/header.php"); 
include("code-archive/inc/storeAddress.php"); 
?>
<div class="content">
<h3>How to Join Bay State Commons</h3>
<p class="text">
We have three levels of membership in BSC: Prospective, Associate, and Equity.
<div class="memberlevel">
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

<dl>
<dt>Prospective Member</dt>
<dd>Anyone who wants to know about what we're doing can be a Prospective Member. Once you are on the mailing list, we will let you know about any open meetings and social events we are planning.</dd>
</div>
<div class="memberlevel">
<br>
<div class="rightfloat">
<a href="http://www.amazon.com/The-Cohousing-Handbook-Building-Community/dp/0865715173" target="_blank">
<img src="images/cohobook.jpg">
</a><p class="border">
<a href="docs/How%20to%20Join%20Bay%20State%20Commons.pdf">How To Join</a>
</p>
<p class="border"><a href="docs/Bay%20State%20Commons%20Assoc%20Member%20Application.pdf">Associate Member Application</a></p>
<p class="border">
Questions? <a href="mailto:baystatecommons@gmail.com?">Email us!</a>
</p>
</div>
<dt>Associate Member</dt>

<dd>In order to reach Associate Member status, you must:
<ol>
<li>Attend at least two meetings (held on the 1st and 3rd Tuesdays of the month);</li>
<li>Meet with representatives of at least two Equity member households to discuss your interest in cohousing;</li>
<li>Read <a href="http://www.amazon.com/The-Cohousing-Handbook-Building-Community/dp/0865715173" target="_blank">The Cohousing Handbook</a> by Chris and Kelly Scotthanson;</li>
<li>Complete the Associate Member application form found <a href="docs/Bay%20State%20Commons%20Assoc%20Member%20Application.pdf">here</a>;</li>
<li>Make an initial, non-refundable payment of $250.</li>
</ol>
Associate members make semi-annual, non-refundable payments of $250.
<h5>Rights and Responsibilities of an Associate Member:</h5>
<ul>
<li>to attend meetings of Bay State Commons;</li>
<li>to participate in planning committees;</li>
<li>and to voice opinions in meetings.</li>
</ul>
</dd>
</div>
<div class="memberlevel">
<br>
<dt>Equity Member</dt>

<dd>An Equity Member is someone who has made the decision to invest in the Bay State Commons cohousing project. After someone has become an Associate Member, they have the option of applying to become an Equity Member.
In order to reach Equity Member status, you must:
<ol>
<li>Attend at least three meetings as an Associate Member;</li>
<li>Complete the Equity Member application form;</li>
<li>Go through a financial risk clearness process;</li>
<li>Be trained in consensus decision-making and facilitation;</li>
<li>By approved by current Equity members; </li>
<li>Make an equity payment (amount dependent on status of project). This is a down payment on your future living unit.</li>
</ol>
<h5>Rights and Responsibilities of an Equity Member:</h5>
<ul>
<li>to attend meetings of Bay State Commons;</li>
<li>to participate in planning committees;</li>
<li>to voice opinions and make decisions that shape the direction of the group.</li>
</ul></dd>
</dl>
</div>

</div>
<div id="footer">
   
<?php include("includes/footer.php"); ?>

</div>

</body>
</html>
