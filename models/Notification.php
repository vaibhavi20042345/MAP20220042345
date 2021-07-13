<?php 
  class Notification {
   private $conn;
    private $table = 'Notifications';

    // Post Properties
    public $NotificationId;
    public $UserId;
    public $Description;
    public $IsOpen;
	public $CreatedDate;
    
	  
    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

   
   

    // Create Post
    public function read_single() {
          // Create query
          $query = "select * from Notifications where UserId='$this->UserId'";

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
       
          $this->UserId = htmlspecialchars(strip_tags($this->UserId));

          // Bind data
       $stmt->bindParam(':UserId', $this->UserId);

          // Execute query
           if($stmt->execute(array(':UserId' => $UserId))) {
			  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
			}
	
	
      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

  
    
  }