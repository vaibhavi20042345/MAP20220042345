<?php
	
require_once('database.php');
class Fruits{
	public function __construct($param=false){ }
	
	public function get_all_fruits(){
	
		$db = new DB();
		
		$conn = $db->db_connect();
		
		$query = "SELECT * FROM fruits";
    	$stmt = $conn->prepare($query);
    	$stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
//    print_r($result);
	}
	
}

?>