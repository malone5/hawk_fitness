<script>
  var session_check =  '<?php if($this->session->userdata('logged_in'))echo json_encode($this->session->userdata('logged_in'));?>';
</script>
<section id="section1">
    <div class="dummy"></div>
        <div class="Logo  text-center">     
            <div class="drop">
                <h3 class="title"><?php echo $title; ?></h3>      
            </div>
        </div>
    </div>

    
</section><!--End Section 1-->
<div class="wrapper">
<section id="section2">
    <div class="anchorDay text-center">
        <a class="visible-xs-block visible-sm" id="anchor-day" href="javascript:;" style="font-size:15px"><strong>Today's Schedule</strong></a>
       
    </div>
         <!-- Beginning of class schedule -->
         <div class="schedule-wrapper">
            <div id="fit-schedule" class="container-fluid">
                <div id="schedule" class ="row">
                    <!--Dynamic Schedule-->
                </div>
            </div>
        </div>
</section><!--End of Section2-->
</div>

