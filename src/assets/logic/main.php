<?php 
function WriteHead($a)
	{
		$location 	= '-1';
		$location 	= $a;
		$title 		= 'Fabrika &bull; '. $location;

		//include 'assets/part/head.php';
	?> 
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Local CSS -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<title>Test<?php echo $title; ?></title>
		<meta name="description" content=""/>
		<meta name="keywords" content="">
	<?php
	}

function WriteNav($a)
	{
		$location 	= '-1';
		$location 	= $a;
		//include 'assets/part/nav.php';
	?>
		<header>
			<div class="w-100 text-center bg-light logo">
				<a href="index.php"><img src="img/fabrikaLogo.png" class="" alt="Fabrika logo"></a>
			</div>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
				<a href="index.php" class="navbar-brand font-weight-bold">
					<img src="img/fabrikaLogo.png" width="30" height="30" class="align-top header_img_sm <?php echo ($location === 'home') ? ' active' : ''; ?>" alt="Fabrika logo">
					Fabrika
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li><a href="#nav_dropdown" class="dropdown-toggle nav-link <?php echo ($location === '') ? ' active' : ''; ?>" id="" data-toggle="collapse" aria-controls="nav_dropdown" aria-expanded="false">Events</a>
							<ul class="collapse dropdown_list" id="nav_dropdown">
								<li><a href="#" class="nav-link <?php echo ($location === '') ? ' active' : ''; ?>">International fashion festival</a></li>
								<li><a href="#" class="nav-link <?php echo ($location === '') ? ' active' : ''; ?>">International Fashion Festival in Kotor </a></li>
								<li><a href="#" class="nav-link <?php echo ($location === '') ? ' active' : ''; ?>">Belgrade fashion nights</a></li>
								<li><a href="#" class="nav-link <?php echo ($location === '') ? ' active' : ''; ?>">Persons with the best lifestyle</a></li>
								<li><a href="#" class="nav-link <?php echo ($location === '') ? ' active' : ''; ?>">Music & Fashion</a></li>
								<li><a href="#" class="nav-link <?php echo ($location === '') ? ' active' : ''; ?>">Other</a></li>
							</ul>
						</li>
						<li><a href="gallery.php" class="nav-link <?php echo ($location === 'gallery') ? ' active' : ''; ?>">Gallery</a></li>
						<li><a href="#" class="nav-link <?php echo ($location === '') ? ' active' : ''; ?>">About us</a></li>
						<li><a href="#" class="nav-link <?php echo ($location === '') ? ' active' : ''; ?>">Contact</a></li>
					</ul>
				</div>
			</nav>
		</header>
	<?php
	}

function WriteFooter()
	{
		//include 'assets/part/footer.php';
	?>
		<footer id="header">
			<h1><a href="index.php"><strong>Fabrika</strong> Beograd</a></h1>
			<nav>
				<ul>
					<li><a href="#footer" class="solid">About	<i class="fas fa-chevron-circle-up"></i></a></li>
				</ul>
			</nav>
		</footer>

		<footer id="footer" class="panel">
			<div class="inner split">
				<div>
					<section>
						<h2>Fabrika fashion agency</h2>
						<div class="col-12 col-md-6">
							<p>Takovska 23-25, 11000 Belgrade, Serbia</p>
						</div>
					</section>
					<section>
						<h2>Follow us on ...</h2>
						<ul class="">
							<a title="Fabrika Facebook" href="https://www.facebook.com/fabrika.rs"><i class="fab fa-facebook"></i></a>
							<a title="Fabrika Instagram" href="https://www.instagram.com/fabrika_rs/"><i class="fab fa-instagram"></i></a>
						</ul>
						<h2>And subscribe to our newsletter</h2>
					<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<input type="text" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field half">
								<input type="submit" value="Subscribe" class="primary bold" />
							</div>
						</div>
					</form>
					</section>
					<p class="copyright">
						&copy; Fabrika Belgrade
					</p>
				</div>
				<div>
					<section>
						<h2>Get in touch</h2>
						<form method="post" action="#">
							<div class="fields">
								<div class="field half">
									<input type="text" name="name" id="name" placeholder="Name" />
								</div>
								<div class="field half">
									<input type="text" name="email" id="email" placeholder="Email" />
								</div>
								<div class="field">
									<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Send" class="primary bold"/></li>
								<li><input type="reset" value="Reset" class="bold" /></li>
							</ul>
						</form>
					</section>
				</div>
			</div>
		</footer>
		<!-- Add Scripts -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.poptrox.min.js"></script>
		<script type="text/javascript" src="assets/js/popper.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<!-- Multiverse JS -->
		<script type="text/javascript" src="assets/js/browser.min.js"></script>
		<script type="text/javascript" src="assets/js/breakpoints.min.js"></script>
		<script type="text/javascript" src="assets/js/util.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<!-- Calendar -->
		<script type="text/javascript" src="assets/js/_calendar.js"></script>
		<!-- Font CDN -->
		<script src="https://kit.fontawesome.com/3f7f7bdb28.js" crossorigin="anonymous"></script>
		<!-- JS not Supported! -->
		<noscript>Your browser does not support JavaScript!</noscript>
	<?php
	}
 ?>