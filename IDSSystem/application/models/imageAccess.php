<?php
class imageAccess extends CI_Model {
	function addNewImage($fileName, $fileType, $fileSize, $imgContent){
		$this->db->query("INSERT into img_tbl (img_name, img_type, img_size, img_data) values ('$fileName', '$fileType', '$fileSize', '$imgContent')");
	}

	function getAllImages(){
		return $this->db->query("SELECT * from img_tbl")->result_array();
	}

	function getImageCount(){
		return $this->db->query("SELECT count(food_name) from food")->result_array();
	}
}

?>