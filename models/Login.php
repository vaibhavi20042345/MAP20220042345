<?php 
  class Login {
   private $conn;
    private $table = 'UserMaster';

    // Post Properties
    public $Name;
    public $Email;
    public $Phone;
    public $Password;
    public $DOB;
    public $DeviceToken;
    public $IsActive;
	public $IsDelete;
    public $RoleId;
	public $CreatedDate;
	  
    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

   
   

    // Create Post
    public function read_single() {
          // Create query
          $query = "select * from UserMaster where Email=:Email and Password=:Password";

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
       
        $this->Email = htmlspecialchars(strip_tags($this->Email));
        $this->Password = htmlspecialchars(strip_tags($this->Password));
		$this->DeviceToken = htmlspecialchars(strip_tags($this->DeviceToken));
          

          // Bind data
      
          	$stmt->bindParam(':Email', $this->Email);
      
		 	$stmt->bindParam(':Password', $this->Password);
         	$stmt->bindParam(':DeviceToken', $this->DeviceToken);
		

          // Execute query
          if($stmt->execute(array(':Email' => $this->Email, ':Password'=>$this->Password))) {
			  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
            //return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

  
    
  }