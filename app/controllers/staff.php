<?php
	class staff extends Controller {
     public function index() {
		check_permissions();
		 
		//echo "<pre>";
	    //print_r ($_SESSION);
		//die;
 	    $this->view('staff/index');
 		die;
     }
	}
?>