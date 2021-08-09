<?php
 	class Notifications {
		
	public function __construct($param=false){}
	
	public function get_all_notifications() {
 			$db = db_connect();
 			$statement = $db->prepare("SELECT C.NotificationId as Id, C.Description as Description, U.Name as User,C.CreatedDate as CreatedDate, C.IsOpen as IsOpen FROM `Notifications` as C join `UserMaster` as U WHERE C.UserId = U.UserId");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
		
	}
?>