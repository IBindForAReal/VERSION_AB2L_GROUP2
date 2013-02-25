<div id="searchableFoods">
<form name="searchableFoods">
<?php
	foreach ($foods as $entry) {
		$id = $entry['food_id'];
		$location = $entry['food_image'];
		$image = base_url()."uploads/".$location;
		$name = $entry['food_name'];
		//echo "<input type=\"image\" name=\"button[$id]\" src=\"$image\" height=\"100\" width=\"100\" value=\"$id\">$name";
		echo "<div class=\"foodInstance\">";
		echo "<label for=\"$name\" ><img src=\"$image\" height=\"100\" width=\"100\" alt=\"$name\" />$name</label>";
        echo "<input type=\"checkbox\"  name=\"selectFoods\" class=\"foodBoxes2\" value=\"$name\" />";
        echo "</div>";
	}
?>
<script type="text/javascript">
	removeBoxes2();
</script>
</form>
</div>