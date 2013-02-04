<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class logManager extends CI_Controller {

public function index(){
	$this->load->view('logIn');
}

public function checkUser(){
		$userType = $this->input->post('user');
		if($userType == 'admin'){
			$name = $_POST['login'];
			$password = $_POST['password'];
			$res = $this->logAccess->checkAdmin($name,$password);
			if(isset($res[0]['admin_name'])){
				//$this->load->view('inventory',array('admin'=>$res));
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
				$this->load->view('transaction',array('cashier'=>$res));
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