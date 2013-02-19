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
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' id="show1">
						<span class="ca-icon">F</span>
						<div class="ca-content">
							<p class="ca-main">Add Category</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' onclick='javascript:listEditCategories();' id="show2">
						<span class="ca-icon">F</span>
						<div class="ca-content">
							<p class="ca-main">Edit Category</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' onclick='javascript:listDeleteCategories();' id="show3">
						<span class="ca-icon">F</span>
						<div class="ca-content">
							<p class="ca-main">Delete Category</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' onclick='javascript:listFoodCategories();' id="show4">
						<span class="ca-icon">F</span>
						<div class="ca-content">
							<p class="ca-main">View Category</p>
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
			VIEW FOODS UNDER CATEGORY
		-->
		<div id="space4">
			<form class="viewFood">
				<fieldset><p id="space_title">View Foods under Category</p>
				<div id="listOfCategories3">
				</div>	
				<input type="button" name="searchCategory" value="SELECT" onclick='javascript:viewFoodUnderCategory();'>
				<br /><br /><br />
				<div id="foodUnderCategory">
				</div>
				
			</fieldset>
			</form>
		</div>

		<!--
			DELETE CATEGORY
		-->
		<div id="space3">
			<form class="deleteCategory" action='<?php echo base_url();?>index.php/categoryManager/deleteCategory' method='post'>
				<fieldset><p id="space_title">Delete Category</p>
				SELECT A CATEGORY TO DELETE:
				<div id="listOfCategories2">
				</div>
				<input type="submit" name="deleteCategory" value="DELETE CATEGORY">
			</fieldset>
			</form>
		</div>


		<!--
			EDIT CATEGORY
		-->
		<div id="space2">
			<form class="editCategory" action='<?php echo base_url();?>index.php/categoryManager/editCategory' method='post'>
				<fieldset><p id="space_title">Edit Category</p>
				SELECT A CATEGORY TO EDIT: 
				<div id="listOfCategories1">
				</div>
				<br />
				<input type="button" name="selectCategory" value="SELECT" onclick='javascript:viewCategoryDetails();'>
				<br /><br /><br />
				<div id="categoryDetails">
				</div>
				
			</fieldset>
			</form>
		</div>
		
		<!--
			ADD CATEGORY
		-->
		<div id="space1">
			<form class="addCategory" action='<?php echo base_url();?>index.php/categoryManager/addCategory' method='post'>
				<fieldset><p id="space_title">Add Category</p>
				Category: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="name" name="categoryName" required autofocus><br />
				Description: &nbsp;<input type="name" name="categoryDesc" required>

				<input type="submit" name="submitFood" value="ADD CATEGORY">
				
			</fieldset>
			</form>
		</div>
		

	
		
			
		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
