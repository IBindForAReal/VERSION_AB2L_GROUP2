<img src='<?php echo base_url()."uploads/".$details[0]['food_image']; ?>' width="150" height="150" style="position:relative; left: 50px"/><br /><br />
Food name: &nbsp;<input type="text" name="foodName" id='foodName2' value='<?php echo $details[0]['food_name']; ?>' disabled="disabled"><br />
<div id="listOfExistingCategories2">
	<script type="text/javascript">
		listSelectableCategories();
	</script>
</div>
Description: &nbsp;<input type="name" name="foodDesc" id="foodDesc2" placeholder='<?php echo $details[0]['food_description']; ?>' required><br />
Quantity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="foodQuantity" id="foodQuantity2" min="0" max="500" placeholder='<?php echo $details[0]['food_quantity']; ?>' required><br />
Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="foodPrice" id="foodPrice2" placeholder='<?php echo $details[0]['food_price']; ?>' required>
<!--TAB-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="button" name="editFood" value="SAVE CHANGES" onclick='javascript:editSelectedFood();'>

