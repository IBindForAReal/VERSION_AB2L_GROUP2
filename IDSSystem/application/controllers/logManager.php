<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class logManager extends CI_Controller {

public function index(){
	$this->load->view('logIn');
}

public function logout(){
	unset($_SESSION['name']);
	unset($_SESSION['uname']);
	unset($_SESSION['pword']);
	$_SESSION['adminLoggedIn'] = false;
	$_SESSION['cashierLoggedIn'] = false;
	
	$this->load->view('logIn');
}

public function checkUser(){
		$userType = $this->input->post('user');
		if($userType == 'admin'){
			$name = $_POST['login'];
			$password = $_POST['password'];
			$res = $this->logAccess->checkAdmin($name,$password);
			if(isset($res[0]['admin_name'])){
				$_SESSION['uname'] = $name;			// sets $_SESSION variables		
				$_SESSION['pword'] = $password;
				$_SESSION['name'] =$res[0]['admin_name'];
				$_SESSION['adminLoggedIn'] = true; 		// this variable is used by other functions to check if someone is logged in
				$_SESSION['cashierLoggedIn'] = false;

				$this->load->view('inventory');
			}
			else{
				$this->load->view('logIn', array('message'=>'No match found for administrator!'));
			}
		}
		else{
			$name = $_POST['login'];
			$password = $_POST['password'];
			$res = $this->logAccess->checkCashier($name,$password);
			if(isset($res[0]['cashier_name'])){
				$_SESSION['uname'] = $name;
				$_SESSION['pword'] = $password;
				$_SESSION['name'] = $res[0]['cashier_name'];
				$_SESSION['cashierLoggedIn'] = true; 	// this variable is used by other functions to check if someone is logged in
				$_SESSION['adminLoggedIn'] = false;
				$this->load->view('transaction');
			}
			else{
				$this->load->view('logIn', array('message'=>'No match found for cashier!'));
			}
		}
	}

public function back(){
	//$this->load->view('inventory',array('admin'=>$res));
	$this->load->view('inventory');
}


}

?>