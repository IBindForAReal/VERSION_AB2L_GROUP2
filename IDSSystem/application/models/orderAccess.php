<?php
class orderAccess extends CI_Model {
	//this function returns the category names from the database in the form of array
	function selectCategories(){
		return $this->db->query("SELECT category_name from category order by category_name asc")->result_array();
	}
	//this function returns the list of foods from the selected name of the category from the database in the form of array
	function foodGrouping($category){
		return $this->db->query("SELECT * from food where food_category='$category' order by food_name asc")->result_array();
	}
	//this function returns the details of the name of the food in the form of array
	function getSelectedFoodDetails($name){
		return $this->db->query("SELECT * from food where food_name='$name'")->result_array();
	}

	function getFoodRemaining($name){
		return $this->db->query("SELECT food_quantity from food where food_name='$name'")->result_array();
	}

}

?>