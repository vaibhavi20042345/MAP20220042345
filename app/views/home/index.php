<?php require_once 'app/views/templates/header.php' ?>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<?php 
	
		if($_SESSION['page']!=null)
			{
				$page = $_SESSION['page']; ?>
				<script type='text/javascript'>
					swal(
				'Warning!',
				'You do not have permission to open  <b style="color:coral;"><?php echo $page ?></b> page!',
				'warning');</script>
			<?php }
?>


<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
				<br>
                <h1>Welcome to MAP 202 Lab 9</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p> <?=$data['message']?> </p>
        </div>
    </div>
	<br>
	<br>
	<div class="row">
		<div class"col-lg-12">
			<button type="button" value="button" name="logout" class="btn btn-secondary my-2 my-sm-0" onClick="document.location.href='logout/index'">Logout</button>
		</div>
	</div>

    <?php require_once 'app/views/templates/footer.php' ?>
