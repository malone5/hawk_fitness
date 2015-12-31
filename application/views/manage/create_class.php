<script>

  $(function() {
    $( "#datepicker" ).datepicker({
      showButtonPanel: true,
      dateFormat: "yy-mm-dd"
    });
  });

</script>


<!-- TEST -->


    <div class="content-wrapper">

      <h2 class="text-center"><?php echo $title; ?></h2>

      <a href="manage/logout">Logout</a>

      <?php echo validation_errors(); ?>

      <?php echo form_open('create'); //open a form in the 'create' controller ?> 
      

          <div class="input-group">
              <input name="class_type" type="text" size="30" class="form-control" placeholder="Class Type" />
              <span class="input-group-addon" style="cursor:pointer;">
                  <span class="glyphicon glyphicon-tag"></span>
              </span>
          </div>

          <div class="input-group">
              <input name="instructor" type="text"  size="30" class="form-control" placeholder="instructor" />
              <span class="input-group-addon" style="cursor:pointer;">
                  <span class="glyphicon glyphicon-education"></span>
              </span>
          </div>

          <div class="input-group">
              <input name="location" type="text" size="30" class="form-control" placeholder="Location" />
              <span class="input-group-addon" style="cursor:pointer;">
                  <span class="glyphicon glyphicon-map-marker"></span>
              </span>
          </div>

          <div class="input-group">
              <input name="start_time" type="text" size="30" class="form-control" placeholder="Start Time" />
              <span class="input-group-addon" style="cursor:pointer;">
                  <span class="glyphicon glyphicon-time"></span>
              </span>
          </div>


          <div class="input-group">
              <input name="date" type="text" id="datepicker" size="30" class="form-control" placeholder="Select Date" />
              <span class="input-group-addon" style="cursor:pointer;">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>

          <input style="float: right;" class="btn" type="submit" name="submit" value="Add class" />

        </div>
    </div> <!-- .content-wrapper -->
</main> <!-- .cd-main-content -->

<!-- END TEST -->







