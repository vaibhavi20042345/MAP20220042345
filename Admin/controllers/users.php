<?php

class Users extends Controller {

      public function index() {
		 
		 
 		$course = $this->model('User');
 		$userslist = $course->get_all_users();
 	    $this->view('users/index', ['userslist' => $userslist]);
 		die;
     }

}
