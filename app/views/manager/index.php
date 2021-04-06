<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
				<br>
                <h1>Manager Page</h1>
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


