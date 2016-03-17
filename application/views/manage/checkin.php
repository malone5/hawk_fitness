<div>
  <div class="row">
    <h1 class="text-center">Available Check-ins'</h1>
    <hr>
  </div>
  <?php
      if(isset($classes) AND $classes==0){
        echo "no classes available today";
      }
      else{
        foreach($classes as $class){?>


          <div class="fluid-container col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="caption text-center">
                <p><?php echo date_format(date_create($class['date']),"M-d-Y"); ?></p>
                <hr>
                <h3><?php echo $class['class_type']?></h3>
                <h4><?php echo $class['instructor']?></h4>
                <p><?php echo $class['location']?></p>
                <p><?php echo $class['start_time']?></p>
                <hr>
                <p><a class="btn btn-success" href="<?php echo site_url('checkin').'/'.$class['id'];?>">Check In <i class="glyphicon glyphicon-ok"></i></a></p>
              </div>
            </div>
          </div>





        <?php }
      }?>
</div>
