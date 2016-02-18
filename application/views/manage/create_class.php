
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-sm-12">
      <a class="btn btn-default" href="<?php echo site_url('manage/fitnessclasses'); ?>">Back</a>
      <h2><?php echo $title; ?>  </h2>

       <?php if(isset($success))echo '<div class="success">'.$success.'</div>'; ?>
       
        
        <?php echo form_open('manage/new_fitnessclass'); ?> 
            <div id="extra-wrapper"> 
                <div id="extra" style = "margin-bottom:20px">
                    <select class="form-control" required name="class_type[]">
                      <?php foreach($classtype_options as $option){ ?>
                        <option required value="<?php echo $option['name']; ?>" ><?php echo $option['name']; ?><br /></option>
                      <?php } ?>
                    </select>

              <div class="input-group">
                  <input name="instructor[]" type="text"  size="30" class="form-control" placeholder="instructor" required />
                  <span class="input-group-addon" style="cursor:pointer;">
                      <span class="glyphicon glyphicon-education"></span>
                  </span>
              </div>

              <div class="input-group">
                  <input name="location[]" type="text" size="30" class="form-control" placeholder="Location" required />
                  <span class="input-group-addon" style="cursor:pointer;">
                      <span class="glyphicon glyphicon-map-marker"></span>
                  </span>
              </div>

              <div class="input-group">
                  <input name="start_time[]" type="text" size="30" class="form-control" placeholder="Start Time" required />
                  <span class="input-group-addon" style="cursor:pointer;">
                      <span class="glyphicon glyphicon-time"></span>
                  </span>
              </div>


              <div class="input-group">
                  <input id="datepicker" name="date[]" type="text" size="30" class="form-control" placeholder="Select Date" required />
                  <span class="input-group-addon" style="cursor:pointer;">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div><!--end of extra div-->
        </div><!--end of extra wrapper-->
          <input style="float: right;" class="btn" type="submit" name="submit" value="Add Class" />
        </form>
    </div>
  </div>
</div> <!-- .content-wrapper -->



<script>
    $(document).ready(function(){
          $( "#datepicker" ).datepicker({
                  showButtonPanel: true,
                  dateFormat: "yy-mm-dd"
            });
    });

</script>
