<script>
  $(document).ready(function(){

    /*
    *  Row with week information and social sharing button
    */
    setTimeout(function(){
      $('.anchorDay').addClass('show-visibilitys');
    },400);

    /*
    *   Container for the schedule boxes
    */
    setTimeout(function(){
      $('#fit-schedule').addClass('show-visibility');
    },1000);

    /*
    *  class details slide down
    */
    setTimeout(function(){
      $('.details').addClass('show');
    },1800);

    /*
    *   Container for the schedule boxes
    */
    setTimeout(function(){
      $('.foot').addClass('show-section');
    },2100);



    /*
    *  Social media handling
    */
    $('.sharing').ShareLink({
      title: 'HawkFitness Weekly Schedule',
      text: 'Checkout this week\'s schedule for Monmouth fitness classes',
      image: '<?php echo base_url("assets/images/hawkimage.jpg");?>',
      url: location.href,
      width:480,
      height:480
    });
  });
</script>


    <section id="section1">
          <div class="logo text-center">
            <h3><?php echo $title; ?></h3>  
          </div>
        </div>
    </section> <!--End Section 1-->
    <section id="section2">
        <div class=" container anchorDay text-center">
            <div class="row mobile-social-share">
            		<div class="col-md-9 col-xs-10 col-lg-9">
                  <p class="week-date"> *Week of: <?php echo $week_date[0]." - ".$week_date[1];?></p>
                </div>

                <?php if($user =='public'){?>
                <!-- SOCIAL MEDIA  -->

                <div id="socialHolder" class="col-xs-2 col-md-3 col-lg-3">

                  <div class="share-text"><span>Share: </span></div>
                		<div id="socialShare" class="btn-group share-group">
                        <a data-toggle="dropdown" class="btn btn-info ">
                             <span class="fa fa-share-alt fa-inverse"></span>
                             <span class="fa fa-caret-down fa-inverse"></span>
                           </a>

  			               <ul class="dropdown-menu">
                  				<li>
          					         <a data-original-title="Twitter" rel="tooltip" href="#" class="btn sharing s_twitter" data-placement="left">
          								<i class="fa fa-twitter"></i>
          							     </a>
                					</li>
                					<li>
                						<a data-original-title="Facebook" rel="tooltip" href="#" class="btn sharing s_facebook" data-placement="left">
            								<i class="fa fa-facebook"></i>
            							</a>
                					</li>
                					<li>
                						<a data-original-title="Google+" rel="tooltip"  href="#" class="btn sharing s_plus" data-placement="left">
            								<i class="fa fa-google-plus"></i>
            							</a>
                					</li>
                					<li>
                						<a data-original-title="Pinterest" rel="tooltip"  class="btn sharing s_pinterest" data-placement="left">
            								<i class="fa fa-pinterest"></i>
            							</a>
                					</li>
                        </ul>
    			           </div>
                    </div>
                </div>
                    <!-- END OF SOCIAL MEDIA -->
                <?php } //end tag for public user check?>
          	</div>
        <!-- Beginning of class schedule -->
        <div id="fit-schedule" class="container">
                 <div id="schedule" class ="row">
                   <?php
                       $counter = 0;
                         //foreach loop for days array
                         foreach($week as $w){
                             $class_count = 0;// counter for how many classes are in each day
                             echo '<div class="week-schedule col-lg-3 col-md-3 col-sm-6 col-xs-6 ">';
                             echo '<div class="day">
                                       <div class="day-container">
                                            <p class="day-text">'.$w.'</p>';
                                            //check for if admin is in session
                                            if($user=="admin"){
                                              if($w==$day){
                                                echo'<a href="manage/checkin"><span title="check-in" class="checkin-day fa fa-pencil "></span></a>';
                                              }
                                            }
                                      echo'</div>
                                   </div>';
                                   #bottom half of schedule box
                               echo  '<div class="details">';
                             //for each loop for classes begins
                             foreach ($classes as $class_item){

                                 //if start date of class is equal to day of W
                                 if(date("l",strtotime($class_item['date']))==$w) {
                                   //if first class add margin-top in css to push down from header
                                    if($class_count==0)
                                        echo '<div class="class-list bordered">';
                                     else
                                      echo '<div class="class-list border-top">';
                                     echo '<div class="class-name">
                                             <text class="info">'.$class_item['class_type'].'</text>
                                          </div>
                                          <div class="time">
                                          <text class="info">'.$class_item['start_time'].'<text>
                                          </div>
                                         <div class="location">
                                             <text class="info">'.$class_item['location'].'<text>
                                         </div>
                                         <div class="instructor">
                                             <text class="info">'.$class_item['instructor'].'</text>
                                         </div>';
                                         echo "</div></br>";// div end for each class list

                                     $class_count++;
                                 }
                              }//end foreach loop for classes

                                 //check if there are no scheduled classes for a partcular day
                             if($class_count==0){
                                 echo '<div class="class-list bordered"><p class="info"> No scheduled classes.Check back later for updates.</p></div>';
                             }
                             $class_count=0;//reset class count to 0
                             $counter++;
                             echo "</div>";// div for end of details
                             echo "</div>";//div for end of day
                         }
                     ?>

               </div>

         <div class="row second-row">
           <!-- <div class="col-lg-3 col-md-3 col-sm-3"></div> -->
           <?php
               $counter = 0;
                 //foreach loop for days array
                 foreach($week2 as $w){
                     $class_count = 0;// counter for how many classes are in each day
                         if($counter<1){
                             echo'<div class = "week-schedule col-lg-3 col-md-3 col-sm-6 col-xs-6 col-lg-push-2 ">';
                         }
                         elseif($w=='Sunday'){
                           echo '<div class = "week-schedule col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xs-push-3 col-lg-push-2 col-md-push-0 ">';
                         }
                         else{
                             echo '<div class = "week-schedule col-lg-3 col-md-3 col-sm-6 col-xs-6 col-lg-push-2 ">';
                         }
                     echo '<div class="day">
                             <div class="day-container">
                                  <p class="day-text">'.$w.'</p>';
                                  //check for if admin is in session
                                  if($user=="admin"){
                                    if($w==$day){
                                      echo'<a href="manage/checkin"><span title="check-in" class="checkin-day fa fa-pencil "></span></a>';
                                    }
                                  }
                              echo '</div>
                            </div>';
                              #bottom half of schedule box
                          echo  '<div class="details">';
                     //for each loop for classes begins
                     foreach ($classes as $class_item){

                         //if start date of class is equal to day of W
                         if(date("l",strtotime($class_item['date']))==$w) {
                           //if first class add margin-top in css to push down from header
                            if($class_count==0)
                                echo '<div class="class-list bordered">';
                             else
                              echo '<div class="class-list border-top">';

                             echo '<div class="class-name">
                                     <text class="info">'.$class_item['class_type'].'</text>
                                  </div>
                                  <div class="time">
                                  <text class="info">'.$class_item['start_time'].'<text>
                                  </div>
                                 <div class="location">
                                     <text class="info">'.$class_item['location'].'<text>
                                 </div>
                                 <div class="instructor">
                                     <text class="info">'.$class_item['instructor'].'</text>
                                 </div>';
                                 echo "</div></br>";// div end for each class list

                             $class_count++;
                         }
                      }//end foreach loop for classes

                         //check if there are no scheduled classes for a partcular day
                     if($class_count==0){
                         echo '<div class="class-list bordered"><p class="info"> No scheduled classes.Check back later for updates.</p></div>';
                     }
                     $class_count=0;//reset class count to 0
                     $counter++;
                     echo "</div>";// div for end of details
                     echo "</div>";//div for end of day
                 }
             ?>
        </div>  <!--end of row -->
    </div>
    </section><!--End opf Section2-->
  </div><!--end of wrapper class-->
