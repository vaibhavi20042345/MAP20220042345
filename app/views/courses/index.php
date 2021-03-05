<?php require_once 'app/views/templates/header.php' ?>
 <div class="container">
     <div class="page-header" id="banner">
         <div class="row">
             <div class="col-lg-12">
                 <h1>List of Departments</h1>
             </div>
         </div>
     </div>
	  <br>
		 <br>
		  
 	<div class="row">
     <div class="col-lg-12">
 		<?php foreach ($data['departments'] as $course) {  ?> 
		   <?php 
		 $name = $course['Department'];
		 echo "<a href=/courses/display/",urlencode($course['Department']),">$name</a>";
		 ?>
 		<br>
 		<?php } ?>
		</div>
	 </div>
		

 <?php require_once 'app/views/templates/footer.php' ?>