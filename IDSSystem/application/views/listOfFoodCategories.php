Category: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="foodCategory" id="foodCategory">
<?php
foreach ($categories as $entry) {
	echo "<option value=".$entry['category_name'].">".$entry['category_name']."</option>";
}
?>
</select>