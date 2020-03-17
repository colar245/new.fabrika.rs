<?php require 'assets/logic/main.php'; 
	$location = 'International fashion festival';
	WriteHead($location);
?>
<?php WriteNav($location) ?>
<div class="col-12 p-5 bg-light">
	<h1><?= $location; ?></h1>
	<p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi laudantium veniam, dolorum provident hic illum rem possimus. Quas dignissimos necessitatibus, vero voluptatem at eligendi velit perferendis et voluptatum sint corporis veniam quasi, tenetur, ab labore dolore quaerat officia a ut.</p>
</div>
<div class="event-card-wrap">
	<div class="row p-2 card-deck pt-4">
		<div class="event-card col-12 col-md-6 col-lg-4 mb-4">
			<div class="card bg-light border-dark h-100 shadow">
				<div class="card-body">
					<img data-src="img/sm/1.jpg" data-srcset="img/sm/1.jpg 360w, img/md/1.jpg 1280w, img/lg/1.jpg 1920w" class="card-img-top lazy" alt="">
					<h5 class="card-title m-2">Lorem ipsum dolor sit.</h5>
					<h6 class="card-subtitle m-2">Lorem ipsum dolor sit amet, consectetur adipisicing.</h6>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem sunt tempora corporis expedita, omnis explicabo suscipit laborum hic assumenda velit sed quae exercitationem atque vero veritatis aperiam, incidunt esse. Nobis.</p>
				</div>
				<div class="card-footer"><a href="#foo" onclick="toggle_visibility('foo');" class="fas fa-arrow-alt-circle-down"></a></div>
				</div>
			</div>
			
		<?php WriteCard(
			'card1.jpg',
			'',
			'Belgrade fashion nights', 
			'22.08.2018', 
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est qui vero itaque culpa illo facere perferendis harum nesciunt ea repudiandae, vitae quisquam assumenda eaque at modi reprehenderit.', 
			'', 
			'_bfn.php'
		); ?>
		<?php WriteCard(
			'card2.jpg',
			'',
			'Belgrade fashion nights', 
			'22.08.2018', 
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est qui vero itaque culpa illo facere perferendis harum nesciunt ea repudiandae, vitae quisquam assumenda eaque at modi reprehenderit.', 
			'', 
			'_bfn.php'
		); ?>
		<div class="col-12">
			<div id="foo" class="scroll" style="display: none;">
				<div id="gallery">
		    		<div class="row mt-3 mb-3">
						<div class="col-3"><a href="img/lg/1.jpg"><img src="img/sm/1.jpg" style="width: 100%; height: auto;" /></a></div>
						<div class="col-3"><a href="img/lg/1.jpg"><img src="img/sm/1.jpg" style="width: 100%; height: auto;" /></a></div>
						<div class="col-3"><a href="img/lg/1.jpg"><img src="img/sm/1.jpg" style="width: 100%; height: auto;" /></a></div>
						<div class="col-3"><a href="img/lg/1.jpg"><img src="img/sm/1.jpg" style="width: 100%; height: auto;" /></a></div>
						<div class="col-3"><a href="img/lg/1.jpg"><img src="img/sm/1.jpg" style="width: 100%; height: auto;" /></a></div>
						<div class="col-3"><a href="img/lg/1.jpg"><img src="img/sm/1.jpg" style="width: 100%; height: auto;" /></a></div>
						<div class="col-3"><a href="img/lg/1.jpg"><img src="img/sm/1.jpg" style="width: 100%; height: auto;" /></a></div>
						<div class="col-3"><a href="img/lg/1.jpg"><img src="img/sm/1.jpg" style="width: 100%; height: auto;" /></a></div>
		    		</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php WriteFooter() ?>
<script type="text/javascript">
	var gal = $('#gallery');
	gal.poptrox();
</script>
<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>