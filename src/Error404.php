<?php require 'assets/logic/main.php'; 
	$location = '404';
	WriteHead($location);
?>
<body>
<!-- NAVIGATION -->
<?php WriteNav($location);?>
<div class="wrap-404 container-fluid m-0 p-0">
	<div class="col-12 msg">
		<h2>Oops! Page not found.</h2>
		<h1>404</h1>
		<p>We can't find the page you're looking for!</p>
		<a href="index.php">Go back home</a>
	</div>
</div>
<!-- Footer -->
<?php WriteFooter($location); ?>