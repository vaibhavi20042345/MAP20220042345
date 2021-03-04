<?php

class Login extends Controller {

    public function index() {		
	    $this->view('login/index');
		die;
    }
    
    public function verify(){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
		
		$user = $this->model('User');
		$user->authenticate($username, $password); 
    }

}