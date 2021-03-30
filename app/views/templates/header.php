
<!DOCTYPE html>
<html lang="en">
    <head>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
		<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css">
        <link rel="icon" href="/favicon.png">
        <title>MAP 202</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
    </head>
    <body>  
       <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">MAP 202 Lab 8</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'])=="home") 
			echo "active" ?>">
        <a class="nav-link" href="home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'])=="courses") echo  "active" ?>">
        <a class="nav-link" href="/courses">Courses</a>
		 <span class="sr-only">(current)</span>
      </li>
		 <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
    </ul>
    </div>
</nav>
</div>
    