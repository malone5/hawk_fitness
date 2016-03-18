<div class="container-fluid">
    <div class="row text-center">
        <h1>Email List</h1>
    </div>


    <?php echo validation_errors(); ?>

    <?php echo form_open('manage/email_list'); ?>
   <!--  <form action="<?php echo site_url('manage/email_list');?>" id="class-form" method="post" accept-charset="utf-8"> -->
        <div class="form-inline text-center">
          <div class="input-group">
              <div class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i> Min Date </div>
              <input class="form-control" type="text" id="min" name="min" placeholder="yyyy-mm-dd" maxlength="10" value="0000-00-00">
          </div>
          <span></span>
          <div class="input-group">
              <div class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i> Max Date </div>
              <input class="form-control" type="text" id="max" name="max" placeholder="yyyy-mm-dd" maxlength="10" value="<?php echo date("Y-m-d"); ?>">
          </div>
          <input class="btn" type="submit" name="submit" value="Get Email List" />
        </div>
    <!-- </form>
 -->

	<div class="row">
        <div class="col-lg-12 col-sm-12">


                    <?php if( !empty( $emails )): ?>
                        <p>
                        <?php foreach ($emails as $email): ?>
                            <?php 
                            if( $email != ''){
                                echo $email['email']; 
                            }

                            ?>; 
                        <?php endforeach; ?>
                        </p>
                    <?php endif; ?>


            
        </div>
	</div>
</div>

 <script type="text/javascript">

$( "#min" ).datepicker({
      showButtonPanel: true,
      dateFormat: "yy-mm-dd"
});
$( "#max" ).datepicker({
      showButtonPanel: true,
      dateFormat: "yy-mm-dd"
});

</script>

