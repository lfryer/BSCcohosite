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
</head>
<body id="whatis">
<?php include("includes/header.php"); ?>
<div class="content">
<div class="rightfloat">
<a href="http://www.amazon.com/The-Cohousing-Handbook-Building-Community/dp/0865715173" target="_blank">
<img src="images/cohobook.jpg">
The Cohousing Handbook on Amazon
</a>
</div>
    <p class="text">"Cohousing is a type of collaborative housing in which residents actively participate in the design and operation of their own neighborhoods. 
    Cohousing residents are consciously committed to living as a community. 
    The physical design encourages both social contact and individual space. 
    Private homes contain all the features of conventional homes, but residents also have access to extensive common facilities such as open space, 
    courtyards, a playground and a common house." <a href="http://cohousing.org">Cohousing.org</a></p>
    <br>
	<p class="text">These characteristics serve to distinguish cohousing from other types of collaborative housing:
<ul>
<li>Participatory process</li>
<li>Neighborhood design</li>
<li>Common facilities</li>
<li>Resident management</li>
<li>Non-hierarchical structure and decision-making</li>
<li>No shared community economy</li>
</ul>
</p>
<div id="examples">
<a href="images/examples/camelot.jpg"><img src="images/examples/camelot.jpg"></a>
<a href="images/examples/camelot2.jpg"><img src="images/examples/camelot2.jpg"></a>
<a href="images/examples/pioneervalley.jpg"><img src="images/examples/pioneervalley.jpg"></a>
<a href="images/examples/swansmarket.jpg"><img src="images/examples/swansmarket.jpg"></a>
<a href="images/examples/swansmarketplay.jpg"><img src="images/examples/swansmarketplay.jpg"></a>
<a href="images/examples/swansmarket2.jpg"><img src="images/examples/swansmarket2.jpg"></a>
</div>
</div>
<div id="footer">
   
<?php include("includes/footer.php"); ?>

</div>

</body>
</html>
