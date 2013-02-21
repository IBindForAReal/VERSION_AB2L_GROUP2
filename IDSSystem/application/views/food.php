<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>McJolly</title>
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/style.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/menu.css" type="text/css" />
		
		<script src="<?php echo base_url();?>styles/js/jquery-1.8.3.js"></script>
		<script src="<?php echo base_url();?>styles/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>styles/js/jqueryFunctions.js"></script>
		
	</head>

	<body>
		<div class="menu">
			<ul class="ca-menu">
				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' onclick='javascript:listExistingCategories();' id="show1">
						<span class="ca-icon">C</span>
						<div class="ca-content">
							<p class="ca-main">Add Food</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' onclick='javascript:listEditFoods();' id="show2">
						<span class="ca-icon">C</span>
						<div class="ca-content">
							<p class="ca-main">Edit Food</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' id="show3">
						<span class="ca-icon">C</span>
						<div class="ca-content">
							<p class="ca-main">Delete Food</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' id="show4">
						<span class="ca-icon">C</span>
						<div class="ca-content">
							<p class="ca-main">Search Food</p>
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
		

		

		<!--
			SEARCH FOOD
		-->
		<div id="space4">
			<form class="searchFood">
				<fieldset>
				<div id="searchFood1">
					<p id="space_title">Search Food
					<input type="text" name="foodName" style="width:300px"> </p>
					<a href="#" id="searchFoodBtn"> SEARCH</a>
					<br /><br />
				</div>
			
				<div id="searchFood2">
					<a>Food # 1 blah blah blah blah blah blah blah</a><br />
					<a>Food # 2 blah blah blah blah blah blah blah</a><br />
					<a>Food # 3 blah blah blah blah blah blah blah</a><br />
					<a>Food # 4 blah blah blah blah blah blah blah</a><br />
					<a>Food # 5 blah blah blah blah blah blah blah</a><br />
					</p>
				</div>

				<div id="searchFood3">
					<img src="styles/img/burger.jpg" width="150" height="150" style="position:relative; left: 20px"/><br />
					Food Name:*echo name here*<br />
					Category: <br />
					Description: <br />
					Price: <br />
					Quantity: <br />
				</div>
			</fieldset>
			</form>
		</div>

		<!--
			DELETE FOOD
		-->
		<div id="space3">
			<form class="deleteFood">
				<fieldset><p id="space_title">Delete Food</p><br /><br />
					<input type="checkbox" name="foodName" /> Food # 1 blah blah blah blah blah blah blah<br />
					<input type="checkbox" name="foodName" /> Food # 2 blah blah blah blah blah blah blah<br />
					<input type="checkbox" name="foodName" /> Food # 3 blah blah blah blah blah blah blah<br />
					<input type="checkbox" name="foodName" /> Food # 4 blah blah blah blah blah blah blah<br />
					<input type="checkbox" name="foodName" /> Food # 5 blah blah blah blah blah blah blah<br />

				<input type="submit" name="deleteFood" value="DELETE FOOD">
				
			</fieldset>
			</form>
		</div>


		<!--
			EDIT FOOD
		-->
		<div id="space2">
			<form class="editFood">
				<fieldset><p id="space_title">Edit Food</p><br />
				<div id="editFood1">
					SELECT A FOOD TO EDIT:
					<div id="listOfFoods1">
					</div>
				<input type="button" name="editFoodBtn" value="SELECT" onclick='javascript:viewFoodDetails();'>
					<br /><br />
				</div>

				<div id="editFood2">
					<!-- 
					<img src="styles/img/skybg.jpg" width="150" height="150" style="position:relative; left: 50px"/><br /><br />
					Food name: &nbsp;<input type="text" name="foodName"><br />
					<div id="listOfExistingCategories2">
					</div>
					Category: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
					Description: &nbsp;<input type="name" name="foodDesc" value="*from database*"><br />
					Quantity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="foodQuantity" min="0" max="500"><br />
					Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="foodPrice" value="*from database*">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<input type="submit" name="editFood" value="SAVE CHANGES">
				-->
					<div id="foodDetails1">
					</div>
				</div>
				
			</fieldset>
			</form>
		</div>
		
		<!--
			ADD FOOD
		-->
		<div id="space1">
			<form class="addFood" action='<?php echo base_url();?>index.php/foodManager/addFood' method='post' enctype="multipart/form-data"><br /><br />
				<fieldset><p id="space_title">Add Food</p><br />
				Food name: &nbsp;<input type="text" name="foodName" required="required" autofocus>
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br />
				<br />
				<script type="text/javascript">
					listExistingCategories();
				</script>
				<div id="listOfExistingCategories1">
				</div>
				<br />
				Description: &nbsp;<input type="name" name="foodDesc">
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Quantity: &nbsp;&nbsp;<input type="number" name="foodQuantity" min="0" max="500" required="required"><br /><br /><br />
				
				
				Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="foodPrice" required="required">
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<!--
				Image: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="foodImg" required><br /><br />
				-->
<?php echo $error;?>


<!--
<?php echo form_open_multipart('upload/do_upload');?>
-->
<input type="file" name="userfile" size="20" />

<br /><br />

				<input type="submit" name="addFood" value="ADD FOOD">
				
			</fieldset>
			</form>
		</div>

		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
