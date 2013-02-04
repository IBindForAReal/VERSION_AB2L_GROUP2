<?php
class logAccess extends CI_Model {
	function checkAdmin($name,$password){
		return $this->db->query("SELECT * from administrator where admin_username='$name' and admin_password='$password'")->result_array();
	}

	function checkCashier($name,$password){
		return $this->db->query("SELECT * from cashier where cashier_username='$name' and cashier_password='$password'")->result_array();
	}
}
?>