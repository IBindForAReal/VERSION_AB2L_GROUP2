<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class inventory extends CI_Controller {

public function index(){
	$this->load->view('inventory');
}

}