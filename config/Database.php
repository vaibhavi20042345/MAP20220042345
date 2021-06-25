<?php 
  class Database {
    // DB Params
    private   $dbhost = 'remotemysql.com';
    private  $dbname = 'F5sEnaeasW';
    private $dbuser = 'F5sEnaeasW';
    private  $dbpass = 'MQD9L2qY24';
    private $conn;

    // DB Connect
    public function connect() {
      $dbhost = 'remotemysql.com';
    $dbname = 'F5sEnaeasW';
    $dbuser = 'F5sEnaeasW';
    $dbpass = 'MQD9L2qY24';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

   return $conn;
    }
  }