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
		 <h3>List of Departments</h3>
		 <br>
		 
 		<?php foreach ($data['departments'] as $course) {  ?>
		
		  <a href="https://www.saultcollege.ca/programs/categories/<?php echo $course['Department']; ?>">
       <?php 
		$course = str_replace('-', ' ', $course);
		echo ucwords($course['Department']); ?>
   </a>
		 <br>
 		<br>
 		<?php } ?>
		</div>
	 </div>
		
	

 <?php require_once 'app/views/templates/footer.php' ?>