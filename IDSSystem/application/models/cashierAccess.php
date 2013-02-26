<?php
class cashierAccess extends CI_Model {
	function addNewCashier($name, $username, $password){
		$status = $this->db->query("INSERT into cashier (cashier_name, cashier_username, cashier_password) values ('$name', '$username', '$password')");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		//echo "error: " . $this->error;
    		//echo "error no: " . $this->errorno;
    		return $this->error;
		}
		return '';
	}

	function getAllCashiers(){
		return $this->db->query("SELECT cashier_name from cashier")->result_array();
	}

	function getCashierDetails($name){
		return $this->db->query("SELECT * from cashier where cashier_name='$name'")->result_array();
	}

	function editExistingCashier($name, $username, $password){
		$status = $this->db->query("UPDATE cashier set cashier_username='$username', cashier_password='$password' where cashier_name='$name'");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		//echo "error: " . $this->error;
    		//echo "error no: " . $this->errorno;
    		return $this->error;
		}
		return '';
	}

	function deleteExistingCashier($name){
		$status = $this->db->query("DELETE from cashier where cashier_name='$name'");
		if(!$status){
			$this->error = $this->db->_error_message();
    		$this->errorno = $this->db->_error_number();

    		//echo "error: " . $this->error;
    		//echo "error no: " . $this->errorno;
    		return $this->error;
		}
		return '';
	}

}

?>