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


move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
		
// if no error caused, continue ....


?>