<style type="text/css">
.table-nonfluid {
   width: auto !important;
   padding: 3px;
}
td {
  padding: 5px !important;
}

</style>

<div class="container-fluid">
    <div class="row text-center">
        <h1>Email List</h1>
    </div>
    <hr>
    <?php echo validation_errors(); ?>

    <form action="<?php echo site_url('manage/email_list');?>" id="email-list-form" method="post" accept-charset="utf-8">
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
          <input class="btn btn-email-list" type="submit" name="submit" value="Get Email List" />
        </div>
      </form>
  <hr>
	<div class="row clearfix">
        <div class="">
          <div class="well">


                    <?php if( !empty( $emails )): ?>
                        <p>
                        <?php foreach ($emails as $email): ?>
                            <?php

                            if( $email != ''){
                                echo $email['email'];
                            }

                            ?>
                            ;
                        <?php endforeach; ?>
                        </p>
                    <?php else: ?>
                        <p>Submit a date range to produce a list of emails for class attendees</p>
                    <?php endif; ?>
          </div>
        </div>
	</div>
  <div class="row">
    <table class="table table-nonfluid table-responsive table-striped table-hover table-bordered table-condensed">
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
                <th>Class Type</th>
                <th>Instructor</th>
            </tr>
            </thead>
            <tbody>

                <?php foreach ($scheduale as $class): ?>
                    <tr>
                        <td><?php echo  $class['date']; ?></td>
                        <td><?php echo  $class['start_time']; ?></td>
                        <td><?php echo  $class['location']; ?></td>
                        <td><?php echo  $class['class_type']; ?></td>
                        <td><?php echo  $class['instructor']; ?></td>

                    </tr>
                <?php endforeach; ?>

        </tbody>
    </table>
  </div>
</div>

 <script type="text/javascript">

$( "#min" ).datepicker({
      showButtonPanel: true,
      dateFormat: "yy-mm-dd"
});
$( "#max" ).datepicker({
      showButtonPanel: true,
      dateFormat: "yy-mm-dd",
      maxDate:0
});

</script>
