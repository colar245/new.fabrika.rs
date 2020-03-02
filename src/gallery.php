<?php require 'assets/logic/main.php';
	$location = 'Gallery';
	WriteHead($location); 
?>
<body class="is-preload">
	<?php WriteNav($location); ?>
	<!-- Filter -->
	<nav class="navbar navbar-dark bg-dark sticky-top filter">
		<h4 class="active m-0 p-0">Filter by </h4>
		<ul class="navbar-nav">
			<li><li class="form-inline"><a class="nav-link lable">Event: </a>
				<div class="form-group nav-link pt-0 pb-0 m-0">
				    <select class="form-control-sm pt-0 pb-0 bg-dark" id="yearForm">
				    	<option>All</option>
						<option>IFF</option>
						<option>BFN</option>
						<option>Kotor</option>
						<option>Lifestyle</option>
						<option>Music&Fashion</option>
				    </select>
				</div></li>
				<!-- <a href="#" class="nav-link" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events
				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#">All</a>
					<a class="dropdown-item" href="#">International Fashion Festival</a>
					<a class="dropdown-item" href="#">Belgrade fashion nights</a>
					<a class="dropdown-item" href="#">Kotor</a>
					<a class="dropdown-item" href="#">People with the best lifestyle</a>
					<a class="dropdown-item" href="#">Music & Fashion</a>
				</div>
			</a></li> -->
			<li class="form-inline"><a class="nav-link lable">Year: </a>
				<div class="form-group nav-link pt-0 pb-0 m-0">
				    <select class="form-control-sm pt-0 pb-0 bg-dark" id="yearForm">
				    	<option>All</option>
						<option>2020</option>
						<option>2019</option>
						<option>2018</option>
						<option>2017</option>
						<option>2016</option>
				    </select>
				</div></li>
			<li><a href="#" class="nav-link"></a></li>
		</ul>
	</nav>
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<article class="thumb">
				<a href="images/fulls/01.jpg" class="image"><img src="images/thumbs/01.jpg" alt="" /></a>
				<h2>Magna feugiat lorem</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/02.jpg" class="image"><img src="images/thumbs/02.jpg" alt="" /></a>
				<h2>Nisl adipiscing</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/03.jpg" class="image"><img src="images/thumbs/03.jpg" alt="" /></a>
				<h2>Tempus aliquam veroeros</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/04.jpg" class="image"><img src="images/thumbs/04.jpg" alt="" /></a>
				<h2>Aliquam ipsum sed dolore</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/05.jpg" class="image"><img src="images/thumbs/05.jpg" alt="" /></a>
				<h2>Cursis aliquam nisl</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/06.jpg" class="image"><img src="images/thumbs/06.jpg" alt="" /></a>
				<h2>Sed consequat phasellus</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/07.jpg" class="image"><img src="images/thumbs/07.jpg" alt="" /></a>
				<h2>Mauris id tellus arcu</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/08.jpg" class="image"><img src="images/thumbs/08.jpg" alt="" /></a>
				<h2>Nunc vehicula id nulla</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/09.jpg" class="image"><img src="images/thumbs/09.jpg" alt="" /></a>
				<h2>Neque et faucibus viverra</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/10.jpg" class="image"><img src="images/thumbs/10.jpg" alt="" /></a>
				<h2>Mattis ante fermentum</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/11.jpg" class="image"><img src="images/thumbs/11.jpg" alt="" /></a>
				<h2>Sed ac elementum arcu</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/12.jpg" class="image"><img src="images/thumbs/12.jpg" alt="" /></a>
				<h2>Vehicula id nulla dignissim</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
		</div>
	</div>
	<!-- Footer -->
	<?php WriteFooter(); ?>