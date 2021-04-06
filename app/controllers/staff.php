<?php
	class staff extends Controller {
     public function index() {
		 //[controller] [role] => staff
		 
		check_permissions();
		 
		//echo "<pre>";
	    //print_r ($_SESSION);
		//die;
 	    $this->view('staff/index');
 		die;
     }
	}
?>