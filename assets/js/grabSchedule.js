$(document).ready(function(){
   
    var q =new Date();
    //array to retrieve current day
    var weekToDay = ["Sunday","Monday","Tuesday","Wednesday","Thursday",
                "Friday", "Saturday"];
    var todayDay = weekToDay[q.getDay()];//  variable for Today's Day
    $("#anchor-day").attr("href","#"+todayDay);

    function display() {

//     $("#section2").html("<img src='assets/images/loading_spinner.gif'/>");
        $.ajax({
            type: "POST",
            url: "HomeCtrl/getSchedule",
            async: false,
            dataType:"json",
            success: function (data ,event) {



                // array for weeks schedule
                var week = ["Monday","Tuesday","Wednesday","Thursday",
                            "Friday", "Saturday","Sunday"];
                var txt="";
                var txt2="<div id='row2' class='row'>";
                var counter =0;

                for(var j=0; j<week.length;j++){
                    //first row
                    if(j<4){
                        var class_count=0;
                        if(j<1){
                            txt+="<div id ='"+week[j]+"' class='week-schedule col-md-2 col-md-offset-1'>";
                        }
                        else{
                            txt+="<div id ='"+week[j]+"' class='week-schedule col-md-2'>";
                        }
                        txt+="<div class='box-wrapper "+week[j]+"1'><div class='day "+week[j]+"'><h3>"+week[j]+"</h3></div><div class='details "+week[j]+"'>";
                        for (var i=0; i<data.length;i++)
                        {
                            var class_date = new Date(data[i]["date"]);
                            var class_day = class_date.getDay(); //integer value of the day 
                            var string_day = week[class_day]; // string value of the day
                            if (string_day == week[j]){

                                txt+="<div class='class-list'><div class='class-name'><span class='info'>"+data[i]["class_type"]+"</span> </div><div class='location'><span class='info'>"+data[i]["location"]+"</span></div><div class='time'><span class='info'>"+data[i]["start_time"]+"</span></div><div class='instructor'><span class='info'>"+data[i]["instructor"]+"</span></div></div>";
                                
                                 if (typeof session_check !== 'undefined') {
                                     //admin view of links next to each class
                                      txt+="<div class='check-in'><a href='checkin/"+data[i]["id"]+"'>Sign in</a></div>";
                                    }
                                else{
                                    //regular user view of links/options next to each class
                                      txt+='<div id="share" class="social-media">'+
                                                '<div class="social-buttons"><a class="sharer button" data-sharer="facebook" data-url=""><span class="fa fa-facebook fa-1x"></span></a></div>'; 
                                      txt+='<div class="social-buttons-twitter"><a class="sharer button" data-sharer="twitter" data-title="Checkout Sharer.js!" data-via="ellisonleao" data-hashtags="awesome, sharer.js" data-url="https://ellisonleao.github.io/sharer.js/"><span class="fa fa-twitter"></span></a></div></div>'
                                }
                                class_count++;
                            }
                        }//end of loop for classes

                      if(class_count ==0){
                            txt+="<p class=info>No sheduled classes. Check back later for updates.</p>" ;   
                        }
                        class_count=0;
                        counter++;
                        txt+="</div></div></div>";
                    }
                    //second row
                    else{
                         var class_count=0;
                        if(j==4){
                            txt2+="<div id ='"+week[j]+"' class='week-schedule col-md-2 col-md-offset-2'>";
                        }
                        else{
                            txt2+="<div id ='"+week[j]+"' class='week-schedule col-md-2'>";
                        }
                        txt2+="<div class='box-wrapper "+week[j]+"1'><div class='day "+week[j]+"'><h3>"+week[j]+"</h3></div><div class='details "+week[j]+"'>";
                        for (var i=0; i<data.length;i++)
                        {
                            var d = new Date(data[i]["date"]);
                            var c = d.getDay();
                            var e = week[c];
                            if (e == week[j]){
                               
                                txt2+="<div class='class-list'><div class='class-name'><span class='info'>"+data[i]["class_type"]+"</span> </div><div class='location'><span class='info'>"+data[i]["location"]+"</span></div><div class='time'><span class='info'>"+data[i]["start_time"]+"</span></div><div class='instructor'><span class='info'>"+data[i]["instructor"]+"</span></div></div>";
                                
                                if (typeof session_check !== 'undefined') {
                                     //admin view of links next to each class
                                      txt2+="<div class='check-in'><a href='checkin/"+data[i]["id"]+"'>Sign in</a></div>";
                                }
                                else{
                                    //regular user view of links/options next to each class
                                       txt2+='<div id="share" class="social-media">'+
                                                '<div class="social-buttons"><a class="sharer button" data-sharer="facebook" data-url=""><span class="fa fa-facebook fa-1x"></span></a></div>'; 
                                      txt2+='<div class="social-buttons-twitter"><a class="sharer button" data-sharer="twitter" data-title="Checkout Sharer.js!" data-via="ellisonleao" data-hashtags="awesome, sharer.js" data-url="https://ellisonleao.github.io/sharer.js/"><span class="fa fa-twitter"></span></a></div></div>'
                                }
                                class_count++;
                            }
                        }//end of loop for classes

                      if(class_count ==0){
                            txt2+="<p class=info>No sheduled classes. Check back later for updates.</p>" ;   
                        }
                        class_count=0;
                        counter++;
                        txt2+="</div></div></div>";
                    }
               }
                txt2+="</div>";

//                            var monthNames = [
//                              "01", "02", "03",
//                              "04", "05", "06", "07",
//                              "08", "09", "10",
//                              "11", "12"
//                            ];

                $("#schedule").html(txt);
                $("#fit-schedule").append(txt2);
                $("."+todayDay).css("border-color","azure");
                $("."+todayDay+"1").css("box-shadow","0 0 12px 6px #FFDF00");
//              $("."+todayDay+"1").css("border-bottom-left-radius","25px");
//              $("."+todayDay+"1").css("border-bottom-right-radius","25px");
                $("#"+todayDay).css("padding-top","15px");
               
//                            var check = monthNames[q.getMonth()]+"/"+q.getDate()+"/"+q.getFullYear()+" "+formatAMPM(q);
//                            $("#last-check p").html(check);
            }


         });
      }
   
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
     
$("#schedule").ready(function(){
         display();
     });
        
    $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 700, 'swing');
	});
});