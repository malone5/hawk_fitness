<!---
-   query for last five entries of the week
-   server check for date comparisons for weekly schedule query
-
-->

<div class="schedule-container">
    <div class="row">
    <?php  
         //counter to offset first day so that everything can be centered perfectly
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
                    echo '<text class="info"> No scheduled classes.</text>
                            <text class="info">Check back later for <text class="info">updates.</text></text>
                         ';
                }
                $class_count=0;
                $counter++;
                echo "</div>";// div for end of details
            echo "</div>";//div for end of day 
        }
    ?>
    </div>
</div>
