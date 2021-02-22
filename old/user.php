<?php
 require_once('database.php');
 class Users{
     public function __construct($param=false){}

     public function get_all_users(){
  		$password = $_REQUEST['psw'];
 		$username = $_REQUEST['uname'];
         $db = new DB();

         $conn = $db->db_connect();

         $query = "SELECT * FROM users where user = :username";
         $stmt = $conn->prepare($query);
 		$stmt->bindParam(':username',$username);
         $stmt->execute();
 		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 return $result;
 }
 ?>