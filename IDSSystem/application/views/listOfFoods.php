<select name="foodName2" id="foodName2">
<?php
foreach ($foods as $entry) {
	echo "<option value=".$entry['food_name'].">".$entry['food_name']."</option>";
}
?>
</select>