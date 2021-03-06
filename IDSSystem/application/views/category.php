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
		
	</head>

	<body>
		<div class="menu">
			<ul class="ca-menu">
				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' onclick='javacript:clearMessage();' id="show1">
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
			VIEW FOODS UNDER CATEGORY
		-->
		<div id="space4">
			<form class="viewFood">
				<fieldset><p id="space_title">View Foods under Category</p><br />
				<div id="listOfCategories3">
				</div>	
				<input type="button" name="searchCategory" id="viewButton1" value="SELECT" onclick='javascript:viewFoodUnderCategory();'>
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
			<form class="deleteCategory" method='post'>
				<fieldset><p id="space_title">Delete Category</p><br />
				SELECT A CATEGORY TO DELETE:
				<div id="listOfCategories2">
				</div>

				<input type="button" name="deleteCategory" id="deleteButton1" value="DELETE" onclick='javascript:deleteSelectedCategory();'>
			</fieldset>
			</form>
		</div>


		<!--
			EDIT CATEGORY
		-->
		<div id="space2">
			<form class="editCategory" method='post'>
				<fieldset><p id="space_title">Edit Category</p><br />
				SELECT A CATEGORY TO EDIT: 
				<div id="listOfCategories1">
				</div>
				<br />
				<input type="button" name="selectCategory" id="selectButton1" value="SELECT" onclick='javascript:viewCategoryDetails();'>
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
			<form class="addCategory" method='post'>
				<fieldset><p id="space_title">Add Category</p><br />
				Category: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="name" name="categoryName" id="categoryName1" onkeyup='javascript:checkCategoryNameDuplicate(this.value);' required="required" autofocus><br /><br /><br />
				Description: &nbsp;<input type="name" name="categoryDesc" id="categoryDesc1">

				<input type="button" id="addButton" name="submitFood" value="ADD CATEGORY" onclick='javascript:addCategory();'>
				
			</fieldset>
			</form>
		</div>
		
		<div id="queryMessage">
		</div>
	
		
			
		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
