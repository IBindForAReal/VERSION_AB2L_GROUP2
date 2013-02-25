<?php
class categoryAccess extends CI_Model {
	function addNewCategory($name, $description){
		$status = $this->db->query("INSERT into category (category_name, category_description) values ('$name', '$description')");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		//echo "error: " . $this->error;
    		//echo "error no: " . $this->errorno;
    		return $this->error;
		}
		return '';
	}

	function getAllCategories(){
		return $this->db->query("SELECT category_name from category")->result_array();
	}

	function getCategoryDetails($name){
		return $this->db->query("SELECT * from category where category_name='$name'")->result_array();
	}

	function editExistingCategory($name, $description){
		$status = $this->db->query("UPDATE category set category_description='$description' where category_name='$name'");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		//echo "error: " . $this->error;
    		//echo "error no: " . $this->errorno;
    		return $this->error;
		}
		return '';
	}

	function deleteExistingCategory($name){
		$status = $this->db->query("DELETE from category where category_name='$name'");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		//echo "error: " . $this->error;
    		//echo "error no: " . $this->errorno;
    		return $this->error;
		}
		return '';
	}

	function getFoodUnderCategory($name){
		return $this->db->query("SELECT * from food where food_category='$name'")->result_array();
	}

}

?>