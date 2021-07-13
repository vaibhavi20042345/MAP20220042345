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
	public $CreatedDate;
	  
    // Constructor with DB
  //  public function __construct($db) {
    //  $this->conn = $db;
    //}

    // Create Post
    public function create() {
		
	$name = $_FILES['file']['name'];
  $target_dir = "/workspace/MAP202_20042345/upload/";
		
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
		    printf("message: %s.\n", 'true');
     //   $query = "insert into Garbage(Image,UserId) values('".$name."',1)";
       // mysqli_query($con,$query);
     }

  }
		

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
		}
}