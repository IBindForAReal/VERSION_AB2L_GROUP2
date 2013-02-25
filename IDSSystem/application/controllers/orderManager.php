<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class orderManager extends CI_Controller {

public function obtainCategorization(){
	$res = $this->orderAccess->selectCategories();
	$myArray = array();
	$myArray[] = $res;
	//$this->load->view('categorization', array('category'=>$res));

	foreach($res as $category){
     	$myArray[] = $this->orderAccess->foodGrouping($category['category_name']);
	 }
	 //print_r($myArray);
	$this->load->view('categorization', array('data'=>$myArray));
  }

 public function viewOrderSummary(){
	$data1 = json_decode(stripslashes($_POST['data1']));
	$data2 = json_decode(stripslashes($_POST['data2']));

	$myArray = array();
	$myArray[] = $data2;

  foreach($data1 as $name){
     $myArray[] = $this->orderAccess->getSelectedFoodDetails($name);
  }
	$this->load->view('foodSummary', array('data'=>$myArray));
}

}

?>