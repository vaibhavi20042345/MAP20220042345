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
		//$username = strtolower($username);
		$db = db_connect();
        $statement = $db->prepare('select * from UserMaster
                                WHERE Email = :username and Password =:password and RoleId = 2;');
        $statement->bindValue(':username', $username);
		 $statement->bindValue(':password', $password);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if ($statement->rowCount() > 0) {
			$_SESSION['auth'] = 1;
			$_SESSION['username'] = ucwords($username);
			unset($_SESSION['failedAuth']);
			header('Location: /home/index');
			
			//$_SESSION['permissions'] = $this-> get_permissions($rows['permissionid']);
			
			die;
		} 
	else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /login');
			die;
		}
    }
	
public function get_all_users() {
 			$db = db_connect();
 			$statement = $db->prepare("SELECT C.UserId as Id, C.Name as Name,C.Email as Email, C.Phone as Phone,C.DOB as DOB, C.IsActive as IsActive, U.RoleName as Role FROM `UserMaster` as C join `RoleMaster` as U WHERE C.RoleId = U.RoleId");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}

}
