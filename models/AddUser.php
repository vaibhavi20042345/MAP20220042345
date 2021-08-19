<?php 
  class AddUser {
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

   public function CheckUser(){
	       // Create query
           $query = "select * from UserMaster where Email='$this->Email'";

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
       
        $this->UserId = htmlspecialchars(strip_tags($this->Email));
	
          // Bind data
      
	  // $UserId = intval($this->UserId);
	   
        $stmt->bindParam(':Email', $this->Email);
	
          // Execute query
            if($stmt->execute(array(':Email' => Email))) {
			  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
				$count=$rows[0];
				if($row>0){
				echo json_encode(
      array('message' => 'User already registerd','status'=>'false','data'->$count)
    );
					}			
				else{
					createUser();
				}
			}
   }
   

    // Create Post
    public function createUser() {
          // Create query
          $query = 'INSERT INTO ' . $this->table . ' SET Name = :Name, Email = :Email, Phone = :Phone, Password =:Password, DeviceToken=:DeviceToken, IsActive=:IsActive, IsDelete=:IsDelete,RoleId=:RoleId';

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
		//	 $stmt->bindParam(':DOB', $this->DOB);
          $stmt->bindParam(':DeviceToken', $this->DeviceToken);
		$stmt->bindParam(':IsActive', $this->IsActive);
		$stmt->bindParam(':IsDelete', $this->IsDelete);
		$stmt->bindParam(':RoleId', $this->RoleId);

          // Execute query
        if($stmt->execute()) {
           addCoupon();
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }
	 
	   // Create Post
    public function addCoupon() {
		
	  	 $query1 = "select * from UserMaster where Email=:Email and Password=:Password";
          	 $stmt1 = $this->conn->prepare($query1);
			 $this->Email = htmlspecialchars(strip_tags($this->Email));
        	 $this->Password = htmlspecialchars(strip_tags($this->Password));
			 $stmt1->bindParam(':Email', $this->Email);
		 	 $stmt1->bindParam(':Password', $this->Password);
			 $stmt1->execute(array(':Email' => $this->Email, ':Password'=>$this->Password));
			 $rows = $stmt1->fetchAll(PDO::FETCH_ASSOC);
			  echo $rows;
			  $userId = $rows[0]['UserId'];
			  
			   $query2 = 'INSERT INTO Coupon SET UserId=:UserId, CouponCode="NewUserCode1", IsScratched=0, ValidDate =:$date, DiscountPercentage=10';
			 
			 $date=date("Y-m-d");
			 // $date = date("F jS, Y");
			  $date= date('Y-m-d', strtotime($date. ' + 10 days')); 
			  
			 $query2 = 'INSERT INTO Coupon (CouponId, UserId, CouponCode, IsScratched, DiscountPercentage) VALUES (NULL, :UserId, "NewUserCode1", 0, 5), (NULL, :UserId, "NewUserCode2", 0, 10),(NULL, :UserId, "NewUserCode3", 0, 15),(NULL, :UserId, "NewUserCode4", 0, 20),(NULL, :UserId, "NewUserCode5", 0, 25);';
			  
		
			$stmt2 = $this->conn->prepare($query2);
			  $stmt2->bindParam(':UserId', $userId);
			  $stmt2->bindParam(':$date', $date);

  $stmt2->execute();
		 echo json_encode(
      array('message' => 'User Created','status'=>'true'));
    
  }
  }