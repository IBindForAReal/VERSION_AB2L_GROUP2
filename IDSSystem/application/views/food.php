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
		
	</head>

	<body>
		<div class="menu">
			<ul class="ca-menu">
				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' id="show1">
						<span class="ca-icon">C</span>
						<div class="ca-content">
							<p class="ca-main">Add Food</p>
						</div>
					</a>
				</li>

				<li>
					<a href='<?php echo $_SERVER['PHP_SELF'].'#'; ?>' id="show2">
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
		
		<!--
			SEARCH FOOD
		-->
		<div id="space4">
			<form class="searchFood">
				<fieldset><p id="space_title">Search Food</p>
				<input type="text" name="foodName">
				<input type="submit" name="searchFood" value="SEARCH FOOD" size="1000">
				<br />
				//kapag may result, display food<br />

				<img src="styles/img/skybg.jpg" id="foodImage"/>
				<p id="foodInfo">
				Food: <br/>
				Category: <br />
				Decription: <br />
				Quantity: <br />
				Price:
				</p>				
			</fieldset>
			</form>
		</div>

		<!--
			DELETE FOOD
		-->
		<div id="space3">
			<form class="deleteFood">
				<fieldset><p id="space_title">Delete Food</p>
				SELECT A FOOD TO DELETE:
				<select name="foodCategory">
					<option selected="selected"></option>
					<option value="volvo">from database</option>
					<option value="saab">Saab</option>
				</select><br />
				<input type="submit" name="selectFood" value="SELECT">
				<br />
				/*display food, kapag nakapagselect na*/<br />

				<img src="styles/img/skybg.jpg" id="foodImage"/>
				<p id="foodInfo">
				Food: <br/>
				Category: <br />
				Decription: <br />
				Quantity: <br />
				Price:
				</p>
				<input type="submit" name="deleteFood" value="DELETE FOOD">
				
			</fieldset>
			</form>
		</div>


		<!--
			EDIT FOOD
		-->
		<div id="space2">
			<form class="editFood">
				<fieldset><p id="space_title">Edit Food</p>
				SELECT A FOOD TO EDIT:
				<select name="foodName">
					<option selected="selected"></option>
					<option value="volvo">from database</option>
					<option value="saab">Saab</option>
				</select><br />
				<input type="submit" name="selectFood" value="SELECT">
				<br /><br />

				/*edit details, lalabas lang kapag nakapagselect na*/<br />
				Food name: &nbsp;<input type="text" name="foodName" value="*from database*">
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Category: &nbsp;<select name="foodCategory">
								<option selected="selected"></option>
								<option value="volvo">from database</option>
								<option value="saab">Saab</option>
							</select><br />
				Description: &nbsp;<input type="name" name="foodDesc" value="*from database*">
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Quantity: &nbsp;&nbsp;<input type="number" name="foodQuantity" min="0" max="500"><br />
				
				
				Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="foodPrice" value="*from database*">
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Image: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="foodImg"><br />

				<input type="submit" name="editFood" value="SAVE CHANGES">
				
			</fieldset>
			</form>
		</div>
		
		<!--
			ADD FOOD
		-->
		<div id="space1">
			<form class="addFood" action='<?php echo base_url();?>index.php/foodManager/addFood' method='post'>
				<fieldset><p id="space_title">Add Food</p>
				Food name: &nbsp;<input type="text" name="foodName" required autofocus>
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Category: &nbsp;<select name="foodCategory">
								<option selected="selected" value="food"></option>
								<option value="volvo">from database</option>
								<option value="saab">Saab</option>
							</select><br />
				Description: &nbsp;<input type="name" name="foodDesc">
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Quantity: &nbsp;&nbsp;<input type="number" name="foodQuantity" min="0" max="500" required><br />
				
				
				Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="foodPrice" required>
				<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Image: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="foodImg" required><br />

				<input type="submit" name="addFood" value="ADD FOOD">
				
			</fieldset>
			</form>
		</div>
	
		
			
		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
