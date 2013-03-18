<div id="deletableFoods">
<form name="deletableFoods">
<?php
$count = 0;

	foreach ($foods as $entry) {
		$count += 1;

		$id = $entry['food_id'];
		$location = $entry['food_image'];
		$image = base_url()."uploads/".$location;
		$name = $entry['food_name'];
		//echo "<input type=\"image\" name=\"button[$id]\" src=\"$image\" height=\"100\" width=\"100\" value=\"$id\">$name";
		echo "<div class=\"foodInstance\">";
		echo "<label for=\"$name\" onmouseover=\"javascript:getPopDetails($name);\" onclick=\"javascript:toogleState($name);\"><img src=\"$image\" height=\"100\" width=\"100\" alt=\"$name\" />$name</label>";
        echo "<input type=\"checkbox\" id=\"$name\" name=\"selectFoods\" class=\"foodBoxes\" value=\"$name\" />";
        echo "</div>";
	}

	if($count == 0){
		echo "--No Food Yet--";
		echo "<script type=\"text/javascript\">";
		echo "$('#deleteButton3').attr('disabled',true);";
		echo "</script>";

	}
	else{
		echo "<script type=\"text/javascript\">";
		echo "$('#deleteButton3').attr('disabled',false);";
		echo "</script>";
	}
?>
<script type="text/javascript">
	removeBoxes();
</script>
</form>
</div>
