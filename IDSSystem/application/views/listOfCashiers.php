<select name="cashierName" id="cashierName">
<?php
foreach ($cashiers as $entry) {
	echo "<option value=".$entry['cashier_name'].">".$entry['cashier_name']."</option>";
}
?>
</select>