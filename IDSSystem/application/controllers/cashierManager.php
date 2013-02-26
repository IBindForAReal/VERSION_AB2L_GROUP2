<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class cashierManager extends CI_Controller {

public function index(){
	$this->load->view('cashier');
}

public function addCashier(){
	$name = $_POST['cashierName'];
	$username = $_POST['cashierUsername'];
	$password = $_POST['cashierPassword'];

	$status = $this->cashierAccess->addNewCashier($name, $username, $password);
	if($status == ''){
		$this->load->view("message", array('message'=> $name.' has been added as a cashier.'));
	}else{
		$this->load->view("message", array('message'=> $name.' has not been added as a cashier.<br />error'.$status));
	}
}

public function obtainCashiers(){
		$res = $this->cashierAccess->getAllCashiers();
		$this->load->view('listOfCashiers', array('cashiers'=>$res));
	}

public function obtainCashierDetails(){
		$name = $_POST['cashierName'];
		$res = $this->cashierAccess->getCashierDetails($name);
		$this->load->view('cashierDetails', array('details'=>$res));
	}

public function editCashier(){
	$name = $_POST['cashierName'];
	$username = $_POST['cashierUsername'];
	$password = $_POST['cashierPassword'];

	$status = $this->cashierAccess->editExistingCashier($name, $username, $password);
	if($status === ''){
		$this->load->view("message", array('message'=> $name.' has been edited.'));
	}else{
		$this->load->view("message", array('message'=> $name.' has not been edited.<br />error'.$status));
	}
}

public function deleteCashier(){
	$name = $_POST['cashierName'];

	$status = $this->cashierAccess->deleteExistingCashier($name);
	if($status === ''){
		$this->load->view("message", array('message'=> $name.' has been deleted.'));
	}else{
		$this->load->view("message", array('message'=> $name.' has not been deleted as a cashier.<br />error'.$status));
	}
}

}

?>