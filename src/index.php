<?php require 'assets/logic/main.php'; 
	$location = 'Home';
	WriteHead($location);
?>
<body>
<!-- NAVIGATION -->
<?php WriteNav($location); ?>
<div class="container-fluid p-0">
	<div class="col-12 span p-0">
		<div id="hero" class="carousel carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/4.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/5.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/6.jpg" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#hero" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#hero" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
    <div class="pt-5 event_wrap">
    	<div class="row col-12 col-xl-10 a-c m-auto">
	    	<div class="calendar col-12 col-md-4 pb-5 m-auto">
	    		<div class="cal"></div>
	    	</div>
		    <div class="col-12 col-md-8 coming-next pb-5 m-auto">
		    	<img src="img/POZIV.jpg" class="shadow-lg rounded-lg">
		    </div>
    	</div>
	</div>
	<div class="container-fluid row r-wrap">
		<div class="col-10 m-auto pt-3">
			<h1 class="font-weight-bold">Fabrika fashion agency </h3>
			<hr class="primary100">
			<h2 class="font-italic">organizes innovative campaigns and events for more than 20 years . . .</h2>
		</div>
		<div class="col-12 row">
			<?php WriteRotate(
				'img/_iff.jpg',
				'International Fashion Festival',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, voluptatibus.',
				'_iff.php'
			); ?>
			<?php WriteRotate(
				'img/_bfn.jpg',
				'Belgrade Fashion Nights',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				'_bfn.php'
			); ?>
			<?php WriteRotate(
				'img/_kotor.jpg',
				'Kotor Fashion Festival',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				'_kotor.php'
			); ?>
			<?php WriteRotate(
				'img/_lifestyle.jpg',
				'Extraordinary Persons',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				'_lifestyle.php'
			); ?>
		</div>
		<div class="col-10 m-auto pt-3">
			<h2 class="">We work with some of the biggest names in the fashion industry!</h2>
			<hr class="primary100">
			<br>
			<div class="a-c">
				<img class="w-100" src="img/portfolio.jpg">
			</div>
		</div>
		<br>
	</div>
	<!-- Footer -->
	<?php WriteFooter($location); ?>
    