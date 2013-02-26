<script type="text/javascript" src="<?php echo base_url();?>styles/js/order.js"></script>


<script type="text/javascript">
			$(document).ready(function() 
			{
				$(".categories").als({
					visible_items: 7,
					scrolling_items: 7,
					orientation: "horizontal",
					circular: "no",
					autoscroll: "no",
					interval: 5000,
					direction: "right"
				});
			
			});
		</script>

<form class="enlistOrder" name="enlistOrder">
				<a href='<?php echo base_url()."index.php/transaction"."#"; ?>' onclick='javascript:orderSelectedFoods();' id="enlist">ENLIST FOOD</a>
				
				<!--
				<input type="button" name="orderFood" id="enlist" value="ENLIST FOOD" onclick='javascript:orderSelectedFoods();'>
			-->
<?php
	$count = 1;
	$leftImage = base_url()."styles/img/left-arrow.png";
	$rightImage = base_url()."styles/img/right-arrow.png";
	foreach ($data[0] as $categoryEntry) {
		$name = $categoryEntry['category_name'];
		echo "<br /><br />";
				echo "<div class=\"categories\" id=\"$count\">";
					echo "<p id=\"category_title\">$name</p><br />";
					
					echo "<div id=\"lista1\" class=\"als-container\">";
						echo "<span class=\"als-prev\"><img src=\"$leftImage\" alt=\"prev\" title=\"previous\" /></span>";

							echo "<div class=\"als-viewport\">";
							echo "<ul class=\"als-wrapper\">";
								

								/*foreach ($data[$count] as $foodEntry) {
									$image = base_url()."uploads/".$foodEntry['food_image'];
									//$image = base_url()."styles/img/burger.jpg";
									echo "<li class=\"als-item\">";
										echo "<img src=\"$image\" />";
										echo "<input type=\"number\" name=\"orderCount\" min=\"0\" max=\"50\"/>";
									echo "</li>";
								}

									if($count > 1){
										$image = base_url()."uploads/".$foodEntry['food_image'];
									//$image = base_url()."styles/img/burger.jpg";
										echo "<li class=\"als-item\">";
											echo "<img src=\"$image\" />";
											echo "<input type=\"number\" name=\"orderCount\" min=\"0\" max=\"50\"/>";
										echo "</li>";
									}
									*/

								foreach ($data[$count] as $foodEntry) {
									$image = base_url()."uploads/".$foodEntry['food_image'];
									$id = $foodEntry['food_id'];
									$name = $foodEntry['food_name'];
									$genId = $name."Ext";
									//$image = base_url()."styles/img/burger.jpg";
									echo "<li class=\"als-item\">";
									echo "<div class=\"orderInstance\" id=\"$genId\">";
									echo "<label for=\"$name\" onclick=\"javascript:toogleState('$name');\"><img src=\"$image\" height=\"100\" width=\"100\" alt=\"$name\" />$name</label>";
							        echo "<input type=\"checkbox\"  id=\"$name\" name=\"selectFoods\" class=\"orderBoxes\" value=\"$name\" />";
							        echo "</div>";

										//echo "<input type=\"number\" name=\"orderCount\" min=\"0\" max=\"50\"/>";
									echo "</li>";
								}

								/*if($count > 1){
									$image = base_url()."uploads/".$foodEntry['food_image'];
									$id = $foodEntry['food_id'];
									$name = $foodEntry['food_name'];
									//$image = base_url()."styles/img/burger.jpg";
									echo "<li class=\"als-item\">";
									echo "<div class=\"orderInstance\">";
									echo "<label for=\"$name\" onclick=\"javascript:toogleState('$name');\"><img src=\"$image\" height=\"100\" width=\"100\" alt=\"$name\" />$name</label>";
							        echo "<input type=\"checkbox\" id=\"$name\" name=\"selectFoods\" class=\"orderBoxes\" value=\"$name\" />";
							        echo "</div>";

										//echo "<input type=\"number\" name=\"orderCount\" min=\"0\" max=\"50\"/>";
									echo "</li>";
								}*/

							echo "</ul>";
							echo "</div>";
					
						echo "<span class=\"als-next\"><img src=\"$rightImage\" alt=\"next\" title=\"next\" /></span>";
					echo "</div>";
				echo "</div>";
	$count = $count + 1;
	}
?>
</form>

<div id="orderList">
</div>

<script type="text/javascript">
	removeBoxes3();
</script>