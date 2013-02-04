<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class foodManager extends CI_Controller {

public function index(){
	$this->load->view('food');
}

public function addFood(){
	$name = $_POST['foodName'];
	$category = $_POST['foodCategory'];
	$description = $_POST['foodDesc'];
	$quantity = $_POST['foodQuantity'];
	$price = $_POST['foodPrice'];
	$image = $_POST['foodImg'];

	$this->foodAccess->addNewFood($name, $category, $description, $quantity, $price, $image);
}

}

?>