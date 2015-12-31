
<div class="row text-center">
  <h2><?php echo $title; ?> </h2>

  <a href="<?php echo site_url('login/'); ?>">
     <button>Login To Managerial State</button>
  </a>

  <a href="<?php echo site_url('manage/create/'); ?>">
     <button>Add Classes To Scheduale</button>
  </a>
</div>

</div class="row text-center">
  <div class="cold-md-2 col-md-offset-5">
    <?php foreach ($classes as $class_item): ?>

    	<h3><?php echo $class_item['class_type']; ?></h3>
    	<div class="main">
    		<?php echo $class_item['instructor']; ?>
        <?php echo $class_item['location']; ?>
        <?php echo $class_item['start_time']; ?>
        <?php echo $class_item['date']; ?>
    	</div>

    <?php endforeach; ?>
  </div>
</div>
