<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>McJolly</title>
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/style.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/css/menu.css" type="text/css"></link>
		
		<script src="<?php echo base_url();?>styles/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>styles/js/jqueryFunctions.js"></script>
		<script src="<?php echo base_url();?>styles/js/mainFunctions.js"></script>
		<script src="<?php echo base_url();?>styles/js/ajaxfileupload.js"></script>


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
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' onclick='javascript:listDeleteFoods();' id="show3">
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
		

		

		<!--
			SEARCH FOOD
		-->
		<div id="space4">
			<form class="searchFood">
				<fieldset>
				<div id="searchFood1">
					<p id="space_title">Search Food
					<input type="text" name="foodName3" id="foodName3" style="width:300px" onkeyup='javascript:findInputPattern(this.value);'>
					 </p>
					<!-- <input type="button" id="searchFoodBtn" value="SEARCH" onclick='javascript:findPattern();'> -->
					<br /><br />
				</div>
			
				<div id="viewResults">
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
					<div id="listofDeleteFoods">
					</div>
				<br />
				<input type="button" name="deleteFood" id="deleteButton3" value="DELETE FOOD" onclick='javascript:deleteSelectedFoods();'>
				
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
				<input type="button" name="editFoodBtn" id="editButton3" value="SELECT" onclick='javascript:viewFoodDetails();'>
					<br /><br />
				</div>

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
				
			</fieldset>
			</form>
		</div>
		
		<!--
			ADD FOOD
		-->
		<div id="space1" style="top: -10px;">
			<form class="addFood" method='post' id="upload_file" enctype="multipart/form-data"><br /><br />
				<fieldset><p id="space_title">Add Food</p><br />
				Food name: &nbsp;<input type="text" name="foodName" id="foodName" onkeyup='javascript:checkFoodNameDuplicate(this.value);' required="required" autofocus>
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br />
				<br />
				<br />
				<script type="text/javascript">
					listExistingCategories();
				</script>
				<div id="listOfExistingCategories1">
				</div>
				<br />
				<br />
				Description: &nbsp;<input type="name" name="foodDesc" id="foodDesc">
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Quantity: &nbsp;&nbsp;<input type="number" name="foodQuantity" id="foodQuantity" min="0" step="1" required><br /><br /><br />
				
				
				Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="foodPrice" id="foodPrice" min="0" step="any" required>
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<!--
				Image: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="foodImg" required><br /><br />
				-->
<?php echo $error;?>


<!--
<?php echo form_open_multipart('upload/do_upload');?>
-->
<input type="file" name="userfile" id="userfile" size="20" />

<br /><br />

				<input type="submit" name="addFood" id="addButton3" value="ADD FOOD">
				
			</fieldset>
			</form>
		</div>
		<div id="queryMessage">
		</div>

		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
