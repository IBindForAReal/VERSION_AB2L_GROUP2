<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class foodManager extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}

public function index(){
	$this->load->view('food', array('error' => ' ' ));
}

public function addFood(){
   $status = "";
   $msg = "";
   $file_element_name = 'userfile';

    $config['upload_path'] = './uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']	= '100';
	$config['max_width']  = '1024';
	$config['max_height']  = '768';

      $this->load->library('upload', $config);
      $name = $_SESSION['foodName'];
      if (!$this->upload->do_upload($file_element_name))
      {
         $status = 'error';
         $errorFound = $this->upload->display_errors('', '');
         $msg = $name.' has not been added as a food.<br>error: '.$errorFound;
      }
      else
      {
         $data = $this->upload->data();

	    $name = $_SESSION['foodName'];
		$category = $_SESSION['foodCategory'];
		$description = $_SESSION['foodDesc'];
		$quantity = $_SESSION['foodQuantity'];
		$price = $_SESSION['foodPrice'];

		$image = $data['file_name'];

         $file_id = $this->foodAccess->addNewFood($name, $category, $description, $quantity, $price, $image);
         if($file_id == '')
         {
            $status = "success";
            $msg = $name.' has been added as a food.';
         }
         else
         {
            unlink($data['full_path']);
            $status = "error";
         	$msg = $name.' has not been added as a food.<br>error: '.$file_id;
         }
      }
      unset($_SESSION['foodName']);
      unset($_SESSION['foodCategory']);
      unset($_SESSION['foodDesc']);
      unset($_SESSION['foodQuantity']);
      unset($_SESSION['foodPrice']);
      @unlink($_FILES[$file_element_name]);
   echo json_encode(array('status' => $status, 'msg' => $msg));
}

public function obtainFoodCategories(){
	$res = $this->categoryAccess->getAllCategories();
	$this->load->view('listOfFoodCategories', array('categories'=>$res));
}

public function obtainFoods(){
		$res = $this->foodAccess->getAllFoods();
		$this->load->view('listOfFoods', array('foods'=>$res));
	}

public function obtainFoodDetails(){
		$name = $_POST['foodName'];
		$res = $this->foodAccess->getFoodDetails($name);
		$this->load->view('foodDetails', array('details'=>$res));
	}

public function setFoodDetails(){
	$_SESSION['foodName'] = $_POST['foodName'];
	$_SESSION['foodCategory'] = $_POST['foodCategory'];
	$_SESSION['foodDesc'] = $_POST['foodDesc'];
	$_SESSION['foodQuantity'] = $_POST['foodQuantity'];
	$_SESSION['foodPrice'] = $_POST['foodPrice'];
}

public function editFood(){
	$name = $_POST['foodName'];
	$category = $_POST['foodCategory'];
	$description = $_POST['foodDesc'];
	$quantity = $_POST['foodQuantity'];
	$price = $_POST['foodPrice'];

	$status = $this->foodAccess->editExistingFood($name, $category, $description, $quantity, $price);
	if($status === ''){
		$this->load->view("message", array('message'=> $name.' has been edited as a food.'));
	}
	else{
		$this->load->view("message", array('message'=> $name.' has not been edited as a food.<br />error: '.$status));
	}
	//$this->load->view("category", array('message'=> $name.' has been edited.'));
}

public function obtainDeleteFood(){
	$res = $this->foodAccess->getAllDeleteFoods();
	$this->load->view('listOfSelectableFoods', array('foods'=>$res));
}

public function deleteFoods(){
	$data = json_decode(stripslashes($_POST['data']));
	$deletedFoods = "none";
  // here i would like use foreach:

  foreach($data as $name){
     $this->foodAccess->deleteSelectedFoods($name);
	 if($deletedFoods == "none"){
	 	$deletedFoods = $name;
	 }
	 else{
	 	$deletedFoods = $deletedFoods.", ".$name;
	 }
  }
	$this->load->view("message", array('message'=> $deletedFoods.' had been deleted in the list of foods.'));

}

public function obtainSearchFoods(){
	$pattern = $_POST['foundPattern'];

	$res = $this->foodAccess->searchExistingPatterns($pattern);
	$this->load->view('searchResults', array('foods'=>$res));
}

}

?>