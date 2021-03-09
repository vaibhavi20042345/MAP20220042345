<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome to MAP 202 Lab 7</h1>
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
			<button type="button" value="button" name="logout" onClick="document.location.href='logout/index'">Logout</button>
		</div>
	</div>

    <?php require_once 'app/views/templates/footer.php' ?>
