<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods, Authorization");

//include '../../config/Database.php'; // include database connection file

 include_once '../../config/Database.php';
  include_once '../../models/Profile.php';

$data = json_decode(file_get_contents("php://input"), true); // collect input parameters and convert into readable format
	
	 // Instantiate DB & connect
  	$database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Profile($db);

if($_FILES["profilepic"]["name"] != '')
	{
		$fileName1  =  $_FILES['profilepic']['name'];
		$tempPath1  =  $_FILES['profilepic']['tmp_name'];
		$fileSize1 =  $_FILES['profilepic']['size'];

		$target_dir = "../../profile/";	
		$target_file = $target_dir . basename($_FILES["profilepic"]["name"]);

		$name1 = rand(1,100);
		$name1 = $name1.time();
		$ext1 = pathinfo($fileName1, PATHINFO_EXTENSION);
		$newfilename1 = $name1 .'.'.$ext1;

		//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
		move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_dir . $newfilename1 );
		  $path = 'http://saafindiawcf.hyunixsolutions.com/profile/';
		    $post->ProfilePic = $path.$newfilename1;
	}

		$post->UserId = $_POST['UserId'];
		$post->Name = $_POST['Name'];
		$post->Phone = $_POST['Phone'];
		$post->DOB = $_POST['DOB'];
 		
 		
		//  $post->update_profile();

 if($post->update_profile()) {
    echo json_encode(
      array('message' => 'Profile updated successfully','status'=>'true')
    );
  } else {
    echo json_encode(
      array('message' => 'Profile not updated','status'=>'false')
    );
  }