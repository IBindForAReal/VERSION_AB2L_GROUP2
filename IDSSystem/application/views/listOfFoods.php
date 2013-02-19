<select name="foodName" id="foodName">
<?php
foreach ($foods as $entry) {
	echo "<option value=".$entry['food_name'].">".$entry['food_name']."</option>";
}
?>
</select>