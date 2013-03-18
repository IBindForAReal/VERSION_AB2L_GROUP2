<select name="categoryName" id="categoryName">
<?php
$count = 0;

foreach ($categories as $entry) {
	$count += 1;
	echo "<option value=".$entry['category_name'].">".$entry['category_name']."</option>";
}

if($count == 0){
	echo "<option value='none'>--No Category Yet--</option>";
	echo "<script type=\"text/javascript\">";
	echo "$('#selectButton1').attr('disabled',true);";
	echo "$('#deleteButton1').attr('disabled',true);";
	echo "$('#viewButton1').attr('disabled',true);";
	echo "</script>";
}
else{
	echo "<script type=\"text/javascript\">";
	echo "$('#selectButton1').attr('disabled',false);";
	echo "$('#deleteButton1').attr('disabled',false);";
	echo "$('#viewButton1').attr('disabled',false);";
	echo "</script>";
}

?>
</select>

<script type="text/javascript">
	$("#categoryName").change(function(){
        $("#categoryDetails").empty();
        $("#foodUnderCategory").empty();
    });
</script>