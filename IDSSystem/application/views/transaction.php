<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>McJolly</title>
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/style.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/menu.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/order.css" type="text/css"></link>
		
		<script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery-1.8.3.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>styles/js/order.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>styles/js/subFunctions.js"></script>

		<!--scrollable container-->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>styles/css/als_demo.css" /></link>

		<script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.alsEN-1.0.min.js"></script>
<!--
		<script type="text/javascript">
			$(document).ready(function() 
			{
				$(".categories").als({
					visible_items: 7,
					scrolling_items: 7,
					orientation: "horizontal",
					circular: "no",
					autoscroll: "no",
					interval: 5000,
					direction: "right"
				});
			
			});
		</script>
	-->
		
	</head>
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">

		<div id="menu-top">
			<a><?php echo $_SESSION['uname']; ?> | <?php echo date("m/d/Y");  ?> | <span id="clock">&nbsp;</span> </a>
			<a href='<?php echo base_url();?>index.php/logManager/logout'>Log Out</a>
		</div>

		<div id="cashier_space">
		</div>

		<script type="text/javascript">
			initializeView();
			categorizeFoods();
		</script>
		
			
		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
