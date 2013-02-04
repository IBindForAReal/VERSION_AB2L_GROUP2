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

	$this->cashierAccess->addNewCashier($name, $username, $password);
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

	$this->cashierAccess->editExistingCashier($name, $username, $password);
}

public function deleteCashier(){
	$name = $_POST['cashierName'];

	$this->cashierAccess->deleteExistingCashier($name);
}

}

?>