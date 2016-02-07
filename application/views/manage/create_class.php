


<!-- TEST -->


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-sm-12">
      <a class="btn btn-default" href="<?php echo site_url('manage/fitnessclasses'); ?>">Back</a>
      <h2><?php echo $title; ?>  </h2>

      

      <?php echo validation_errors(); ?>

      <?php echo form_open('manage/new_fitnessclass'); //open a form in the 'create' controller ?> 
              
                <select class="form-control" name="class_type">
                  <?php foreach($classtype_options as $option): ?>
                    <option value="<?php echo $option['name']; ?>" ><?php echo $option['name']; ?><br /></option>
                  <?php endforeach; ?>
                </select>
              
              
                  
              
              
              <!-- <input name="class_type" type="text" size="30" class="form-control" placeholder="Class Type" />
              <span class="input-group-addon" style="cursor:pointer;">
                  <span class="glyphicon glyphicon-tag"></span>
              </span> -->
          

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

          <input style="float: right;" class="btn" type="submit" name="submit" value="Add Class" />

    </div>
  </div>
</div> <!-- .content-wrapper -->



<script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showButtonPanel: true,
      dateFormat: "yy-mm-dd"
    });
  });
</script>
