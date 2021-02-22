<!DOCTYPE html>
 <html>
 <body>
 <?php
 require_once('header.php');
 	if ($_SESSION['failedAttempts']) {
 	echo  '<strong>You have '.$_SESSION['failedAttempts'].' failed Attempts!</strong>';
 }
 ?>
 </body>
 </html> 