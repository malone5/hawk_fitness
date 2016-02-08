

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-sm-12">

    <a class="btn btn-default" href="<?php echo site_url('manage/fitnessclasses'); ?>">Back</a>

    <h2><?php echo $title; ?> </h2>

    <?php echo validation_errors(); ?>

    <?php echo form_open('manage/fitnessclasses/edit/'.$class['id'].''); //open a form in the 'create' controller ?> 

        <div class="input-group">
            <select class="form-control" name="class_type" selected="<?php echo $class['class_type']; ?>">
                <?php 
                    // If the optionID matches the class_type id the we give the "selected" attribute so it is the default value
                    foreach($classtype_options as $option) 
                    {
                        if ($class['class_type'] == $option['name']) {
                            echo '<option selected="selected" value="'.$option['id'].'" >'.$option['name'].'</option>';
                        } else {
                            echo '<option value="'.$option['name'].'" >'.$option['name'].'</option>';
                        }
                    }
                ?>
            </select>

        </div>

        <div class="input-group">
            <input name="instructor" type="text"  size="30" class="form-control" placeholder="instructor" value="<?php echo $class['instructor']; ?>" />
            <span class="input-group-addon" style="cursor:pointer;">
                  <span class="glyphicon glyphicon-education"></span>
            </span>
        </div>

        <div class="input-group">
            <input name="location" type="text" size="30" class="form-control" placeholder="Location" value="<?php echo $class['location']; ?>"/>
            <span class="input-group-addon" style="cursor:pointer;">
                <span class="glyphicon glyphicon-map-marker"></span>
            </span>
        </div>

        <div class="input-group">
            <input name="start_time" type="text" size="30" class="form-control" placeholder="Start Time" value="<?php echo $class['start_time']; ?>" />
            <span class="input-group-addon" style="cursor:pointer;">
                <span class="glyphicon glyphicon-time"></span>
            </span>
        </div>


        <div class="input-group">
            <input name="date" type="text" id="datepicker" size="30" class="form-control" placeholder="Select Date" value="<?php echo $class['date']; ?>"/>
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

