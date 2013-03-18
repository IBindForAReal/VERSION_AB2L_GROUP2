Category: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="foodCategory" id="foodCategory">
<?php
$count = 0;

foreach ($categories as $entry) {
	$count += 1;
	echo "<option value=".$entry['category_name'].">".$entry['category_name']."</option>";
}

if($count == 0){
	echo "<option value='!categorized'>--No Category Yet--</option>";
	echo "<script type=\"text/javascript\">";
	echo "$('#addButton3').attr('disabled',true);";
	echo "$('#saveButton3').attr('disabled',true);";
	echo "</script>";
}
else{
	echo "<script type=\"text/javascript\">";
	echo "$('#addButton3').attr('disabled',false);";
	echo "$('#saveButton3').attr('disabled',false);";
	echo "</script>";
}

?>
</select>