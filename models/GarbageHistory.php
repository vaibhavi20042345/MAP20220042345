<?php 
  class GarbageHistory {
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
    public function read_single() {
          // Create query
          $query = "select * from Garbage where UserId='$this->UserId'";

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
       
          $this->UserId = htmlspecialchars(strip_tags($this->UserId));

          // Bind data
       $stmt->bindParam(':UserId', $this->UserId);

          // Execute query
           if($stmt->execute(array(':UserId' => $UserId))) {
			  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			   
			   $res['UserId']= $rows[0]['UserId'];
			   $res['Location']=$rows[0]['Location'];
			   $res['Notes']=$rows[0]['Notes'];
			   $res['CreatedDate']=$rows[0]['CreatedDate'];
			   $res['Image']= array_column($rows, 'Image');
			
 			return $res;
			}
	
	
      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

  
    
  }