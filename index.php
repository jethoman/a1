<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assignment 1</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="/CSS/index.css">
</head>
<body>
	<h1>Joel Thoman</h1>
	<img src='images/IMG_0464.jpg' alt="picture of Joel and his amazing husband" height="225" width="300">
	<h2>A little bit about me:</h2>
	<p>Hi my name is Joel Thoman, and I am from Waltham MA.  I moved to the area 6 years ago.  I have worked for a local school district's IT department for that entire time.  My bachelors is in Education, and I taught k-12 Special Ed resource classes for 10 years prior to my move.  During 8 of those years I started working part time as a Network Specialist for the district I taught for.  I am working on my Masters so that I can have a degree in the field that I love working in, and so that I can have room to grow when I am ready to take that next step in my career.</p>
	<h2>Random Quote</h2>
	<div class="quote">
	<?php
		$quote = array('Do not pity the dead, Harry. Pity the living and above all, those who live without love. - Albus Dumbledore', 'Happiness can be found, even in the darkest of times, if one only remembers to turn on the light. - Albus Dumbledore', 'We are only as strong as we are united, as weak as we are divided. - Albus Dumbledore');
		echo $quote[rand(0,2)];
	?>
</div>
<body>
</html>