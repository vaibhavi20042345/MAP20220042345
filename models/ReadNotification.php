<?php 
  class ReadNotification {
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
		
		$query1= "UPDATE Notifications SET IsOpen=1 where UserId='$this->UserId'";
		 $stmt1 = $this->conn->prepare($query1);
         
         $this->UserId = htmlspecialchars(strip_tags($this->UserId));
	
      	 $stmt1->bindParam(':UserId', $this->UserId);
		
         // Execute query
         if($stmt1->execute(array(':UserId' => $UserId))) {	   

          // Prepare statement
        

          // Execute query
        if($stmt1->execute()) {
            return true;
      			}
			   return true;
			}
		
	
	
      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

  
    
  }