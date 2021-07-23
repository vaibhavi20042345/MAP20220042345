<?php 
  class Profile {
    // DB stuff
    private $conn;
    private $table = 'UserMaster';

    // Post Properties

    public $UserId;
    public $Name;
    public $Phone;
    public $DOB;
	public $ProfilePic;
	
  
	  
    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

  
    // Create Post
    public function update_profile() {
		
		 // Create query
       $query = 'UPDATE UserMaster SET Name=:Name,Phone=:Phone,DOB=:DOB,ProfilePic=:ProfilePic WHERE UserId=:UserId';

          // Prepare statement
         $stmt = $this->conn->prepare($query);

          // Clean data
          $this->UserId = htmlspecialchars(strip_tags($this->UserId));
          $this->Name = htmlspecialchars(strip_tags($this->Name));
          $this->Phone = htmlspecialchars(strip_tags($this->Phone));
  		$this->DOB = htmlspecialchars(strip_tags($this->DOB));
		$this->ProfilePic = htmlspecialchars(strip_tags($this->ProfilePic));
          

          // Bind data
      	$stmt->bindParam(':UserId', $this->UserId,PDO::PARAM_INT);
          $stmt->bindParam(':Name', $this->Name);
          $stmt->bindParam(':Phone', $this->Phone);
		 $stmt->bindParam(':DOB', $this->DOB);
		 $stmt->bindParam(':ProfilePic', $this->ProfilePic);
     
          // Execute query
         if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

    //  return false;
         
    }
  }