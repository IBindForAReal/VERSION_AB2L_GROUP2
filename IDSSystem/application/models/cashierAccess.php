<?php
class cashierAccess extends CI_Model {

	/*	queries for the database involving the accounts of the cashier 	*/

	/*	adds a new cashier to the system, it will return '' or the error number
		to determine if the operations was successful */
	function addNewCashier($name, $username, $password){
		$status = $this->db->query("INSERT into cashier (cashier_name, cashier_username, cashier_password) values ('$name', '$username', '$password')");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		return $this->error;
		}
		return '';
	}

	function getAllCashiers(){
		/* simply displays the names of all cashier for selection (drop down menu) */
		return $this->db->query("SELECT cashier_name from cashier order by cashier_name asc")->result_array();
	}

	function getCashierDetails($name){
		/* 	given the variable name, this function will select all the details whose cashier_name
			matches the variable $name */
		return $this->db->query("SELECT * from cashier where cashier_name='$name'")->result_array();
	}

	function editExistingCashier($name, $username, $password){
		/* 	given the name, username and password, this function will update/edit all the details
			whose cashier_name matches the variable $name */
		$status = $this->db->query("UPDATE cashier set cashier_username='$username', cashier_password='$password' where cashier_name='$name'");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		return $this->error;
		}
		return '';
	}

	function deleteExistingCashier($name){
		/* 	given the variable name, this function will delete all the details whose cashier_name
			matches the variable $name */
		$status = $this->db->query("DELETE from cashier where cashier_name='$name'");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		return $this->error;
		}
		return '';
	}
	/*
		This function checks if a category name is already existing
	*/
	function checkExistingName($name){
		return  $this->db->query("SELECT cashier_name from cashier where cashier_name='$name'")->result_array();
	}

		/*
		This function checks if a category username is already existing
	*/
	function checkExistingUsername($name){
		return  $this->db->query("SELECT cashier_username from cashier where cashier_username='$name'")->result_array();
	}

}

?>