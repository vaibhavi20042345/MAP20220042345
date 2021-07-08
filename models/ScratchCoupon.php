<?php 
  class ScratchCoupon {
   private $conn;
    private $table = 'Coupon';

    // Post Properties
    public $CouponId;
    public $UserId;
    public $CouponCode;
    public $IsScratched;
    
	  
    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

   
   

    // Create Post
    public function read_single() {
          // Create query
          $query = "select * from Coupon where UserId='$this->UserId' and CouponId='$this->CouponId'";

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
       
          $this->UserId = htmlspecialchars(strip_tags($this->UserId));
		$this->CouponId = htmlspecialchars(strip_tags($this->CouponId));

          // Bind data
      	 $stmt->bindParam(':UserId', $this->UserId);
		 $stmt->bindParam(':CouponId', $this->CouponId);

          // Execute query
           if($stmt->execute(array(':UserId' => $UserId,':CouponId'=>$CouponId))) {
			   
			$query1= "UPDATE Coupon SET IsScratched=1 where UserId='$this->UserId' and CouponId='$this->CouponId'";

          // Prepare statement
          $stmt1 = $this->conn->prepare($query1);

          

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