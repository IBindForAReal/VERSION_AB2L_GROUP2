<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logManager extends CI_Controller {

public function index(){
	$this->load->view('logIn');							//this function directly go to log in page
}

public function logout(){								//destroy all the sessions when the user logged out
	$this->session->sess_destroy();
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
			$name = $_POST['username'];
			$password = $_POST['password'];
			$res = $this->logAccess->checkAdmin($name,$password);
			if(isset($res[0]['admin_name'])){	
				$newdata = array(
                   'uname'  => $res[0]['admin_name'],
                   'logged_in' => TRUE
               );
				$this->session->set_userdata($newdata);
				$move = base_url()."index.php/inventory";
				header("Location: $move");
			}
			else{
				$this->session->set_flashdata('logInError', 'No match found for administrator!');
				redirect(base_url());
			}
		}
		else{
			$name = $_POST['username'];
			$password = $_POST['password'];
			$res = $this->logAccess->checkCashier($name,$password);
			if(isset($res[0]['cashier_name'])){
				$newdata = array(
                   'uname'  => $res[0]['cashier_name'],
                   'logged_in' => TRUE
               );
				$this->session->set_userdata($newdata);
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
	This function direct the page to the previous page which is the inventory page
*/
public function back(){
	$this->load->view('inventory');
}


}

?>