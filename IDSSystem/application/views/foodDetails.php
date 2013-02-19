<img src='<?php echo $details[0]['food_image']; ?>' width="150" height="150" style="position:relative; left: 50px"/><br /><br />
Food name: &nbsp;<input type="text" name="foodName" value='<?php echo $details[0]['food_name']; ?>' disabled="disabled"><br />
<div id="listOfExistingCategories2">
</div>
Category: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
Description: &nbsp;<input type="name" name="foodDesc" placeholder='<?php echo $details[0]['food_description']; ?>'><br />
Quantity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="foodQuantity" min="0" max="500" placeholder='<?php echo $details[0]['food_quantity']; ?>'><br />
Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="foodPrice" placeholder='<?php echo $details[0]['food_price']; ?>'>
<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="editFood" value="SAVE CHANGES">

<script type="text/javascript">
	listSelectableCategories();
</script>