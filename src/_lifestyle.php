<?php require 'assets/logic/main.php'; 
	$location = 'Extraordinary Persons';
	WriteHead($location);
?>
<body>
	<?php WriteNav($location) ?>
	<div class="col-12 p-5 bg-light">
		<h1><?= $location; ?></h1>
		<p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi laudantium veniam, dolorum provident hic illum rem possimus. Quas dignissimos necessitatibus, vero voluptatem at eligendi velit perferendis et voluptatum sint corporis veniam quasi, tenetur, ab labore dolore quaerat officia a ut.</p>
	</div>
	<?php WriteFooter() ?>
</body>