<!DOCTYPE HTML>  
<html>
<body>  
<?php
	require_once('fruit.php');
	$fruit= new Fruits();
	$fruits=	$fruit->get_all_fruits();
	//print_r($fruits);
	
	 if($_SERVER['REQUEST_METHOD']=='POST'){
	 echo 'Form submitted';
	 }
	
?>
<form method="post" action="form.php">  
	<br>
	<br>
	
  <label for="Name">First Name</label> <br>
  <input type="text" name="firstname" id="firstname"><br>
<br>
 <label for="Name">Last Name</label> <br>
 <input type="text" name="lasttname" id="lastname"><br>
<br>
	<label for="cars">Favorite fruit:</label>
 <select name="fruit" id="fruit_id">
  
  <?php
    foreach($fruits as $name) { ?>
      <option value="<?= $name['id'] ?>"><?= $name['fruit'] ?></option>
  <?php
    } ?>
	 
</select> 
	<br>
	<br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>

</html>