<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods, Authorization");

//include '../../config/Database.php'; // include database connection file

 include_once '../../config/Database.php';
  include_once '../../models/UploadGarbage.php';

$data = json_decode(file_get_contents("php://input"), true); // collect input parameters and convert into readable format
	
	 // Instantiate DB & connect
  	$database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new UploadGarbage($db);
  $path = 'http://saafindiawcf.hyunixsolutions.com/upload/';
if($_FILES["fileToUpload1"]["name"] != '')
	{
		$fileName1  =  $_FILES['fileToUpload1']['name'];
		$tempPath1  =  $_FILES['fileToUpload1']['tmp_name'];
		$fileSize1 =  $_FILES['fileToUpload1']['size'];

		$target_dir = "../../upload/";	
		$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);

		$name1 = rand(1,100);
		$name1 = $name1.time();
		$ext1 = pathinfo($fileName1, PATHINFO_EXTENSION);
		$newfilename1 = $name1 .'.'.$ext1;

		//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
		move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_dir . $newfilename1 );
		
		  $post->UserId = $_POST['UserId'];
	
 		  $post->Image = $path.$newfilename1;
 		  $post->Location = $_POST['Location'];
 		  $post->Notes = $_POST['Notes'];
		  $post->upload();
	}

if($_FILES["fileToUpload2"]["name"] != '')
	{
		$fileName2  =  $_FILES['fileToUpload2']['name'];
		$tempPath2  =  $_FILES['fileToUpload2']['tmp_name'];
		$fileSize2 =  $_FILES['fileToUpload2']['size'];

		$target_dir = "../../upload/";	
		$target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);

		$name2 = rand(1,100);
		$name2 = $name2.time();
		$ext2 = pathinfo($fileName2, PATHINFO_EXTENSION);
		$newfilename2 = $name2 .'.'.$ext2;

		//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
		move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_dir . $newfilename2);
		
		  $post->UserId = $_POST['UserId'];
 		  $post->Image = $path.$newfilename2;
 		  $post->Location = $_POST['Location'];
 		  $post->Notes = $_POST['Notes'];
		  $post->upload();
	}

if($_FILES["fileToUpload3"]["name"] != '')
	{
		$fileName3  =  $_FILES['fileToUpload3']['name'];
		$tempPath3  =  $_FILES['fileToUpload3']['tmp_name'];
		$fileSize3 =  $_FILES['fileToUpload3']['size'];

		$target_dir = "../../upload/";	
		$target_file = $target_dir . basename($_FILES["fileToUpload3"]["name"]);

		$name3 = rand(1,100);
		$name3 = $name3.time();
		$ext3 = pathinfo($fileName3, PATHINFO_EXTENSION);
		$newfilename3 = $name3 .'.'.$ext3;
	
		//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
		move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_dir . $newfilename3);
		
		  $post->UserId = $_POST['UserId'];
 		  $post->Image = $path.$newfilename3;
 		  $post->Location = $_POST['Location'];
 		  $post->Notes = $_POST['Notes'];
		  $post->upload();
	}

if($_FILES["fileToUpload4"]["name"] != '')
	{
		$fileName4  =  $_FILES['fileToUpload4']['name'];
		$tempPath4  =  $_FILES['fileToUpload4']['tmp_name'];
		$fileSize4 =  $_FILES['fileToUpload4']['size'];

		$target_dir = "../../upload/";	
		$target_file = $target_dir . basename($_FILES["fileToUpload4"]["name"]);

		$name4 = rand(1,100);
		$name4 = $name4.time();
		$ext4 = pathinfo($fileName4, PATHINFO_EXTENSION);
		$newfilename4 = $name4 .'.'.$ext4;

		//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
		move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_dir . $newfilename4 );
		
		  $post->UserId = $_POST['UserId'];
 		  $post->Image = $path.$newfilename4;
 		  $post->Location = $_POST['Location'];
 		  $post->Notes = $_POST['Notes'];
		  $post->upload();
	}

if($_FILES["fileToUpload5"]["name"] != '')
	{
		$fileName5  =  $_FILES['fileToUpload5']['name'];
		$tempPath5  =  $_FILES['fileToUpload5']['tmp_name'];
		$fileSize5 =  $_FILES['fileToUpload5']['size'];

		$target_dir = "../../upload/";	
		$target_file = $target_dir . basename($_FILES["fileToUpload5"]["name"]);

		$name5 = rand(1,100);
		$name5 = $name5.time();
		$ext5 = pathinfo($fileName5, PATHINFO_EXTENSION);
		$newfilename5 = $name5 .'.'.$ext5;

		//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
		move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_dir . $newfilename5 );
		
		  $post->UserId = $_POST['UserId'];
 		  $post->Image = $path.$newfilename5;
 		  $post->Location = $_POST['Location'];
 		  $post->Notes = $_POST['Notes'];
		  $post->upload();
	}


if($_FILES["fileToUpload6"]["name"] != '')
	{
		$fileName6  =  $_FILES['fileToUpload6']['name'];
		$tempPath6  =  $_FILES['fileToUpload6']['tmp_name'];
		$fileSize6 =  $_FILES['fileToUpload6']['size'];

		$target_dir = "../../upload/";	
		$target_file = $target_dir . basename($_FILES["fileToUpload6"]["name"]);

		$name6 = rand(1,100);
		$name6 = $name6.time();
		$ext6 = pathinfo($fileName6, PATHINFO_EXTENSION);
		$newfilename6 = $name6 .'.'.$ext6;

		//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
		move_uploaded_file($_FILES["fileToUpload6"]["tmp_name"], $target_dir . $newfilename6 );
		
		  $post->UserId = $_POST['UserId'];
 		  $post->Image = $path.$newfilename6;
 		  $post->Location = $_POST['Location'];
 		  $post->Notes = $_POST['Notes'];
		  $post->upload();
	}




// $fileName  =  $_FILES['fileToUpload']['name'];
// $tempPath  =  $_FILES['fileToUpload']['tmp_name'];
// $fileSize  =  $_FILES['fileToUpload']['size'];

// 	$target_dir = "../../upload/";	
// 	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// $temp = explode(".", $_FILES["file"]["name"]);
// $ext = pathinfo($fileName, PATHINFO_EXTENSION);
// $newfilename = round(microtime(true))  . end($temp).'.'.$ext;


//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
//	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newfilename );
		
// if no error caused, continue ....
echo json_encode(
      array('message' =>
'Image uploaded successfully','status'=>'true') ); ?>