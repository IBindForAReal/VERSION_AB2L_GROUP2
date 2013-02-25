<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class logManager extends CI_Controller {

public function index(){
	$this->load->view('logIn');
}

public function logout(){
	session_destroy();
	
	redirect(base_url());
}

public function checkUser(){
		$userType = $_POST['user'];
		if($userType == 'admin'){
			$name = $_POST['login'];
			$password = $_POST['password'];
			$res = $this->logAccess->checkAdmin($name,$password);
			if(isset($res[0]['admin_name'])){
				$_SESSION['uname'] = $res[0]['admin_name'];			// sets $_SESSION variables		
				$_SESSION['adminLoggedIn'] = true; 		// this variable is used by other functions to check if someone is logged in
				$_SESSION['cashierLoggedIn'] = false;

				//$this->load->view('inventory');
				$move = base_url()."index.php/inventory";
				header("Location: $move");

			}
			else{
				$this->session->set_flashdata('logInError', 'No match found for administrator!');
				redirect(base_url());
				//$this->load->view('errorMessage', array('message'=>'No match found for administrator!'));
			}
		}
		else{
			$name = $_POST['login'];
			$password = $_POST['password'];
			$res = $this->logAccess->checkCashier($name,$password);
			if(isset($res[0]['cashier_name'])){
				$_SESSION['uname'] = $res[0]['cashier_name'];
				$_SESSION['cashierLoggedIn'] = true; 	// this variable is used by other functions to check if someone is logged in
				$_SESSION['adminLoggedIn'] = false;

				//$this->load->view('transaction');
				$move = base_url()."index.php/transaction";
				header("Location: $move");
			}
			else{
				$this->session->set_flashdata('logInError', 'No match found for cashier!');
				redirect(base_url());
				//$this->load->view('logIn', array('message'=>'No match found for cashier!'));
			}
		}
	}

public function back(){
	//$this->load->view('inventory',array('admin'=>$res));
	$this->load->view('inventory');
}


}

?>