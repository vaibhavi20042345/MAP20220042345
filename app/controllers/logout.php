<?php
 	class Logout extends Controller {

     public function index() {	
 		
 		$_SESSION = array();
 		session_destroy();
 	    header ('Location: /login');
 		die;
     }