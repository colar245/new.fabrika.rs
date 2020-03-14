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
		      <img src="img/sm/4.jpg" srcset="img/sm/4.jpg 360w, img/md/4.jpg 1280w, img/lg/4.jpg 1920w" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/sm/5.jpg" srcset="img/sm/5.jpg 360w, img/md/5.jpg 1280w, img/lg/5.jpg 1920w" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/sm/6.jpg" srcset="img/sm/6.jpg 360w, img/md/6.jpg 1280w, img/lg/6.jpg 1920w" class="d-block w-100" alt="...">
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
		    	<img data-src="img/sm/POZIV.jpg" data-srcset="img/sm/POZIV.jpg 360w, img/md/POZIV.jpg 1280w, img/lg/POZIV.jpg 1920w" class="shadow-lg rounded-lg lazy">
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
				'_iff.jpg',
				'International Fashion Festival',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, voluptatibus.',
				'_iff.php'
			); ?>
			<?php WriteRotate(
				'_bfn.jpg',
				'Belgrade Fashion Nights',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				'_bfn.php'
			); ?>
			<?php WriteRotate(
				'_kotor.jpg',
				'Kotor Fashion Festival',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				'_kotor.php'
			); ?>
			<?php WriteRotate(
				'_lifestyle.jpg',
				'Extraordinary Persons',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A possimus mollitia sunt qui tempora, ut reprehenderit accusantium vero perferendis ullam.',
				'_lifestyle.php'
			); ?>
		</div>
		<div class="col-12 ml-auto mr-auto  mb-5 pt-3">
			<h2 class="col-10 m-auto">We work with some of the biggest names in the fashion industry!
			<hr class="primary100">
			</h2>
			<br>
			<?php WriteLogos(array(
				array('alt' => 'Renato Balestra', 'src' => 'balestra'),
				array('alt' => 'Luisa Beccaria', 'src' => 'beccaria'),
				array('alt' => 'Cacharel', 'src' => 'cacharel'),
				array('alt' => 'Pierre Cardin', 'src' => 'cardin'),
				array('alt' => 'Cerruti', 'src' => 'cerruti'),
				array('alt' => 'Alviero Martini 1a Classe', 'src' => 'classe'),
				array('alt' => 'Enrico Coveri', 'src' => 'coveri'),
				array('alt' => 'Dior', 'src' => 'dior'),
				array('alt' => 'DVF', 'src' => 'dvf'),
				array('alt' => 'GF Ferre', 'src' => 'ferre'),
				array('alt' => 'Gattinoni', 'src' => 'gattioni'),
				array('alt' => 'Jean Paul Gaultier', 'src' => 'gaultier'),
				array('alt' => 'Genny', 'src' => 'genny'),
				array('alt' => 'Antonio Grimaldi', 'src' => 'grimaldi'),
				array('alt' => 'Guy Laroche', 'src' => 'guy'),
				array('alt' => 'Rami Kadi', 'src' => 'kadi'),
				array('alt' => 'Calvin Klein', 'src' => 'klein'),
				array('alt' => 'LaQuan Smith', 'src' => 'laquan'),
				array('alt' => 'Leonard Paris', 'src' => 'leonard'),
				array('alt' => 'Max Mara', 'src' => 'maxmara'),
				array('alt' => 'Thierry Mugler', 'src' => 'mugler'),
				array('alt' => 'Zuhair Murad', 'src' => 'murad'),
				array('alt' => 'CoStume National', 'src' => 'national'),
				array('alt' => 'La Perla', 'src' => 'perla'),
				array('alt' => 'Agatha Ruiz de la Prada', 'src' => 'prada'),
				array('alt' => 'Verica Rakočević', 'src' => 'rakocevic'),
				array('alt' => 'Rocco Barocco', 'src' => 'rb'),
				array('alt' => 'Ungaro', 'src' => 'ungaro'),
				array('alt' => 'Versus Versace', 'src' => 'versace')
			)); ?>
		</div>
		<br>
	</div>
	<!-- Footer -->
	<?php WriteFooter($location); ?>
    