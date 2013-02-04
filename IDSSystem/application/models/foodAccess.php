<?php
class foodAccess extends CI_Model {
	function addNewFood($name, $category, $description, $quantity, $price, $image){
		$this->db->query("INSERT into food (food_name, food_category, food_description, food_quantity, food_price, food_image) values ('$name', '$category', '$description', '$quantity', '$price', '$image')");
	}
}
?>