<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class categoryManager extends CI_Controller {

/*
	This function views the category page.
*/

public function index(){
	$this->load->view('category');
}

/*
	This function is where adding of category takes place. It prints a message if a category has been added or not.
*/
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

	
}


/*
	This function gets all the details under the table cateegory in the database and put it in an array.
	All the categories will be an option for editing or deleting categories.
*/
public function obtainCategories(){
		$res = $this->categoryAccess->getAllCategories();
		$this->load->view('listOfCategories', array('categories'=>$res));
	}

/*
	This function gets the all the details of the selected category 
	and make them as the initial value in the text box to know the previous details of the category.
	It will go to the page where you can edit the details.
*/
public function obtainCategoryDetails(){
		$name = $_POST['categoryName'];
		$res = $this->categoryAccess->getCategoryDetails($name);
		$this->load->view('categoryDetails', array('details'=>$res));
	}
/*
	This function gets the new data of the category. If category name already exists there will be an error message
	and the editing of the category details will not be successful.
*/
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
/*
	This function deletes an existing category. If the category does not exists, there will be an error message.

*/
public function deleteCategory(){
	$name = $_POST['categoryName'];

	$status = $this->categoryAccess->deleteExistingCategory($name);
	if($status === ''){
		$this->load->view("message", array('message'=> $name.' has been deleted as a category.'));
	}
	else{
		$this->load->view("message", array('message'=> $name.' has not been deleted as a category.<br />error: '.$status));
	}
	
}
/*
	This function gets all the food under the selected category.
*/
public function obtainFoodUnderCategory(){
		$name = $_POST['categoryName'];
		$res = $this->categoryAccess->getFoodUnderCategory($name);
		$this->load->view('foodCategoryResults', array('foods'=>$res));
	}

/*
	This function checks if there is already an existing category name
*/
public function duplicateNameCheck(){
	$name = $_POST['categoryName'];

	$count = 0;

	$res = $this->categoryAccess->checkExistingName($name);
	foreach ($res as $res) {
		$count += 1;
	}
		echo $count;
}

}

?>