<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>McJolly</title>
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="<?php echo base_url();?>styles/style.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/menu.css" type="text/css"></link>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="<?php echo base_url();?>styles/jqueryFunctions.js"></script>
		<script src="<?php echo base_url();?>styles/mainFunctions.js"></script>
		
	</head>

	<body>
		<div class="menu">
			<ul class="ca-menu">
				<li>
					<a href="#" id="show1">
						<span class="ca-icon">U</span>
						<div class="ca-content">
							<p class="ca-main">Add Cashier</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' onclick='javascript:listEditCashiers();' id="show2">
						<span class="ca-icon">U</span>
						<div class="ca-content">
							<p class="ca-main">Edit Cashier</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' onclick='javascript:listDeleteCashiers();' id="show3">
						<span class="ca-icon">U</span>
						<div class="ca-content">
							<p class="ca-main">Disable Cashier</p>
							<p class="ca-sub"></p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo base_url();?>index.php/logManager/back'>
						<span class="ca-icon">X</span>
						<div class="ca-content">
							<p class="ca-main">Back</p>
						</div>
					</a>
				</li>
			</ul>	
		</div>	
		
		<div id="space3">
			<form class="disableCashier" action='<?php echo base_url();?>index.php/cashierManager/deleteCashier' method='post'>
				<fieldset><p id="space_title">Disable Cashier Account</p>
				SELECT AN ACCOUNT TO DISABLE: 
				<div id="listOfCashiers2">
				</div>
				<br />
				<input type="button" name="selectCashier" value="SELECT" onclick='javascript:previewCashierDetails();'>
				<br /><br /><br />
				<div id="cashierDetails2">
				</div>
				
			</fieldset>
			</form>
		</div>	


		<div id="space2">
			<form class="editCashier" action='<?php echo base_url();?>index.php/cashierManager/editCashier' method='post'>
				<fieldset><p id="space_title">Edit Cashier</p>
				SELECT A CASHIER TO EDIT:
				<div id="listOfCashiers1">
				</div>
				<br /> 
				<input type="button" name="selectCashier" value="SELECT" onclick='javascript:viewCashierDetails();'>
				<br /><br /><br />
				<div id="cashierDetails1">
				</div>
							
			</fieldset>
			</form>
		</div>
		
		<div id="space1">
			<form class="addCashier" action='<?php echo base_url();?>index.php/cashierManager/addCashier' method='post'>
				<fieldset><p id="space_title">Add Cashier</p>
				Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cashierName"><br />
				Username: <input type="text" name="cashierUsername"><br />
				Password: &nbsp;<input type="password" name="cashierPassword"><br />

				<input type="submit" name="addCashier" value="ADD CASHIER">
				
			</fieldset>
			</form>
		</div>
	
		
			
		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
