<?php
class UserRegister
{
 //public function __construct($param=false){}

public function check_user($username)
	{
	
	$db = db_connect();
 	$statement = $db->prepare("SELECT * FROM Users WHERE username= :username");
	$statement->execute(array(':username' => $username));
 	$statement->execute();
 	$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
	$count = count($rows);
	
 	return $count;
	}
	
public function insert_user($username,$password)
	{
	$db = db_connect();
	
	$statement = $db->prepare("insert into Users (username, password) values(:username,:password)");
	$statement->execute(array(':username' => $username, 'password'=>$password));
	}
}