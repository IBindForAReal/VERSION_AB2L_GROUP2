<select name="categoryName" id="categoryName">
<?php
foreach ($categories as $entry) {
	echo "<option value=".$entry['category_name'].">".$entry['category_name']."</option>";
}
?>
</select>