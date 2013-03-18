<select name="cashierName" id="cashierName">
<?php
$count = 0;

foreach ($cashiers as $entry) {
	$count += 1;
	echo "<option value=".$entry['cashier_name'].">".$entry['cashier_name']."</option>";
}

if($count == 0){
	echo "<option value='none'>--No Cashier Yet--</option>";
	echo "<script type=\"text/javascript\">";
	echo "$('#editButton2').attr('disabled',true);";
	echo "$('#deleteButton2').attr('disabled',true);";
	//echo "$('#viewButton1').attr('disabled',true);";
	echo "</script>";
}
else{
	echo "<script type=\"text/javascript\">";
	echo "$('#editButton2').attr('disabled',false);";
	echo "$('#deleteButton2').attr('disabled',false);";
	//echo "$('#viewButton1').attr('disabled',false);";
	echo "</script>";
}

?>
</select>

<script type="text/javascript">
	$("#cashierName").change(function(){
        $("#cashierDetails1").empty();
        //$("#foodUnderCategory").empty();
    });
</script>