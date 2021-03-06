<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() { }

    public function authenticate($username, $password) {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		$username = strtolower($username);
		$db = db_connect();
        $statement = $db->prepare('select * from Users
                                WHERE username = :username;');
        $statement->bindValue(':username', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $rows['password'])) {
			$_SESSION['auth'] = 1;
			$_SESSION['username'] = ucwords($username);
			unset($_SESSION['failedAuth']);
			header('Location: /home');
			
			$_SESSION['permissions'] = $this-> get_permissions($rows['permissionid']);
			
			die;
		} else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /login');
			die;
		}
    }
	
	public function get_permissions($permissionid)
	{
		$db = db_connect();
        $statement = $db->prepare('select * from permissions
                                WHERE id = :permissionid;');
        $statement->bindValue(':permissionid', $permissionid);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		return $rows;
	}

}
