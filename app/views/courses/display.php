<style>
	.course{
		color:blue;
		margin-top:5%;
	}
	.program{
		color:grey;
		margin-top:5%;
	}
	.course, .list{
		margin-top:5%;
	}
	button{
		margin-top:5%;
		background-color:lime;
		font-size:medium;
	}
</style>

<?php require_once 'app/views/templates/header.php' ?>

		  
 	<div class="row">
     <div class="col-lg-12">
		  	
		 
	<?php
		 if(count($data['$courseList'] ) > 0){ ?> 
		  <div class="row">
             <div class="col-lg-12">
                 <h1 class="course">Courses</h1>
             </div>
         </div>
		 <div class="list"> 
		<?php foreach ($data['$courseList']  as $course) {  ?> 
		   <?php  
		$name = $course['Program'];
		 echo $name;
		 ?>
 		<br>
		
 		 <?php } }?>
		 	  </div>
		 
	<?php
		 if(count($data['programs'] ) > 0){ ?>
			   <div class="row">
             <div class="col-lg-12">
                 <h1 class='program'>Programs</h1>
             </div>
         </div>
		  <div class="list"> 
		<?php	foreach ($data['programs']  as $programbyDepartment) {  ?> 
		   <?php  
		$pname = $programbyDepartment['courseName'];
		 echo $pname;
		 ?>
 		<br>
 		 <?php } }?>
		   </div>
		 <br>
		 <button type="button" value="button" name="submit" onClick="javascript:history.go(-1)">Go Back</button>
		
		</div>
	 </div>
		
 <?php require_once 'app/views/templates/footer.php' ?>
	 
	  