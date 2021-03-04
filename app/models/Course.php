<?php
 	class Course {
 		public function __construct() {

 		}
 		public function get_all_courses() {
 			$db = db_connect();
 			$statement = $db->prepare("select * from courses;");
 			$statement->execute();
 			$rows = $statement->fetch(PDO::FETCH_ASSOC);
 			return $rows;
 		}

 		public function get_all_departments() {
 			$db = db_connect();
 			$statement = $db->prepare("select distinct(Department) from courses");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
 	}
 ?> 