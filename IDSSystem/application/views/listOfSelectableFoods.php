<div id="deletableFoods">
<form name="deletableFoods">
<?php
	foreach ($foods as $entry) {
		$id = $entry['food_id'];
		$location = $entry['food_image'];
		$image = base_url()."uploads/".$location;
		$name = $entry['food_name'];
		//echo "<input type=\"image\" name=\"button[$id]\" src=\"$image\" height=\"100\" width=\"100\" value=\"$id\">$name";
		echo "<div class=\"foodInstance\">";
		echo "<label for=\"$name\" onclick=\"javascript:toogleState($name);\"><img src=\"$image\" height=\"100\" width=\"100\" alt=\"$name\" />$name</label>";
        echo "<input type=\"checkbox\" id=\"$name\" name=\"selectFoods\" class=\"foodBoxes\" value=\"$name\" />";
        echo "</div>";
	}
?>
<script type="text/javascript">
	removeBoxes();
</script>
</form>
</div>
