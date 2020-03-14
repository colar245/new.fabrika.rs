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
		      <img src="img/sm/4.jpg" srcset="img/sm/4.jpg 500w, img/md/4.jpg 1000w, img/lg/4.jpg 2000w" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/sm/5.jpg" srcset="img/sm/5.jpg 500w, img/md/5.jpg 1000w, img/lg/5.jpg 2000w" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/sm/6.jpg" srcset="img/sm/6.jpg 500w, img/md/6.jpg 1000w, img/lg/6.jpg 2000w" class="d-block w-100" alt="...">
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
		    	<img data-src="img/sm/POZIV.jpg" data-srcset="img/sm/POZIV.jpg 500w, img/md/POZIV.jpg 1000w, img/lg/POZIV.jpg 2000w" class="shadow-lg rounded-lg lazy">
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
			<div class="a-c row  mb-3 ml-auto mr-auto col-12 col-lg-10">
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Renato Balestra" class="lazy" data-src="img/logos/balestra.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Luisa Beccaria" class="lazy" data-src="img/logos/beccaria.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Cacharel" class="lazy" data-src="img/logos/cacharel.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Pierre Cardin" class="lazy" data-src="img/logos/cardin.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Cerruti" class="lazy" data-src="img/logos/cerruti.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Alviero Martini 1a Classe" class="lazy" data-src="img/logos/classe.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Enrico Coveri" class="lazy" data-src="img/logos/coveri.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Dior" class="lazy" data-src="img/logos/dior.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="DVF" class="lazy" data-src="img/logos/dvf.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="GF Ferre" class="lazy" data-src="img/logos/ferre.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Gattinoni" class="lazy" data-src="img/logos/gattioni.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Jean Paul Gaultier" class="lazy" data-src="img/logos/gaultier.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Genny" class="lazy" data-src="img/logos/genny.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Antonio Grimaldi" class="lazy" data-src="img/logos/grimaldi.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Guy Laroche" class="lazy" data-src="img/logos/guy.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Rami Kadi" class="lazy" data-src="img/logos/kadi.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Calvin Klein" class="lazy" data-src="img/logos/klein.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="LaQuan Smith" class="lazy" data-src="img/logos/laquan.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Leonard Paris" class="lazy" data-src="img/logos/leonard.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Max Mara" class="lazy" data-src="img/logos/maxmara.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Thierry Mugler" class="lazy" data-src="img/logos/mugler.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Zuhair Murad" class="lazy" data-src="img/logos/murad.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="CoStume National" class="lazy" data-src="img/logos/national.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="La Perla" class="lazy" data-src="img/logos/perla.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Agatha Ruiz de la Prada" class="lazy" data-src="img/logos/prada.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Verica Rakočević" class="lazy" data-src="img/logos/rakocevic.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="RoccoBarocco" class="lazy" data-src="img/logos/rb.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Ungaro" class="lazy" data-src="img/logos/ungaro.png" >
				</div>
				<div class="col-3 col-lg-2 overflow-hidden logo-card">
					<img alt="Versus Versace" class="lazy" data-src="img/logos/versace.png" >
				</div>
			</div>
		</div>
		<br>
	</div>
	<!-- Footer -->
	<?php WriteFooter($location); ?>
    