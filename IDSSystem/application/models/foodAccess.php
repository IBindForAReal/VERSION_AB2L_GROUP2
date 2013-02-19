<?php
class foodAccess extends CI_Model {
	function addNewFood($name, $category, $description, $quantity, $price, $image){
		$this->db->query("INSERT into food (food_name, food_category, food_description, food_quantity, food_price, food_image) values ('$name', '$category', '$description', '$quantity', '$price', '$image')");
	}

	function getAllFoods(){
		return $this->db->query("SELECT food_name from food")->result_array();
	}

	function getFoodDetails($name){
		return $this->db->query("SELECT * from food where food_name='$name'")->result_array();
	}
}
?>