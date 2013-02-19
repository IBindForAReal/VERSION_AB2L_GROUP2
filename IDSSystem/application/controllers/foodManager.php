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
	$name = $_POST['foodName'];
	$category = $_POST['foodCategory'];
	$description = $_POST['foodDesc'];
	$quantity = $_POST['foodQuantity'];
	$price = $_POST['foodPrice'];
	$image = base_url()."uploads/".$_FILES['userfile']['name'];

	//print_r($_FILES['userfile']['name']);

	$this->foodAccess->addNewFood($name, $category, $description, $quantity, $price, $image);

	$res = $this->imageAccess->getImageCount();
		//print_r($res);
		//$data = array('upload_data' => $this->upload->data());
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());			
			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//print_r($data);
			$this->load->view('upload_success', $data);
		}
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

}

?>