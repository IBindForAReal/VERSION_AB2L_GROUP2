<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class imageManager extends CI_Controller {

public function index(){
	$this->load->view('image_form');
}

public function checkUploadStatus(){
	if(isset($_REQUEST['submit']) && $_FILES['imgfile']['size'] > 0)
	{
	          $fileName = $_FILES['imgfile']['name']; // image file name
	          $tmpName = $_FILES['imgfile']['tmp_name']; // name of the temporary stored file name
	          $fileSize = $_FILES['imgfile']['size']; // size of the uploaded file
	          $fileType = $_FILES['imgfile']['type']; // file type
	 
	          $fp = fopen($tmpName, 'r'); // open a file handle of the temporary file
	          $imgContent = fread($fp, filesize($tmpName)); // read the temp file
	          fclose($fp); // close the file handle
	 	
	          //printf($_FILES['imgfile']['name']);
	          //print_r("---".$_FILES['imgfile']['type']."---");
	          //print_r($imgContent);

	 		  echo('processing');
	 		  $this->imageAccess->addNewImage($fileName, $fileType, $fileSize, $imgContent);

	 		  echo('successful');
	          //echo "<br>Image successfully uploaded to database<br>";
	          //echo "<a href=\”viewimage.php?id=$imgid\”>View Image</a>";
	 
	}else echo('You have not selected any image');
}

public function obtainImages(){
	$res = $this->imageAccess->getAllImages();
	print_r($res);
	$this->load->view('listOfImages', array('images'=>$res));
}

}

?>