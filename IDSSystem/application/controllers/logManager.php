<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class logManager extends CI_Controller {

public function index(){				//this function directly go to log in page		
	$this->load->view('logIn');	
}

public function logout(){				//destroy all the sessions when the user logged out
	session_destroy();
	
	redirect(base_url());
}

/*	
	This function checks if the input value of the user exists in the database. 
	If the data does not exists, an error message will appear then redirect to the same page.
	It goes both for administrator and cashier.

*/
public function checkUser(){
		$userType = $_POST['user'];
		if($userType == 'admin'){
			$name = $_POST['login'];
			$password = $_POST['password'];
			$res = $this->logAccess->checkAdmin($name,$password);
			if(isset($res[0]['admin_name'])){
				$_SESSION['uname'] = $res[0]['admin_name'];			
				$_SESSION['adminLoggedIn'] = true; 	
				$_SESSION['cashierLoggedIn'] = false;

			
				$move = base_url()."index.php/inventory";
				header("Location: $move");

			}
			else{
				$this->session->set_flashdata('logInError', 'No match found for administrator!');
				redirect(base_url());
			}
		}
		else{
			$name = $_POST['login'];
			$password = $_POST['password'];
			$res = $this->logAccess->checkCashier($name,$password);
			if(isset($res[0]['cashier_name'])){
				$_SESSION['uname'] = $res[0]['cashier_name'];
				$_SESSION['cashierLoggedIn'] = true;
				$_SESSION['adminLoggedIn'] = false;

				
				$move = base_url()."index.php/transaction";
				header("Location: $move");
			}
			else{
				$this->session->set_flashdata('logInError', 'No match found for cashier!');
				redirect(base_url());
				
			}
		}
	}

/*
	This function direct the page to the previous page which is the inventory page for the log

*/
public function back(){
	
	$this->load->view('inventory');
}


}

?>