<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/UploadGarbage.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new UploadGarbage($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

 // $post->UserId  = (int)$data->UserId;
  $post->UserId = $data->UserId;

 $post->Image = $data->Image;
 $post->Location = $data->Location;
 $post->Notes = $data->Notes;

	
  // Create post
  if($post->upload()) {
	
		 echo json_encode(
      array('message' => 'Data saved sucessfully','status'=>'true')
    );
	
  } else {
    echo json_encode(
      array('message' => 'Data not saved','status'=>'false')
    );
  }

