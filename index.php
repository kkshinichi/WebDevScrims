<!DOCTYPE html>
<html>
<head>
	<title>WebDevScrims</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="Home.css">
</head>

<body>
	<div class="header">
  		<h1>WebDevScrims</h1>
  	</div>
  	<div class="content">
  	<?php
  		echo "A collection of web stuffs made by Gellyne Abordo, Allen Jed Lomibao, Edrian Charles Mahaguay, and Theo Leonard Tejada for Advanced Web Development course of the Polytechnic University of the Philippines - Computer Engineering Department."
  	?>
  	</div>
  	
	<div class="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="lab2.php">Laboratory Exercises</a></li>
		<li><a href="js1.php">JavaScript Activities</a>
		<li><a href="OurTeam.php">Our Team</a></li>
	</ul>
	</div>

	<div class="footer">
    	<h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' ', ':: Rundate ', date('m/d/Y'); ?></h5>
  	</div>
</body>
</html>