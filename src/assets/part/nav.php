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