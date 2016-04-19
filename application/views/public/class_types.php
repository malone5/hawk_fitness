<div class="container">
	<div class="row">
		<div class="pull-left">
			<a class="btn btn-default" href="<?php echo site_url(); ?>">Home</a>
		</div>
	</div>
	<div class="type-container">
		<div class="row class-info-title">
			<div class="col-md-12 col-lg-12">
				<h1 class="text-center">Fitness Class Descriptions</h1>
			</div>
		</div>
		<?php
			$count =0;
			foreach ($classtypes as $classtype):
		?>
		<div class="row class-info">
					<div class="col-md-12 col-lg-12">
						<h3><?php echo $classtype['name']; ?> </h3>
						<p><?php echo $classtype['description']; ?></p>
				</div>
		</div>
		<?php if($count !=13){?>
			<hr>
			<?php } $count++;?>
		<?php endforeach; ?>
	</div>
</div>
