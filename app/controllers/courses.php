<?php
 	class Courses extends Controller {

     public function index() {
 		$course = $this->model('Course');
 		$departments = $course->get_all_departments();
 	    $this->view('courses/index', ['departments' => $departments]);
 		die;
     }
		
 	public function display ($department = null, $program = null) {
 		if($department) {
 			$course = $this->model('Course');
 			$courseList =  $course->get_all_courses($department);
 			$this->view('courses/display', ['$courseList' => $courseList]);
 			die;
 		}
 		/*if($department){
 			$course = $this->model('Course');
 			$programs =  $course->get_all_programs($department);
 			$this->view('courses/programs', ['programs' => $program]);
 			die;

 		}*/
		
		
 	}
		
 	}
 ?> 