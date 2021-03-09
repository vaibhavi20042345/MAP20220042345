<?php

class Register extends Controller
{
	
public function index(){
   $this->view('Register/index');
	}
public function signup(){
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	
	$model = $this->model('UserRegister');
	$count = $model->check_user($user_name);
	if($count > 0){
	echo 'This User Already Exists.<br><br><button type="button" value="button" name="submit" onClick="javascript:history.go(-1)">Go Back</button>';
	}
	else
	{
	$data = array(
	'id' =>null,
	'user_name' =>$_POST['user_name'],
	'password' =>$_POST['password']
	);
	$model->insert_user($data);
echo 'done';
	}
	//$count=$this->model->check_user($user_name);
	
	/*if($count > 0){
	echo 'This User Already Exists';
	}
	else{
	$data = array(
	'id' =>null,
	'user_name' =>$_POST['user_name'],
	'password' =>$_POST['password']
	);
	$this->model->insert_user($data);
	}
	header('location:index');*/
	}
}