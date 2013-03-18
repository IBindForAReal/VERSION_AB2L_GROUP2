<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class earningManager extends CI_Controller {

public function index(){
	$this->load->view('earning');
}

public function obtainCashiersEarnings(){
	$currentDate = $_POST['date'];

	$xmldoc = new DOMDocument();
	//loads records.xml
	$xmldoc->load('records.xml');
	//searches the xml file with the tag named <info> to get its elements
	$info = $xmldoc->getElementsByTagName("info");
	//prints the date so that it will identify which date 
	echo "Date: ".$currentDate;
	echo "<br /><br />";

	foreach($info as $infos){
		//searches the xml file with the tag named <date> under <info> to get its elements
		$date = $infos->getElementsByTagName("date");
		$dateInfo = $date->item(0)->nodeValue;
		//searches the xml file with the tag named <cashier> under <date> to get its elements
		//under the current date, if it is equal in the date inside the <info>
		if($dateInfo == $currentDate){
			$cashier = $infos->getElementsByTagName("cashier");
			foreach($cashier as $cashiers){
				//gets the name of the cashier through the element's node value
				$cname = $cashiers->getElementsByTagName("cname");
				$cnameInfo = $cname->item(0)->nodeValue;
				//sets the cashier earning to 0 to compute for the total earnings in each cashier
				$cashierEarning = 0;

				$earned = $cashiers->getElementsByTagName("earnings");
				foreach($earned as $instanceEarned){
					$earning = $instanceEarned->nodeValue;
					//echo $instanceEarned->item(0)->nodeValue;
					//increments the total earnings in each cashier
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
//this function does the same as above, instead it computes for the earnings in all cashiers vased on the specified date
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

//this goes the same for this function, but it only computes for the earnings for every cashier
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

//this function computes for the total earnings of all cashiers not minding the date
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