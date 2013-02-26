<script type="text/javascript" src="<?php echo base_url();?>styles/js/order.js"></script>


<?php
$foodCount = 0;
$quantityList = $data[0];
$finalCost = 0;

foreach ($data[0] as $foodEntry){
	$foodCount++;
}


echo "<table>";
	echo "<tr>";
	echo "<th>Qty</th>";
	echo "<th style=\"width: 500px;\">Food Item</th>";
	echo "<th>Price</th>";
	echo "<th>Total</th>";
	echo "</tr>";


for($i = 1; $i <= $foodCount; $i++){
	$instance = $data[$i];
	$food = $instance[0];
	$name = $food['food_name'];

	$count = $instance[0];
	$price = $count['food_price'];
	$quantity = $quantityList[$i-1];

	$total = $price * $quantity;
	$finalCost += $total;
	echo "<tr>";
		echo "<td>$quantity</td>";
		echo "<td>$name</td>";
		echo "<td>$price</td>";
		echo "<td>$total</td>";
	echo "</tr>";
}

	echo "<tr>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td id=\"cost\">$finalCost</td>";
	echo "</tr>";

echo "</table>";
?>

	<a href='<?php echo base_url()."index.php/transaction"."#"; ?>'  id="backToOrder">BACK</a>
	<a href='<?php echo base_url()."index.php/transaction"."#"; ?>'  id="resetOrder">RESET</a>
	<a href='<?php echo base_url()."index.php/transaction"."#"; ?>'  id="finalizeOrder">FINALIZE</a>

<!--
<a href="#" id="backToOrder">BACK</a>
<a href="#" id="resetOrder">RESET</a>
<a href="#" id="finalizeOrder">ENLIST</a><br />\
-->