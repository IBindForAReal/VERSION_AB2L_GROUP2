<?php
class foodAccess extends CI_Model {
	function addNewFood($name, $category, $description, $quantity, $price, $image){
		$status = $this->db->query("INSERT into food (food_name, food_category, food_description, food_quantity, food_price, food_image) values ('$name', '$category', '$description', '$quantity', '$price', '$image')");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		//echo "error: " . $this->error;
    		//echo "error no: " . $this->errorno;
    		return $this->error;
		}
		return '';
	}

	function getAllFoods(){
		return $this->db->query("SELECT food_name from food")->result_array();
	}

	function getFoodDetails($name){
		return $this->db->query("SELECT * from food where food_name='$name'")->result_array();
	}

	function editExistingFood($name, $category, $description, $quantity, $price){
		$status = $this->db->query("UPDATE food set food_category='$category', food_description='$description', food_quantity='$quantity', food_price='$price' where food_name='$name'");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		//echo "error: " . $this->error;
    		//echo "error no: " . $this->errorno;
    		return $this->error;
		}
		return '';
	}

	function getAllDeleteFoods(){
		return $this->db->query("SELECT * from food")->result_array();
	}

	function deleteSelectedFoods($name){
		$this->db->query("DELETE from food where food_name='$name'");
	}

	function searchExistingPatterns($pattern){
		return $this->db->query("SELECT * from food where food_name like '%$pattern%'")->result_array();
	}
}
?>