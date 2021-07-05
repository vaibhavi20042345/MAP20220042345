<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/ChangePassword.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new ChangePassword($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

 // $post->UserId  = (int)$data->UserId;
  $post->UserId = $data->UserId;

 $post->Password = $data->Password;
 
$post->OldPassword = $data->OldPassword;
	$result =  $post->CheckOldPassword();
  // Create post
  if($post->CheckOldPassword()) {
	if($post->read_single())
	{
		 echo json_encode(
      array('message' => 'Password Change sucessfully','status'=>'true')
    );
	}
  } else {
    echo json_encode(
      array('message' => 'Invalid old password','status'=>'false')
    );
  }

