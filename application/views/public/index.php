<script>
  $(document).ready(function(){
    $('li').addClass('hvr-bob');
    $('.details').hide();
    $('.footer').hide();
    $('#section2').hide();

    /*
    * Show the schedule without the classes
    */
    $('#section2').delay(400).slideDown({
      easing:"swing",
      complete:bottom()
    });

    /*
    * Show the classes and then the footer
    */
    function bottom(){
      $('.details').delay(1000).slideDown({easing:"swing"});
      $('.footer').delay(1500).fadeIn({easing:"swing"});
    }

    /*
    *  Social media handling
    */
    $('.sharing').ShareLink({
      title: 'HawkFitness Weekly Schedule',
      text: 'Checkout this week\'s schedule for Monmouth fitness classes',
      url: location.href,
      class_prefix: 'btn-',
      width:480,
      height:480
    });
  });
</script>


    <section id="section1">
        <div class="logo-picture">
          <div class="picture">
            <p>{Insert logo image here}</p>
          </div>
        </div>

        <div class="Logo  text-center">
          <div class="drop">
            <h3>HawkFitness</h3>
          </div>
        </div>
    </section> <!--Enc Section 1-->
    <div class="wrapper">
    <section id="section2">
        <div class=" container anchorDay text-center">
            <!-- <div class="row week-container">
            </div> -->
            <div class="row today-container">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <a class="visible-xs-block" id="anchor-day" style="font-size:15px"><strong>Today's Schedule</strong></a>
              </div>
              <div class="col-md-4"></div>
            </div>
            <!-- SOCIAL MEDIA  -->
            <div class="row mobile-social-share">
            		<div class="col-md-9 col-xs-10 col-lg-9">
                  <p class="week-date"> *Week of: <?php echo $week_date[0]." - ".$week_date[1];?></p>
                </div>
                <div id="socialHolder" class="col-xs-2 col-md-3 col-lg-3">
                  <div class="share-text"><span>Share: </span></div>
                		<div id="socialShare" class="btn-group share-group">
                        <a data-toggle="dropdown" class="btn btn-info ">
                             <span class="fa fa-share-alt fa-inverse"></span>
                             <span class="fa fa-caret-down fa-inverse"></span>
                           </a>

  			               <ul class="dropdown-menu">
                  				<li>
          					         <a data-original-title="Twitter" rel="tooltip"  href="#" class="btn sharing btn-twitter" data-placement="left">
          								<i class="fa fa-twitter"></i>
          							     </a>
                					</li>
                					<li>
                						<a data-original-title="Facebook" rel="tooltip"  href="#" class="btn sharing btn-facebook" data-placement="left">
            								<i class="fa fa-facebook"></i>
            							</a>
                					</li>
                					<li>
                						<a data-original-title="Google+" rel="tooltip"  href="#" class="btn sharing btn-plus" data-placement="left">
            								<i class="fa fa-google-plus"></i>
            							</a>
                					</li>
                					<li>
                						<a data-original-title="Pinterest" rel="tooltip"  class="btn sharing btn-pinterest" data-placement="left">
            								<i class="fa fa-pinterest"></i>
            							</a>
                					</li>
                        </ul>
    			           </div>
                    </div>
                </div>
                    <!-- END OF SOCIAL MEDIA -->
            	</div>
        </div>
        <!-- Beginning of class schedule -->
        <div id="fit-schedule" class="container">
                 <div id="schedule" class ="row">
                   <?php
                       $counter = 0;
                         //foreach loop for days array
                         foreach($week as $w){
                             $class_count = 0;// counter for how many classes are in each day
                                 //echo '<div class="week-schedule col-lg-3 col-md-3 col-sm-3  ">';
                                 if($counter<1){
                                     echo'<div class = "week-schedule col-lg-3 col-md-3 col-sm-3  ">';
                                 }
                                 else{
                                     echo '<div class = "week-schedule col-lg-3 col-md-3 col-sm-3 ">';
                                 }
                             echo '<div class="day">
                                       <div class="day-container"> <p>'.$w.'</p></div>
                                     </div>
                                     <div class="details">';
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
                                 echo '<p class="info"> No scheduled classes.Check back later for updates.</p>';
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
                         //echo '<div class="week-schedule col-lg-4 col-md-4 col-sm-3  ">';
                         if($counter<1){
                             echo'<div class = "week-schedule col-lg-3 col-md-3 col-sm-3 col-lg-offset-1 ">';
                         }
                         else{
                             echo '<div class = "week-schedule col-lg-3 col-md-3 col-sm-3 ">';
                         }
                     echo '<div class="day">
                               <div class="day-container"> <p>'.$w.'</p></div>
                             </div>
                             <div class="details">';
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
                         echo '<p class="info"> No scheduled classes.Check back later for updates.</p>';
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
