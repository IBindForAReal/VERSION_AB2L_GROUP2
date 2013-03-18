<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>McJolly</title>
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/style.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/menu.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/jquery-ui.css" type="text/css"></link>

		<script src="<?php echo base_url();?>styles/js/jquery-1.8.3.js"></script>
		<script src="<?php echo base_url();?>styles/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>styles/js/jqueryFunctions.js"></script>
		<script src="<?php echo base_url();?>styles/js/jquery-ui.js"></script>
		<script src="<?php echo base_url();?>styles/js/mainFunctions.js"></script>
		
		<script>
			  $(function(){   $( "#datepicker" ).datepicker();	  });
		</script>

	</head>

	<body>
		<div class="menu">
			<ul class="ca-menu">
				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' id="show1">
						<span class="ca-icon">q</span>
						<div class="ca-content">
							<p class="ca-main">View by date</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' id="show2" onclick='javascript:listEarningCashiers();'>
						<span class="ca-icon">q</span>
						<div class="ca-content">
							<p class="ca-main">View by cashier</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo base_url();?>index.php/inventory'>
						<span class="ca-icon">X</span>
						<div class="ca-content">
							<p class="ca-main">Back</p>
						</div>
					</a>
				</li>
			</ul>	
		</div>

		<div class="menu_right">
			<ul class="ca-menu_right">
				<li>
					<a>
						<div class="ca-content">
							<p class="ca-main_right"><?php echo $this->session->userdata('uname'); ?></p>
						</div>
					</a>
				</li>
			</ul>
		</div>
			
		<div id="space2">
			<form class="viewByCashier"><br />
				<fieldset>
					<div id="viewByCashier1">
						<p id="space_title">Select a cashier:<br /><br />
						<div id="listEarningCashiers">
						</div>
					
					</p>
					<input type="button" id="viewByCashierBtn2" value="TOTAL EARNINGS"></a>
					<input type="button" id="viewByCashierBtn1" value="VIEW EARNINGS"></a><br />
					<div>

					<div id="viewByCashier2">
					</div>

					<div id="viewByCashier3">
					</div>
				
			</fieldset>
			</form>
		</div>
		
		<div id="space1">
			<form class="viewByDate"><br />
				<fieldset>
				<div id="viewByDate1">
					<p id="space_title">View Earnings on <input type="text" id="datepicker" style="position:relative; top: -8px;"/></p><br/>
					<input type="button" id="viewByDateBtn2" value="TOTAL EARNINGS">
					<input type="button" id="viewByDateBtn1" value="VIEW EARNINGS"><br />
					<div>

					<div id="viewByDate2">			
					</div>

					<div id="viewByDate3">
					</div>
				</fieldset>
			</form>
		</div>
		

	
		
			
		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
