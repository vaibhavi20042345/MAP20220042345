<?php require_once 'app/views/templates/header.php' ?>
 <div class="container">
     <div class="page-header" id="banner">
         <div class="row">
             <div class="col-lg-12">
                 <h1>Courses</h1>
             </div>
         </div>
     </div>
	  <br>
		 <br>
		  
 	<div class="row">
     <div class="col-lg-12">
 		<?php foreach ($data['$courseList'] as $course) {  ?> 
		   <?php 
		 $name = $course['courseName'];
		 echo "<a href=/courses/display/",urlencode($course['courseName']),">$name</a>";
		 ?>
 		<br>
 		<?php } ?>
		</div>
	 </div>
		
	

 <?php require_once 'app/views/templates/footer.php' ?>