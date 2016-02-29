<script>
  $(document).ready(function(){
    $('.details').hide();
    $('.footer').hide();
    $('#section2').hide();

    /*
    * Show the schedule without the classes
    */
    $('#section2').delay(600).slideDown({
      duration:700,
      complete:bottom()
    });

    /*
    * Show the classes and then the footer
    */
    function bottom(){
      $('.details').delay(1800).slideDown("slow");
      $('.footer').delay(1500).fadeIn("slow");
    }

  });
</script>

    <section id="section1">
        <div class="dummy">

          </div>

          <div class="Logo  text-center">
            <div class="drop">
              <h3>HawkFitness</h3>
            </div>
          </div>
    </section> <!--Enc Section 1-->
    <div class="wrapper">
    <section id="section2">
        <div class="anchorDay text-center">
            <div class="week-container">
              <p class="week-date"> Week of: <?php echo $week_date[0]." - ".$week_date[1];?></p>
            </div>
            <div class="today-container">
              <a class="visible-xs-block" id="anchor-day" style="font-size:15px"><strong>Today's Schedule</strong></a>
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
