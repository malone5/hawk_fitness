<div class="container-fluid">
  <div class="row page-header">
    <div class="col-md-4">
        <h1>Dashboard</h1>
    </div>
    <div class="col-md-4">
      <div class="user-links">
        <a href="<?php echo base_url('manage/account')?>" class="pull-left">Account Settings</a>
        <a href="<?php echo base_url('manage/logout')?>" class="pull-right">Logout</a>
      </div>
    </div>
    <div class="col-md-4"></div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <?php if(isset($role) AND $role == 'limited'){ ?>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <a href="<?php echo site_url('manage/checkin');?>">
          <?php
            if(isset($checkin_amount)){
              if($checkin_amount > 0){
          ?>
          <div class="panel panel-green">
          <?php
              }
              else{
          ?>
          <div class="panel panel-red">
          <?php
              }
            }
          ?>
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-6 text-center">
                          <span class="fa fa-check-square-o fa-5x"></span>
                      </div>
                      <div class="col-xs-6 text-center">
                          <span class="check-in" style="font-size:40px;"><?php if(isset($checkin_amount)){ echo $checkin_amount;?></span>
                          <?php echo '<div> available</div>';}?>
                      </div>
                  </div>
              </div>
              <div class="panel-footer">
                  <span class="pull-left dash-text">Check-in</span>
                  <span class="pull-right dash-text"><span class="fa fa-arrow-circle-right"></span></span>
                  <div class="clearfix"></div>
              </div>
          </div>
        </a>
      </div>
      <div class="col-md-4"></div>
    </div>
  <?php }else{?>
  <div class="row">
    <div class="col-md-3">
      <a href="<?php echo site_url('manage/checkin');?>">
        <?php
          if(isset($checkin_amount)){
            if($checkin_amount > 0){
        ?>
        <div class="panel panel-green">
        <?php
            }
            else{
        ?>
        <div class="panel panel-red">
        <?php
            }
          }
        ?>
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6 text-center">
                        <span class="fa fa-check-square-o fa-5x"></span>
                    </div>
                    <div class="col-xs-6 text-center">
                        <span class="check-in" style="font-size:40px;"><?php if(isset($checkin_amount)){ echo $checkin_amount;?></span>
                        <?php echo '<div> available</div>';}?>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <span class="pull-left dash-text">Check-in</span>
                <span class="pull-right dash-text"><span class="fa fa-arrow-circle-right"></span></span>
                <div class="clearfix"></div>
            </div>
        </div>
      </a>
    </div>
      <div class="col-md-3 ">
        <a href="<?php echo site_url('manage/fitnessclasses'); ?>">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-12 text-center">
                          <span class="fa fa-calendar-o fa-5x"></span>
                      </div>
                  </div>
              </div>
                  <div class="panel-footer">
                      <span class="pull-left dash-text">Manage Classes</span>
                      <span class="pull-right dash-text"><span class="fa fa-arrow-circle-right"></span></span>
                      <div class="clearfix"></div>
                  </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 ">
        <a href="<?php echo site_url('manage/classtypes'); ?>">
          <div class="panel panel-yellow">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-12 text-center">
                          <span class="fa fa-tags fa-5x"></span>
                      </div>
                  </div>
              </div>
                  <div class="panel-footer">
                      <span class="pull-left dash-text">Manage Class Types</span>
                      <span class="pull-right dash-text"><span class="fa fa-arrow-circle-right"></span></span>
                      <div class="clearfix"></div>
                  </div>
          </div>
        </a>
      </div>
      <div class="col-md-3">
        <a href="<?php echo site_url('manage/reports'); ?>">
          <div class="panel panel-orange">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-12 text-center">
                          <span class="fa fa-table fa-5x"></span>
                      </div>
                  </div>
              </div>
                  <div class="panel-footer">
                      <span class="pull-left dash-text">Generate Reports</span>
                      <span class="pull-right dash-text"><span class="fa fa-arrow-circle-right"></span></span>
                      <div class="clearfix"></div>
                  </div>
          </div>
        </a>
      </div>
  </div>
  <?php }?>
</div>
<!-- /.row -->
