<?php 
  class ChangePassword {
   private $conn;
    private $table = 'UserMaster';

    // Post Properties
	  public $UserId;
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

   public function CheckOldPassword(){
	      // Create query
           $query = "select * from UserMaster where UserId='$this->UserId' and Password = '$this->OldPassword'";

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
       
        $this->UserId = htmlspecialchars(strip_tags($this->UserId));
	//    $this->Password = htmlspecialchars(strip_tags($this->Password));
        $this->OldPassword = htmlspecialchars(strip_tags($this->OldPassword));
          // Bind data
      
	  // $UserId = intval($this->UserId);
	   
        $stmt->bindParam(':UserId', $this->UserId);
	  //  $stmt->bindParam(':Password', $this->Password);
      	$stmt->bindParam(':OldPassword', $this->OldPassword);
		 
          // Execute query
            if($stmt->execute(array(':UserId' => $UserId))) {
			  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
			}
   }
   

    // Create Post
    public function read_single() {
          // Create query
          $query = "UPDATE UserMaster SET Password=:Password WHERE UserId=:UserId;";

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
       
      //  $this->UserId = htmlspecialchars(strip_tags($this->UserId));
        $this->Password = htmlspecialchars(strip_tags($this->Password));
		//$this->OldPassword = htmlspecialchars(strip_tags($this->OldPassword));
          

          // Bind data
      
          	$stmt->bindParam(':UserId', $this->UserId,PDO::PARAM_INT);
      
		 	$stmt->bindParam(':Password', $this->Password);
         //	$stmt->bindParam(':OldPassword', $this->OldPassword);
		

          // Execute query
        if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

  
    
  }