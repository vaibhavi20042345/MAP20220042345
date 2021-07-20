<?php 
  class Database {
    // DB Params
  //  private   $dbhost = 'remotemysql.com';
   // private  $dbname = 'F5sEnaeasW';
   // private $dbuser = 'F5sEnaeasW';
   // private  $dbpass = 'MQD9L2qY24';
   // private $conn;

	  
	   private   $dbhost = '31.170.161.43';
    private  $dbname = 'u326543761_SaffIndia';
    private $dbuser = 'u326543761_SaffIndia';
    private  $dbpass = 'SaffIndia@123';
    private $conn;
	  
    // DB Connect
    public function connect() {
      //$dbhost = 'localhost';
		$dbhost='31.170.161.43';
    $dbname = 'u326543761_SaffIndia';
    $dbuser = 'u326543761_SaffIndia';
    $dbpass = 'SaffIndia@123';
		
//	$dbhost = 'remotemysql.com';
 //   $dbname = 'F5sEnaeasW';
  //  $dbuser = 'F5sEnaeasW';
   // $dbpass = 'MQD9L2qY24';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
   return $conn;
		
    }
  }