<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<?php
	if(isset($message))
		echo $message;
?>

	<head>
		<title>McJolly</title>
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/style.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/menu.css" type="text/css"></link>
		
		<script src="<?php echo base_url();?>styles/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>styles/js/jqueryFunctions.js"></script>
		<script src="<?php echo base_url();?>styles/js/mainFunctions.js"></script>
		
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
							<p class="ca-main_right"><?php echo $_SESSION['uname']; ?></p>
						</div>
					</a>
				</li>
			</ul>
		</div>	
		
		<div id="space3">
			<form class="disableCashier" action='<?php echo base_url();?>index.php/cashierManager/deleteCashier' method='post'>
				<fieldset><p id="space_title">Delete Cashier Account</p><br />
				SELECT AN ACCOUNT TO DELETE: 
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
				<fieldset><p id="space_title">Edit Cashier</p><br />
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
				<fieldset><p id="space_title">Add Cashier</p><br />
				Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cashierName" required autofocus><br /><br /><br />
				Username: <input type="text" name="cashierUsername" required autofocus><br /><br /><br />
				Password: &nbsp;<input type="password" name="cashierPassword" required autofocus><br />

				<input type="submit" name="addCashier" value="ADD CASHIER">
				
			</fieldset>
			</form>
		</div>
	
		
			
		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
