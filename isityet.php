<?php
	# Set what you're counting down to.
	$eventname = "Odin's birthday";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Is It <?php echo $eventname ?> Yet?</title>
<style type="text/css">
	*{margin:0px;}
	html{font-size:62.5%;} /* Setting the font size to 62.5% means that 1em = 10px, 1.2em = 12px and so on. */
	body {color:#111;background-color:#eee;}
	h1, h2, h3 {font-weight:bold;letter-spacing:-1px;font-family:Helvetica, sans-serif;text-align: center}
	h1 {font-size:22em;padding-top:30px;}
	h2 {font-size:3em;margin-top:150px;}
	h3 {font-size:2.5em;}
</style>
</head>
<body>
<h2>Is it <?php echo $eventname ?> yet?</h2>
<h1><?php
			
	# Set date to count down to.
	$day   = 07;		# eg. 07
	$month = 06;		# eg. 06
	$year  = 2009;	# eg. 2009
			
	# Calculation for days left.
	$days = ((mktime (0,0,0,$month,$day,$year) - time())/86400);
	
	# Is it yet?
	if (date("jnY") == ($day . $month . $year)) {
	  echo "YES";
	} else {
	  echo "NO";
	}
?></h1>
<h3>It's <?php 
	# Display how many days left.
	if ($days <= -1) {
		echo " over. It was ";
	} elseif ($days <= 0){
		echo " ";
	} elseif ($days <= 1){
		echo "1 day until ";
	} else {
		echo (int)$days + 1 . " days until ";
	}
	echo $eventname;
?></h3>
<!--Exact days left: <?php echo $days ?>-->
</body>
</html>
<!-- == www.twe4ked.com == -->