<?php 
  class Registration {
    // DB stuff
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
    public function create() {
		
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
			 // $count = $rows->rowCount();
		if($rows)
		{
			return false;
			
		}
		else
		{
			 // Create query
          $query = 'INSERT INTO ' . $this->table . ' SET Name = :Name, Email = :Email, Phone = :Phone, Password =:Password, DeviceToken=:DeviceToken, IsActive=:IsActive,RoleId=:RoleId';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->Name = htmlspecialchars(strip_tags($this->Name));
          $this->Email = htmlspecialchars(strip_tags($this->Email));
          $this->Phone = htmlspecialchars(strip_tags($this->Phone));
         // $this->DOB = htmlspecialchars(strip_tags($this->DOB));
		$this->DeviceToken = htmlspecialchars(strip_tags($this->DeviceToken));
          

          // Bind data
          $stmt->bindParam(':Name', $this->Name);
          $stmt->bindParam(':Email', $this->Email);
          $stmt->bindParam(':Phone', $this->Phone);
		 $stmt->bindParam(':Password', $this->Password);
          $stmt->bindParam(':DeviceToken', $this->DeviceToken);
		$stmt->bindParam(':IsActive', $this->IsActive);
		//$stmt->bindParam(':IsDelete', $this->IsDelete);
		$stmt->bindParam(':RoleId', $this->RoleId);

          // Execute query
          if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
		}
		  }
         
    }
  }