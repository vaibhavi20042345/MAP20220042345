<?php

class DB {
	public function db_connect(){
	 $dbhost = 'remotemysql.com';
    $dbname = 'F5sEnaeasW';
    $dbuser = 'F5sEnaeasW';
    $dbpass = 'MQD9L2qY24';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

   return $conn;
	}
}
?>