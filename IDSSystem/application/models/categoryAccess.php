<?php
class categoryAccess extends CI_Model {

	/*
		This function is inserts the added category in the database.
	*/
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



	/*
		This function gets all the details under the table category.
	*/
	function getAllCategories(){
		return $this->db->query("SELECT category_name from category")->result_array();
	}



	/*
		This function gets only the row that is equal to the name entered by the user and the existing category name in the databse.
	*/
	function getCategoryDetails($name){
		return $this->db->query("SELECT * from category where category_name='$name'")->result_array();
	}

	

	/*
		This function replace all the details edited by the user in an existing category in the database.
	*/
	function editExistingCategory($name, $description){
		$status = $this->db->query("UPDATE category set category_description='$description' where category_name='$name'");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();
    		return $this->error;
		}
		return '';
	}



	/*
		This function deletes the row of the selected category name in the database. If it does not exist, an error message will appear.
	*/
	function deleteExistingCategory($name){
		$status = $this->db->query("DELETE from category where category_name='$name'");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();
    		return $this->error;
		}
		return '';
	}

	/*
		This function gets all the rows of the food under the selected category name.
	*/
	function getFoodUnderCategory($name){
		return $this->db->query("SELECT * from food where food_category='$name'")->result_array();
	}

	/*
	This function checks if a category name is already existing
	*/
	function checkExistingName($name){
		return  $this->db->query("SELECT category_name from category where category_name='$name'")->result_array();
	}

}

?>