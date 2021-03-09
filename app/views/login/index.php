<style>
		form{
	margin: 10% 10% 10% 30%;
    margin-left: 50% color: olive;
    padding: 30px;
	}
</style>


<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
              
				<?php if ($_SESSION['failedAuth'])  
			echo	'<P>
					Login failed. Use right username and password
				</P>';
	?>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="name">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<br>
			<div class="form-group">
				<label for="name">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
			<br>
			
		  <button type="submit" class="btn btn-primary">Login</button>
			<br>
			<br>
			<a href="reginster/index" >Create Account</a>
		</fieldset>
		</form> 
	</div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>