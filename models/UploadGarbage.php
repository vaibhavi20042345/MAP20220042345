<?php 
  class UploadGarbage {
    // DB stuff
    private $conn;
    private $table = 'Garbage';

    // Post Properties
    public $GarbageId;
    public $UserId;
    public $Image;
    public $Location;
    public $Notes;
	
	  
    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

  
    // Create Post
    public function upload() {
		
		 // Create query
       $query = 'INSERT INTO Garbage SET UserId=:UserId, Image = :Image, Location = :Location, Notes =:Notes';

          // Prepare statement
         $stmt = $this->conn->prepare($query);

          // Clean data
          $this->UserId = htmlspecialchars(strip_tags($this->UserId));
          $this->Image = htmlspecialchars(strip_tags($this->Image));
          $this->Location = htmlspecialchars(strip_tags($this->Location));
  $this->Notes = htmlspecialchars(strip_tags($this->Notes));
          

          // Bind data
      	$stmt->bindParam(':UserId', $this->UserId,PDO::PARAM_INT);
          $stmt->bindParam(':Image', $this->Image);
          $stmt->bindParam(':Location', $this->Location);
		 $stmt->bindParam(':Notes', $this->Notes);
     
          // Execute query
         if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

    //  return false;
         
    }
  }