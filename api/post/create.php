<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Registration.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Registration($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  $post->Name = $data->Name;
  $post->Email = $data->Email;
  $post->Phone = $data->Phone;
 $post->Password = $data->Password;
  //$post->DOB = $data->DOB;
$post->DeviceToken = $data->DeviceToken;
$post->IsActive = $data->IsActive;
$post->IsDelete = $data->IsDelete;
$post->RoleId = $data->RoleId;


  // Create post
  if($post->create()) {
    echo json_encode(
      array('message' => 'User Created','status'=>'true')
    );
  } else {
    echo json_encode(
      array('message' => 'User already registerd','status'=>'false')
    );
  }

