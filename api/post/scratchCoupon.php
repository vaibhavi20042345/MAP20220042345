<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/ScratchCoupon.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new ScratchCoupon($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  
  $post->UserId = $data->UserId;

 $post->CouponId = $data->CouponId;
 
$post->DeviceToken = $data->DeviceToken;
	$result =  $post->read_single();
  // Create post
  if($post->read_single()) {
    echo json_encode(
      array('message' => 'Coupon scratch sucessfully','status'=>'true')
    );
  } else {
    echo json_encode(
      array('message' => 'Invalid Coupon','status'=>'false')
    );
  }

