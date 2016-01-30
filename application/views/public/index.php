<!---
-   query for last five entries of the week
-   server check for date comparisons for weekly schedule query
-
-->



<section id="section1">
    <div class="container-fluid">
        <div class="row text-center">
            <h2>Welcome to HawkFitness</h2>
            <h4>All classes are free to all students, employees and members.  No need to sign up in advance.  Just show up with a water bottle.  We have yoga mats if you need one. Fitness Center Demo Workouts also available.  Please contact jcascone@monmouth.edu</h4>
        </div>
    </div>
</section><!--Enc Section 1-->

<section id="section2">
    <div class="container-fluid">
        <div class ="row">
            <?php  
                  $counter = 0;
                    //foreach loop for days array
                    foreach($week as $w){
                    $class_count = 0;// counter for how many classes are in each day 

                        if($counter<1){
                            echo'<div class = "week-schedule col-md-2 col-md-offset-1">';
                        }
                        else{
                            echo '<div class = "week-schedule col-md-2">';
                        }
                    echo '<div class="day">
                                <h3>'.$w.'</h3>
                            </div>
                            <div class="details">';
                    //for each loop for classes begins
                    foreach ($classes as $class_item){

                        //if start date of class is equal to day of W
                        if(date("l",strtotime($class_item['date']))==$w) {
                            echo '<div class="class-list">';
                            echo '<div class="class-name">
                                    <text class="info">'.$class_item['class_type'].'</text>
                                 </div>
                                <div class="location">
                                    <text class="info">'.$class_item['location'].'<text>
                                </div>
                                <div class="time">
                                    <text class="info">'.$class_item['start_time'].'<text>
                                </div>
                                <div class="instructor">
                                    <text class="info">'.$class_item['instructor'].'</text>
                                </div>';
                                echo "</div>";// div for end of class list

                            $class_count++;
                        }        
                     }//end foreach loop for classes  

                        //check if there are no scheduled classes for a partcular day
                        if($class_count==0){
                            echo '<p class="info"> No scheduled classes.Check back later for updates.</p>';
                        }
                        $class_count=0;
                        $counter++;
                        echo "</div>";// div for end of details
                    echo "</div>";//div for end of day 
                }
            ?>
            </div>
        </div>
</section><!--End Section 2-->

<section id="section3">
    <div class="container-fluid">
        <div class="row">
            <h3 class="text-center">All Classes Offered</h3>
            <div class="class-description">
                <h4>Zumba:</h4>
                <p>Features exotic rhythms set to high-energy Latin and international beats. Before participants know it, they’re getting fit and their energy levels are soaring! There’s no other fitness class like a Zumba Fitness-Party. It’s easy to do, effective and totally exhilarating!</p>
            </div>
            <div class="class-description">
                <h4>Bootcamp</h4>
                <p>Interval training and cardio to get your heart pumping, 45 minute class.</p>
            </div>
            <div class="class-description">
                <h4>Pilates</h4>
                <p>A balanced development of the body through core strength, flexibility, and incorporates a brief cardio routine and an extended toning routine using mat Pilates techniques.</p>
            </div>
            <div class="class-description">
                <h4>Pilates Yoga Fusion</h4>
                <p>Blend of core Pilates movements and traditional yoga stretches and various poses.</p>
            </div>
        </div>
    </div>
</section><!--End Section 3-->
