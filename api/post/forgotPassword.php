<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/ForgotPassword.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new ForgotPassword($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  
  $post->Email = $data->Email;

  $result =  $post->read_single();
  // Create post
  if($post->read_single()) {
    echo json_encode(
      array('message' => 'User Found', 'UserId'=>$result[0]['UserId'])
    );
  } else {
    echo json_encode(
      array('message' => 'User Not Found')
    );
  }

