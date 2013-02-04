<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class categoryManager extends CI_Controller {

public function index(){
	$this->load->view('category');
}

public function addCategory(){
	$name = $_POST['categoryName'];
	$description = $_POST['categoryDesc'];

	$this->categoryAccess->addNewCategory($name, $description);
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

	$this->categoryAccess->editExistingCategory($name, $description);
}

public function deleteCategory(){
	$name = $_POST['categoryName'];

	$this->categoryAccess->deleteExistingCategory($name);
}

public function obtainFoodUnderCategory(){
		$name = $_POST['categoryName'];
		$res = $this->categoryAccess->getFoodUnderCategory($name);
		$this->load->view('foodUnderCategory', array('food'=>$res));
	}

}

?>