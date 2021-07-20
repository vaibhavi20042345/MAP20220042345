<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods, Authorization");

//include '../../config/Database.php'; // include database connection file

$data = json_decode(file_get_contents("php://input"), true); // collect input parameters and convert into readable format
	
$fileName  =  $_FILES['fileToUpload']['name'];
$tempPath  =  $_FILES['fileToUpload']['tmp_name'];
$fileSize  =  $_FILES['fileToUpload']['size'];

	$target_dir = "../../upload/";	
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$temp = explode(".", $_FILES["file"]["name"]);
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
$newfilename = round(microtime(true))  . end($temp).'.'.$ext;


//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newfilename );
		
// if no error caused, continue ....
echo json_encode(
      array('message' => 'Image uploaded successfully','status'=>'true', 'Data'=>$newfilename)
    );

?>