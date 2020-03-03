<?php require 'assets/logic/main.php'; 
	$location = 'Other';
	WriteHead($location);
?>
<body>
	<?php WriteNav($location) ?>
	<div class="event-card-wrap">
		<div class="row p-2 card-deck pt-4">
			<?php WriteCard(
				'img/card1.jpg',
				'',
				'Belgrade fashion nights', 
				'22.08.2018', 
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est qui vero itaque culpa illo facere perferendis harum nesciunt ea repudiandae, vitae quisquam assumenda eaque at modi reprehenderit.', 
				'', 
				'_bfn.php'
			); ?>
			<?php WriteCard(
				'img/card2.jpg',
				'',
				'Belgrade fashion nights', 
				'22.08.2018', 
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est qui vero itaque culpa illo facere perferendis harum nesciunt ea repudiandae, vitae quisquam assumenda eaque at modi reprehenderit.', 
				'', 
				'_bfn.php'
			); ?>
			<?php WriteCard(
				'img/card3.jpg',
				'bfn',
				'Belgrade fashion nights', 
				'22.08.2018', 
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est qui vero itaque culpa illo facere perferendis harum nesciunt ea repudiandae, vitae quisquam assumenda eaque at modi reprehenderit.', 
				'', 
				'_bfn.php'
			); ?>
			<?php WriteCard(
				'img/card4.jpg',
				'bfn',
				'Belgrade fashion nights', 
				'22.08.2018', 
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est qui vero itaque culpa illo facere perferendis harum nesciunt ea repudiandae, vitae quisquam assumenda eaque at modi reprehenderit.', 
				'', 
				'_bfn.php'
			); ?>
			<?php WriteCard(
				'img/card5.jpg',
				'bfn',
				'Belgrade fashion nights', 
				'22.08.2018', 
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est qui vero itaque culpa illo facere perferendis harum nesciunt ea repudiandae, vitae quisquam assumenda eaque at modi reprehenderit.', 
				'', 
				'_bfn.php'
			); ?>
			<?php WriteCard(
				'img/card6.jpg',
				'bfn',
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