<?php
	class manager extends Controller {
     public function index() {
	
	   // print_r ($_SESSION);
		// die;
		check_permissions();
		 
 	    $this->view('manager/index');
 		die;
     }
	}
?>