<?php
 	require_once('header.php');
 ?>
<!DOCTYPE html>
<html>
<head>

<style>
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.container {
  padding: 10%;
}
</style>
</head>
<body>

	
<form action="login.php" method="post">
 
  <div class="container">
	  <h2>Login Form</h2>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required> 

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  
  </div>
</form>
</body>
</html>
<?php
 	require_once('footer.php');
 ?>