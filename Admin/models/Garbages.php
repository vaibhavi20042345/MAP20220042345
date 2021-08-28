<?php
 	class Garbages {
		
	public function __construct($param=false){}
	
	public function get_all_list() {
 			$db = db_connect();
 			$statement = $db->prepare("SELECT C.GarbageId as Id, C.Location as Location,C.Notes as Notes, U.Name as User,C.CreatedDate as CreatedDate FROM `Garbage` as C join `UserMaster` as U WHERE C.UserId = U.UserId");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
		
		public function get_images() {
 			$db = db_connect();
 			$statement = $db->prepare("SELECT C.GarbageId as Id, C.Location as Location,C.Notes as Notes, U.Name as User,C.CreatedDate as CreatedDate FROM `Garbage` as C join `UserMaster` as U WHERE C.UserId = U.UserId");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
		
	}
?>