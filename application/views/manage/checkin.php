<div>
  <?php
      if(isset($classes) AND $classes==0){
        echo "no classes available today";
      }
      else{
        foreach($classes as $class){?>
          <div class="class=container" style="margin-top:10px;">
            <span class="class-name"><?php echo $class['class_type']?></span>
            <div class="class-information"> <?php echo $class['instructor']?></div>
            <div class="class-information"> <?php echo $class['location']?></div>
            <div class="class-information"> <?php echo $class['start_time']?></div>
            <span class="class-link"><a href="<?php echo site_url('checkin').'/'.$class['id'];?>">check in</a></span>
          </div><hr>
        <?php }
      }?>
</div>
