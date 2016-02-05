$(document).ready(function(){
    // format time XX:XX AM/PM
                function formatAMPM(date) {
                  var hours = date.getHours();
                  var minutes = date.getMinutes();
                  var ampm = hours >= 12 ? 'pm' : 'am';
                  hours = hours % 12;
                  hours = hours ? hours : 12; // the hour '0' should be '12'
                  minutes = minutes < 10 ? '0'+minutes : minutes;
                  var strTime = hours + ':' + minutes + ' ' + ampm;
                  return strTime;
                }
                
                function display() {

//                    $("#section2").html("<img  src='assets/images/loading_spinner.gif'/>");
                    $.ajax({
                        type: "POST",
                        url: "HomeCtrl/getSchedule",
                        async: false,
                        dataType:"json",
                        success: function (data ,event) {
                            var week = ["Monday",
                                        "Tuesday",
                                        "Wednesday",
                                        "Thursday",
                                        "Friday"];
                            var txt="";
                            var counter =0;
                            for(var j=0; j<week.length;j++){
                                var class_count=0;
                                if(counter<1){
                                    txt+="<div class='week-schedule col-md-2 col-md-offset-1'>";
                                }
                                else{
                                    txt+="<div class='week-schedule col-md-2'>";
                                }
                                txt+="<div class='day'><h3>"+week[j]+"</h3></div><div class='details'>";
                                for (var i=0; i<data.length;i++)
                                {
                                    var d = new Date(data[i]["date"]);
                                    var c = d.getDay();
                                    var e = week[c];
                                    if (e == week[j]){
                                        
                                        txt+="<div class='class-list'><div class='class-name'><text class='info'>"+data[i]["name"]+"</text> </div><div class='location'><text class='info'>"+data[i]["location"]+"<text></div><div class='time'><text class='info'>"+data[i]["start_time"]+"<text></div><div class='instructor'><text class='info'>"+data[i]["instructor"]+"</text></div></div>";
                                        class_count++;
                                    }
                                }//end of loop for classes
                              if(class_count ==0){
                                    txt+="<p class=info>No sheduled classes. Check back later for updates.</p>" ;   
                                }
                                class_count=0;
                                counter++;
                                txt+="</div></div>";
                           }
                            if(txt !=""){
    //                                tab = document.getElementById("results");
    //                                tab.innerhtml = txt;
                                var monthNames = [
                                  "01", "02", "03",
                                  "04", "05", "06", "07",
                                  "08", "09", "10",
                                  "11", "12"
                                ];
                                    
                                $("#schedule").html(txt);
                                var q = new Date();
                                var check = monthNames[q.getMonth()]+"/"+q.getDate()+"/"+q.getFullYear()+" "+formatAMPM(q);
                                $("#last-check p").html(check);
                            }
                        }


                     });
                  }

         $("#schedule").ready(function(){
             display();
         });

        $("#refreshSchedule").click(function(){
            display();
        })
        
//       Smooth page scroll animation
                  $('a[href^="#"]').on('click',function (e) {
                    e.preventDefault();

                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                    });
                });
});