<?php require 'assets/logic/main.php'; 
	$location = 'Art and Fashion Festival, Kotor';
	WriteHead($location);
?>
<?php WriteNav($location) ?>
<div class="col-12 p-5 bg-light">
	<h1><?= $location; ?></h1>
	<p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi laudantium veniam, dolorum provident hic illum rem possimus. Quas dignissimos necessitatibus, vero voluptatem at eligendi velit perferendis et voluptatum sint corporis veniam quasi, tenetur, ab labore dolore quaerat officia a ut.</p>
</div>
<div class="event-card-wrap">
	<div class="row p-2 card-deck pt-4">
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
		<?php WriteCard(
			'card3.jpg',
			'',
			'Belgrade fashion nights', 
			'22.08.2018', 
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est qui vero itaque culpa illo facere perferendis harum nesciunt ea repudiandae, vitae quisquam assumenda eaque at modi reprehenderit.', 
			'', 
			'_bfn.php'
		); ?>
	</div>
</div>
<?php WriteFooter() ?>
</body>