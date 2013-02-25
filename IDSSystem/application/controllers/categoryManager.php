<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class categoryManager extends CI_Controller {

public function index(){
	$this->load->view('category');
}

public function addCategory(){
	$name = $_POST['categoryName'];
	$description = $_POST['categoryDesc'];

	$status = $this->categoryAccess->addNewCategory($name, $description);
	if($status === ''){
		$this->load->view("message", array('message'=> $name.' has been added as a category.'));
	}
	else{
		$this->load->view("message", array('message'=> $name.' has not been added as a category.<br />error: '.$status));
	}

	//$this->load->view("category", array('message'=> $name.' has been added as a category.'));
}

public function obtainCategories(){
		$res = $this->categoryAccess->getAllCategories();
		$this->load->view('listOfCategories', array('categories'=>$res));
	}

public function obtainCategoryDetails(){
		$name = $_POST['categoryName'];
		$res = $this->categoryAccess->getCategoryDetails($name);
		$this->load->view('categoryDetails', array('details'=>$res));
	}

public function editCategory(){
	$name = $_POST['categoryName'];
	$description = $_POST['categoryDesc'];

	$status = $this->categoryAccess->editExistingCategory($name, $description);
	if($status === ''){
		$this->load->view("message", array('message'=> $name.' has been edited as a category.'));
	}
	else{
		$this->load->view("message", array('message'=> $name.' has not been edited as a category.<br />error: '.$status));
	}
	//$this->load->view("category", array('message'=> $name.' has been edited.'));
}

public function deleteCategory(){
	$name = $_POST['categoryName'];

	$status = $this->categoryAccess->deleteExistingCategory($name);
	if($status === ''){
		$this->load->view("message", array('message'=> $name.' has been deleted as a category.'));
	}
	else{
		$this->load->view("message", array('message'=> $name.' has not been deleted as a category.<br />error: '.$status));
	}
	//$this->load->view("category", array('message'=> $name.' has been deleted.'));
}

public function obtainFoodUnderCategory(){
		$name = $_POST['categoryName'];
		$res = $this->categoryAccess->getFoodUnderCategory($name);
		$this->load->view('foodCategoryResults', array('foods'=>$res));
	}

}

?>