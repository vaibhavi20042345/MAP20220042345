<style>
	form{
		margin-left:30%;
		margin-top:5%;
	}
	label,button{
		color:maroon;
		font-size:16px;
		padding-bottom:
	}
	label{
		padding-bottom:20px;
	}
	input{
		border:solid 0.5px black;
	}
</style>
<form action="/courses/submit_insert"  method="post" >
    <div class="col-lg-12">
      <label for="CourseID">Course ID:</label>
    <div class="col-lg-12">
        <input class="form-control" name="CourseID" id="CourseID" placeholder="Enter Course ID">
      </div>
    </div>
	 <div class="col-lg-12">
      <label for="courseName">Course Name:</label>
     <div class="col-lg-12">
        <input type="text" class="form-control" name="courseName" id="courseName" placeholder="Enter Course Name">
      </div>
    </div>
 <div class="col-lg-12">
      <label for="Department">Department:</label>
     <div class="col-lg-12">        
        <input type="text" class="form-control" name="Department" id="Department" placeholder="Enter Department">
      </div>
    </div>
   <div class="col-lg-12">
      <label for="Department">Program:</label>
     <div class="col-lg-12">      
        <input type="text" class="form-control" name="Program" id="Program" placeholder="Enter Program">
      </div>
    </div>
	<br>
    <div class="col-xs-6 form-group">        
      <div class="col-sm-offset-2 col-xs-6">
      <button type="submit" value="submit" name="submit">Submit</button>
      </div>
     </div>
</form>
 