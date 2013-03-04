<?php
class logAccess extends CI_Model {

	/*
		This function checks if the cadmin name and password entered by the user matched the data in the database then put it in an array.

	*/
	function checkAdmin($name,$password){
		return $this->db->query("SELECT * from administrator where admin_username='$name' and admin_password='$password'")->result_array();
	}
	/*
		This function checks if the cashier name and password entered by the user matched the data in the database then put it in an array.

	*/
	function checkCashier($name,$password){
		return $this->db->query("SELECT * from cashier where cashier_username='$name' and cashier_password='$password'")->result_array();
	}
}
?>