<?php require_once 'app/views/templates/header.php' ?>
<style>
body {
  background-color: aliceblue;
  font-family: sans-serif;
  text-align: center;
}

h1 {
  border-bottom: solid 2px grey;
}
</style>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
				<br>
                <h1>Welcome to Staff Page</h1>
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
	

    <?php require_once 'app/views/templates/footer.php' ?>


