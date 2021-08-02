<?php 
  class GarbageHistory {
   private $conn;
    private $table = 'Garbage';

    // Post Properties
    public $GarbageId;
    public $UserId;
    public $Image =array();
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
			    $result = array();
			   foreach ($rows as $item) {
				   //$newObject = array();
				   
				   
				    $garbageId = $item['GarbageId'];
					$query1 = "select * from GarbageImage where GarbageId=:GarbageId";
				    $stmt1 = $this->conn->prepare($query1);
				    $stmt1->bindParam(':GarbageId', $garbageId);
				   $stmt1->execute(array(':GarbageId' => $garbageId));
				    $newObject= $stmt1->fetchAll(PDO::FETCH_ASSOC);
				 //  array_push($item, $newObject);
        			//$rows['Image'] = $newObject;
				   
    		//	$item['Image']  = $stmt1->fetchAll(PDO::FETCH_ASSOC);
			   $res['UserId']= $item['UserId'];
			   $res['Location']=$item['Location'];
			   $res['Notes']=$item['Notes'];
			   $res['CreatedDate']=$item['CreatedDate'];
			   $res['Image']= $newObject;
				    array_push($result, $res);
				}
			   
			   // $res['UserId']= $rows[0]['UserId'];
			   // $res['Location']=$rows[0]['Location'];
			   // $res['Notes']=$rows[0]['Notes'];
			   // $res['CreatedDate']=$rows[0]['CreatedDate'];
			   // $res['Image']= array_column($rows, 'Image');
			
 			return $result;
			}
	
	
      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

  
    
  }