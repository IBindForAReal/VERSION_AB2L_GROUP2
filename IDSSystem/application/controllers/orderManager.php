<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class orderManager extends CI_Controller {

public function obtainCategorization(){
	$res = $this->orderAccess->selectCategories();
	$myArray = array();
	$myArray[] = $res;
	//$this->load->view('categorization', array('category'=>$res));

	foreach($res as $category){
     	$myArray[] = $this->orderAccess->foodGrouping($category['category_name']);
	 }
	$this->load->view('categorization', array('data'=>$myArray));
  }

public function obtainMaxCount(){
	$name = $_POST['foodName'];
	$res = $this->orderAccess->getFoodRemaining($name);
	//print_r($res[0]['food_quantity']);
	$max = $res[0]['food_quantity'];
	echo $max;
	//echo $res[0]['food_quantity'];
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

 public function xmlAddOrder(){
	$data1 = json_decode(stripslashes($_POST['data1']));
	$data2 = json_decode(stripslashes($_POST['data2']));
	$cost = $_POST['cost'];

 	$cashierName = $this->session->userdata('uname'); 
 	$date = date("m/d/Y");

	//$file_name = base_url().'database/records.xml';

	$xmldoc = new DOMDocument();
	$xmldoc->load('records.xml');
	$xmldoc->formatOutput = true;
	$xpath = new DOMXPath($xmldoc); //for searching the node in xml
	$x = $xmldoc->documentElement;

	$flag = 0;//for searching if the date is stored in the xml
	$match = 0;

	foreach($x->childNodes as $main){
		if($main->nodeName == "info"){
			foreach($main->childNodes as $info){
				if($info->nodeName == "date"){
					if($info->nodeValue == $date){
						$flag = 1;
						break;
					}
				}
			}
		}
	}

	if($flag == 0){	//if there is no xml info on the earnings on the current date
		$infoNode = $xmldoc->createElement("info");
		$dateNode = $xmldoc->createElement("date");
		$dateText = $xmldoc->createTextNode($date);
		$dateNode->appendChild($dateText);
		$infoNode->appendChild($dateNode);

		$res = $this->cashierAccess->getAllCashiers();

		foreach($res as $cashierInstance){
			$cashierNode = $xmldoc->createElement("cashier");
			$cnameNode = $xmldoc->createElement("cname");
			$cnameText = $xmldoc->createTextNode($cashierInstance['cashier_name']);
			$cnameNode->appendChild($cnameText);
			$cashierNode->appendChild($cnameNode);
			$infoNode->appendChild($cashierNode);
		}

		$x->appendChild($infoNode);
		$xmldoc->save('records.xml');

		$xmldoc = new DOMDocument();
		$xmldoc->load('records.xml');
		$xmldoc->formatOutput = true;
		$xpath = new DOMXPath($xmldoc); //for searching the node in xml
		$x = $xmldoc->documentElement;
	}


	foreach($x->childNodes as $main){	//identifies the cashier who entered the order then adds the ordered food
		if($main->nodeName == "info"){
			foreach($main->childNodes as $info){
				if($info->nodeName == "date"){
					if($info->nodeValue == $date){
						$cashier = $info->nextSibling;
						while($match == 0){
							if($cashier->nodeName == "cashier"){
								foreach($cashier->childNodes as $cashierInfo){
									if($cashierInfo->nodeName == "cname"){
										if($cashierInfo->nodeValue == $cashierName){
											$match = 1;
											$earningNode = $xmldoc->createElement("earnings");
											$earningText = $xmldoc->createTextNode($cost);
											$earningNode->appendChild($earningText);
											$cashier->appendChild($earningNode);
											$xmldoc->save('records.xml');
										}
										else{
											$cashier = $cashier->nextSibling;
										}
									}
								}
							}
						}
					}
					else{
						break;
					}
				}
			}
		}
	}
 }

}

?>