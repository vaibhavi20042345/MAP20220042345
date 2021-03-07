<?php
 	class Course {
		    public function __construct($param=false){}
 		public function get_all_courses($department, $program) {
 			$db = db_connect();
 			$statement = $db->prepare("select * from courses where department= :department and program = :program;");
			 $statement->execute(array(':department' => $department, ':program' => $program));
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
 		public function get_all_departments() {
 			$db = db_connect();
 			$statement = $db->prepare("select distinct(Department) from courses");
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
		public function get_all_programs_by_department($department) {
 			$db = db_connect();
 			$statement = $db->prepare("select DISTINCT(Program) from courses where department= :department;");
			 $statement->execute(array(':department' => $department));
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
		public function submit_index($courseId,$courseName,$Department,$Program)
		{
			$db = db_connect(); 
            $statement=$db->prepare("INSERT INTO courses (courseId,courseName,Department,Program) VALUES ('$courseId', '$courseName','$Department','$Program')");  
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
		}
 	}
 ?> 