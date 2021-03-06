<?php
 	class Course {
 		
		    public function __construct($param=false){}
		
 		public function get_all_courses($department) {
 			$db = db_connect();
 			$statement = $db->prepare("select * from courses where department= :department;");
			 $statement->execute(array(':department' => $department));
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}

 		public function get_all_departments() {
 			$db = db_connect();
 			$statement = $db->prepare("select DISTINCT(Department),Program from courses");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
		
		public function get_all_programs() {
 			$db = db_connect();
 			$statement = $db->prepare("select DISTINCT(Department),Program from courses");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
 	}
 ?> 