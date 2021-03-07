<style>
	table, th, td{
	border: 1px solid black;
		width:50%;
	}
	table{
		margin-left:30%;
	}
	.design{
		color:green;
		margin-left:30%;
		margin-top:5%;
	}
</style>

<?php require_once 'app/views/templates/header.php' ?>
 <div class="container">
     <div class="page-header" id="banner">
         <div class="row">
             <div class="col-lg-12">
                 <h1 class="design">List of Departments</h1>
             </div>
         </div>
     </div>	  
 	<div class="row">
    <div class="col-lg-12"> 
 <table>
	<tr>
	<th>Department</th>
	<th>Program</th>
	</tr>
		<?php foreach ($data['departments'] as $course) {  ?>
		 <?php 
		 $name = $course['Department'];
			echo '<tr><td>'; 
			echo "<a href=/courses/display/",urlencode($course['Department']),">$name</a>"; 
			echo '</td><td>';	
	 
	 ?>
	 <?php 
	 foreach($data['programs'] as $program) 
	 {
    	  	if ($program['Department'] == $name) { 
			$pname=$program['Program'];
        	echo "<a href=/courses/display/",urlencode($program['Department']),"/",urlencode($program['Program']),">$pname</a><br>"; 
		}
	 }	
	echo '</td></tr>';
	}	
	?>
	
</table>
		 
	</div>
	</div>
	 <br>
	 <div class="row">
		<a class="design" href="/courses/insert" title="Return to the previous page"> Insert Data</a> 
	 </div>
		

 <?php require_once 'app/views/templates/footer.php' ?>
	
	


