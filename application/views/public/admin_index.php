<script>
  var session_check =  '<?php if($this->session->userdata('logged_in'))echo json_encode($this->session->userdata('logged_in'));?>';
</script>
<section id="section1">
    <div class="dummy"></div>
<!--
    <div class="container-fluid">
        <div class="row text-center">
            <h2>Welcome to HawkFitness</h2>
            <h4>All classes are free to all students, employees and members.  No need to sign up in advance.  Just show up with a water bottle.  We have yoga mats if you need one. Fitness Center Demo Workouts also available.  Please contact jcascone@monmouth.edu</h4>
        </div>
-->
    </div>
        <div class="Logo  text-center">     
            <div class="drop">
                <h3>HawkFitness</h3>      
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

