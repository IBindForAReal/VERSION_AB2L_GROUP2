<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cashierManager extends CI_Controller {

public function index(){
	$this->load->view('cashier');
}


public function addCashier(){
	/*gets the necessary information from the submitted form*/
	$name = $_POST['cashierName'];
	$username = $_POST['cashierUsername'];
	$password = $_POST['cashierPassword'];

	/*	calls the addNewCashier function in cashierAccess.php (in models) to add the new account
	and it will return a status which will determine if the new account was successfully added */
	$status = $this->cashierAccess->addNewCashier($name, $username, $password);
	if($status == ''){
		$this->load->view("message", array('message'=> $name.' has been added as a cashier.'));
	}else{
		$this->load->view("message", array('message'=> $name.' has not been added as a cashier.<br />error'.$status));
	}
}

public function obtainCashiers(){
	/* 	calls the getAllCashiers function in cashierAccess.php (in models) to
		display the names of all cashier for selection (drop down menu) */
		$res = $this->cashierAccess->getAllCashiers();
		$this->load->view('listOfCashiers', array('cashiers'=>$res));
	}

public function obtainCashierDetails(){
	/* 	calls the getCashierDetails function in cashierAccess.php (in models) to
		view all the details of the cashierName chosen by the user */
		$name = $_POST['cashierName'];
		$res = $this->cashierAccess->getCashierDetails($name);
		$this->load->view('cashierDetails', array('details'=>$res));
	}

public function editCashier(){
	/*gets the necessary information from the submitted form*/
	$name = $_POST['cashierName'];
	$username = $_POST['cashierUsername'];
	$password = $_POST['cashierPassword'];

	/*	calls the editExistingCashier function in cashierAccess.php (in models) to edit the account
	and it will return a status which will determine if the account was successfully edited */	
	$status = $this->cashierAccess->editExistingCashier($name, $username, $password);
	if($status === ''){
		$this->load->view("message", array('message'=> $name.' has been edited.'));
	}else{
		$this->load->view("message", array('message'=> $name.' has not been edited.<br />error'.$status));
	}
}

public function deleteCashier(){
	/* this is what the user selected from the list of cashiers */
	$name = $_POST['cashierName'];

	/*	calls the deleteExistingCashier function in cashierAccess.php (in models) to delete the account
	and it will return a status which will determine if the account was successfully deleted */
	$status = $this->cashierAccess->deleteExistingCashier($name);
	if($status === ''){
		$this->load->view("message", array('message'=> $name.' has been deleted.'));
	}else{
		$this->load->view("message", array('message'=> $name.' has not been deleted as a cashier.<br />error'.$status));
	}
}

/*
	This function checks if there is already an existing cashier name
*/
public function duplicateNameCheck(){
	$name = $_POST['cashierName'];

	$count = 0;

	$res = $this->cashierAccess->checkExistingName($name);
	foreach ($res as $res) {
		$count += 1;
	}
		echo $count;
}

/*
	This function checks if there is already an existing cashier name
*/
public function duplicateUsernameCheck(){
	$name = $_POST['cashierUsername'];

	$count = 0;

	$res = $this->cashierAccess->checkExistingUsername($name);
	foreach ($res as $res) {
		$count += 1;
	}
		echo $count;
}

}

?>