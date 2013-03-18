<select name="foodName2" id="foodName2">
<?php
$count = 0;

foreach ($foods as $entry) {
	$count += 1;
	echo "<option value=".$entry['food_name'].">".$entry['food_name']."</option>";
}

if($count == 0){
	echo "<option value='none'>--No Food Yet--</option>";
	echo "<script type=\"text/javascript\">";
	echo "$('#editButton3').attr('disabled',true);";
	//echo "$('#viewButton1').attr('disabled',true);";
	echo "</script>";
}
else{
	echo "<script type=\"text/javascript\">";
	echo "$('#editButton3').attr('disabled',false);";
	//echo "$('#viewButton1').attr('disabled',false);";
	echo "</script>";
}

?>
</select>

<script type="text/javascript">
	$("#foodName2").change(function(){
        $("#foodDetails1").empty();
        $("#queryMessage").empty();
        //$("#foodUnderCategory").empty();
    });
</script>