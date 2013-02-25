<?php
class orderAccess extends CI_Model {
	function selectCategories(){
		return $this->db->query("SELECT category_name from category")->result_array();
	}

	function foodGrouping($category){
		return $this->db->query("SELECT * from food where food_category='$category'")->result_array();
	}

	function getSelectedFoodDetails($name){
		return $this->db->query("SELECT * from food where food_name='$name'")->result_array();
	}

}

?>