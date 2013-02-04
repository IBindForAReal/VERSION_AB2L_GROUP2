<?php
class cashierAccess extends CI_Model {
	function addNewCashier($name, $username, $password){
		$this->db->query("INSERT into cashier (cashier_name, cashier_username, cashier_password) values ('$name', '$username', '$password')");
	}

	function getAllCashiers(){
		return $this->db->query("SELECT cashier_name from cashier")->result_array();
	}

	function getCashierDetails($name){
		return $this->db->query("SELECT * from cashier where cashier_name='$name'")->result_array();
	}

	function editExistingCashier($name, $username, $password){
		$this->db->query("UPDATE cashier set cashier_username='$username', cashier_password='$password' where cashier_name='$name'");
	}

	function deleteExistingCashier($name){
		$this->db->query("DELETE from cashier where cashier_name='$name'");
	}

}

?>