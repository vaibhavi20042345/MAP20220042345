<html>
<body>

<?php
	
	  $dbhost = 'remotemysql.com';
    $dbname = 'F5sEnaeasW';
    $dbuser = 'F5sEnaeasW';
    $dbpass = 'MQD9L2qY24';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    $query = "SELECT * FROM fruits";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);

?>
	</body>
</html>
