<?php
class categoryAccess extends CI_Model {
	function addNewCategory($name, $description){
		$this->db->query("INSERT into category (category_name, category_description) values ('$name', '$description')");
	}

	function getAllCategories(){
		return $this->db->query("SELECT category_name from category")->result_array();
	}

	function getCategoryDetails($name){
		return $this->db->query("SELECT * from category where category_name='$name'")->result_array();
	}

	function editExistingCategory($name, $description){
		$this->db->query("UPDATE category set category_description='$description' where category_name='$name'");
	}

	function deleteExistingCategory($name){
		$this->db->query("DELETE from category where category_name='$name'");
	}

	function getFoodUnderCategory($name){
		return $this->db->query("SELECT food_name from food where food_category='$name'")->result_array();
	}

}

?>