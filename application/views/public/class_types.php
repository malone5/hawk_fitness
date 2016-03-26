<div class="row container">
	<div class="col-md-10 col-md-offset-1 type-container">
	
		<h1 class="text-centered">Fitness Class Descriptions</h1>
		<?php foreach ($classtypes as $classtype): ?> 
			<div class="col-md-12">
				</div>
				<h3><?php echo $classtype['name']; ?> </h3>
				<p><?php echo $classtype['description']; ?></p>
			<hr>


		<?php endforeach; ?>
	</div>
</div>
