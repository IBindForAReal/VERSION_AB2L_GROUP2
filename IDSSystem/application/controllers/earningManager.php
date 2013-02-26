<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class earningManager extends CI_Controller {

public function index(){
	$this->load->view('earning');
}

public function obtainCashiersEarnings(){
	$currentDate = $_POST['date'];

	$xmldoc = new DOMDocument();
	$xmldoc->load('records.xml');

	$info = $xmldoc->getElementsByTagName("info");

	echo "Date: ".$currentDate;
	echo "<br /><br />";

	foreach($info as $infos){
		$date = $infos->getElementsByTagName("date");
		$dateInfo = $date->item(0)->nodeValue;

		if($dateInfo == $currentDate){
			$cashier = $infos->getElementsByTagName("cashier");
			foreach($cashier as $cashiers){
				$cname = $cashiers->getElementsByTagName("cname");
				$cnameInfo = $cname->item(0)->nodeValue;
				$cashierEarning = 0;

				$earned = $cashiers->getElementsByTagName("earnings");
				foreach($earned as $instanceEarned){
					$earning = $instanceEarned->nodeValue;
					//echo $instanceEarned->item(0)->nodeValue;
					$cashierEarning += $earning;
					//echo "		", $i, ": Name: ", $foodNameInfo, "<br />		  Price: ", $foodPriceInfo, "<br />";
				}
				echo $cnameInfo." : ".$cashierEarning;
			echo "<br /><br />";
			}
			break;
		}
		//echo "<br /><br />";
	}
}

public function obtainDateEarning(){
	$currentDate = $_POST['date'];

	$xmldoc = new DOMDocument();
	$xmldoc->load('records.xml');

	$info = $xmldoc->getElementsByTagName("info");

	echo "Date: ".$currentDate;
	echo "<br /><br />";

	$totalEarning = 0;

	foreach($info as $infos){
		$date = $infos->getElementsByTagName("date");
		$dateInfo = $date->item(0)->nodeValue;

		if($dateInfo == $currentDate){
			$cashier = $infos->getElementsByTagName("cashier");
			foreach($cashier as $cashiers){
				$earned = $cashiers->getElementsByTagName("earnings");
				foreach($earned as $instanceEarned){
					$earning = $instanceEarned->nodeValue;
					//echo $instanceEarned->item(0)->nodeValue;
					$totalEarning += $earning;
					//echo "		", $i, ": Name: ", $foodNameInfo, "<br />		  Price: ", $foodPriceInfo, "<br />";
				}
			}
			echo "Total Earning : ".$totalEarning;
			echo "<br /><br />";
			break;
		}
		//echo "<br /><br />";
	}
}

public function obtainIndividualEarning(){
	$currentCashier = $_POST['name'];

	$xmldoc = new DOMDocument();
	$xmldoc->load('records.xml');

	$info = $xmldoc->getElementsByTagName("info");

	foreach($info as $infos){
		$date = $infos->getElementsByTagName("date");
		$dateInfo = $date->item(0)->nodeValue;
 
		$cashierEarning = 0;
		//if($dateInfo == $currentDate){
			$cashier = $infos->getElementsByTagName("cashier");
			foreach($cashier as $cashiers){
				$cname = $cashiers->getElementsByTagName("cname");
				$cnameInfo = $cname->item(0)->nodeValue;

				if($cnameInfo == $currentCashier){
					$earned = $cashiers->getElementsByTagName("earnings");
					foreach($earned as $instanceEarned){
						$earning = $instanceEarned->nodeValue;
						//echo $instanceEarned->item(0)->nodeValue;
						$cashierEarning += $earning;
						//echo "		", $i, ": Name: ", $foodNameInfo, "<br />		  Price: ", $foodPriceInfo, "<br />";
					}
					echo $dateInfo." : ".$cashierEarning;
					echo "<br /><br />";
					break;
				}
			}
		//}
		//echo "<br /><br />";
	}
}

public function obtainCashierTotal(){
	$currentCashier = $_POST['name'];

	$xmldoc = new DOMDocument();
	$xmldoc->load('records.xml');

	$info = $xmldoc->getElementsByTagName("info");

	$totalEarning = 0;

	foreach($info as $infos){
		$date = $infos->getElementsByTagName("date");
		$dateInfo = $date->item(0)->nodeValue;
 
		//if($dateInfo == $currentDate){
			$cashier = $infos->getElementsByTagName("cashier");
			foreach($cashier as $cashiers){
				$cname = $cashiers->getElementsByTagName("cname");
				$cnameInfo = $cname->item(0)->nodeValue;

				if($cnameInfo == $currentCashier){
					$earned = $cashiers->getElementsByTagName("earnings");
					foreach($earned as $instanceEarned){
						$earning = $instanceEarned->nodeValue;
						//echo $instanceEarned->item(0)->nodeValue;
						$totalEarning += $earning;
						//echo "		", $i, ": Name: ", $foodNameInfo, "<br />		  Price: ", $foodPriceInfo, "<br />";
					}
					break;
				}
			}
		//}
		//echo "<br /><br />";
	}
	echo "Total Earnings: ".$totalEarning;
	echo "<br /><br />";
}

}

?>