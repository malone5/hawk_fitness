<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-md-3">
      <div class="panel panel-green">
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
          <a href="<?php echo site_url('manage/checkin');?>">
              <div class="panel-footer">
                  <span class="pull-left">Check-in</span>
                  <span class="pull-right"><span class="fa fa-arrow-circle-right"></span></span>
                  <div class="clearfix"></div>
              </div>
          </a>
      </div>
  </div>
    <div class="col-md-3 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <span class="fa fa-calendar-o fa-5x"></span>
                    </div>
                </div>
            </div>
            <a href="<?php echo site_url('manage/fitnessclasses'); ?>">
                <div class="panel-footer">
                    <span class="pull-left">Manage Classes</span>
                    <span class="pull-right"><span class="fa fa-arrow-circle-right"></span></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <span class="fa fa-tags fa-5x"></span>
                    </div>
                </div>
            </div>
            <a href="<?php echo site_url('manage/classtypes'); ?>">
                <div class="panel-footer">
                    <span class="pull-left">Manage Class Types</span>
                    <span class="pull-right"><span class="fa fa-arrow-circle-right"></span></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <span class="fa fa-table fa-5x"></span>
                    </div>
                </div>
            </div>
            <a href="<?php echo site_url('manage/reports'); ?>">
                <div class="panel-footer">
                    <span class="pull-left">Generate Reports</span>
                    <span class="pull-right"><span class="fa fa-arrow-circle-right"></span></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->
