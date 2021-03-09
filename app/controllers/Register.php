<?php

class Register extends Controller
{
	
public function index(){
   $this->view('Register/index');
	}
public function signup(){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$model = $this->model('UserRegister');
	$count = $model->check_user($username);
	if($count > 0){
	echo 'This User Already Exists.<br><br><button type="button" value="button" name="submit" onClick="javascript:history.go(-1)">Go Back</button>';
	}
	else
	{
	$password = password_hash("$password", PASSWORD_DEFAULT);
	$model->insert_user($username,$password);
 	$this->view('login/index');
 	die;
	}
	
	}
}