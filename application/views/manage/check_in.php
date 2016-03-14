<html>
    <head>
        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
        <!--Bootstrap CSS and JS-->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>


        <!--jQuery validation plugin-->
         <script src="<?php echo base_url('assets/js/jquery-validate/jquery-validate.min.js')?>"></script>
         <script src="<?php echo base_url('assets/js/validator.js')?>"></script>
         <!--jBox CSS and JS-->
         <script src="<?php echo base_url('assets/js/jBox/Source/jBox.min.js');?>" ></script>
         <link rel="stylesheet" href="<?php echo base_url('assets/js/jBox/Source/jBox.css');?>" />

        <!--Sweetalert modal plugin css and js-->
        <script src="<?php echo base_url('assets/js/sweetalert/dist/sweetalert2.min.js');?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('assets/js/sweetalert/dist/sweetalert2.css');?>" >

        <!--Custom CSS checkin page-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/checkin.css');?>">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title><?php echo $title;?></title>
    </head>
    <body>

        <div hidden id="success" style="color:red"><?php if(isset($success)) echo $success; ?></div>
        <div class="content-container">
            <div class="back-container">
                <a class="btn btn-back" href="<?php echo site_url('manage/checkin');?>">back</a>
            </div>

            <div class="field-wrapper">
            <fieldset class="field">
                <!--Class info container-->

                <legend class="leg">
                <div class="class-info-container">
                    <div class="class-info">
                        <div class="class-name"><?php echo $class['class_type']; ?></div>
                        <div class="class-instructor"><?php echo $class['instructor']; ?></div>
                        <div class="class-location"><?php echo $class['location']; ?></div>
                        <div class="class-time"><?php echo $class['start_time']; ?></div>
                        <div class="class-date"><?php echo date('m-d-Y',strtotime($class['date'])); ?></div>
                    </div>
                </div>
                </legend>

                <!--Class sign-in form container-->
                <div class="form-container">
                        <div class="form-center">
                            <form id="check-form" action="<?php echo site_url('checkin/'.$seg);?>" method="post" accept-charset="utf-8">

                                <div hidden><input type="text" name ="class_type" value="<?php echo $class['class_type']?>"/></div>

                                <div class="name form-group">
                                  <input type="text" id="fname" class="form-control" autocomplete="off"  name="fname" placeholder="Full Name" data-required autofocus/>
                                  <div class="hints">Full name is required</div>
                                </div>

                                <div class="email form-group">
                                  <input type="email" id="email" class="form-control" autocomplete="off" name="email"  placeholder="Email"/>
                                  <span class="addon">(optional)</span>
                                </div>

                                <div id="studentID-wrapper" class="form-group">
                                  <label>S</label>
                                  <input id="studentID" class="form-control sID" autocomplete="off" type ="text" data-pattern="\b[0-9]+\b" name="studentID" placeholder="Student ID(without the s)" data-required/>
                                <div class="hintss" style="display:none; color:red;">ID is required. Please enter numbers only.</div>
                                </div>
                                <hr></hr>
                                <div class="attendee form-group">
                                  <label class="radio-label">Select One:</label>
                                  <span class="radio-options"><input type="radio" name="attendee" value="Student"/>Student</span>
                                  <span class="radio-options"><input type="radio" name="attendee" required value="Alumni"/>Alumni</span>
                                  <span class="radio-options"><input type="radio" name="attendee" value="Faculty"/>Faculty</span>
                                  <div style="display:none;">Must select an option</div>
                                </div>

                                <div class="academic form-group">
                                  <label class="radio-label">Student Type:</label>
                                  <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Freshman"/>Freshman</span>
                                  <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Sophmore"/>Sophmore</span>
                                  <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Junior"/>Junior</span></br>
                                  <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Senior"/>Senior</span>
                                  <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Graduate"/>Graduate</span>
                                </div>
                                <div class="button-container"><input id="submit" type="submit" class="btn btn-signin" name ="submit" value ="sign in"/></div>
                            </form>
                        </div>
                </div>
            </fieldset>
            </div><!--field wrapper end-->
        </div><!--content-container-->
        <script>
            $(document).ready(function(){
              //diables academic radio inputs until student is selected as an attendee option.
              $('.academic-select').attr('disabled','true');

              /*
              * Enables the academic radio options if the attendee option selected is student
              * else disables the academic options.
              */
              $('#check-form').on("change",function(){
                  var attendeeVal = $('input[type="radio"]:checked', '#check-form').val();
                  if(attendeeVal=="Student"){
                    $('.academic-select').removeAttr('disabled');
                  }
                  else{
                      $('.academic-select').attr('disabled','true');
                  }
              });

              /*
              *  this is executed if Sign-in is successful
              */
                $("#success").ready(function(){
                    if($("#success").html()!=""){
                       show_checkin_message();
                       setTimeout(function(){
                            window.location.reload();
                        },1000);
                    }
                });


                /*
                * Form validation function
                */
                $("#check-form").validate({
                    onSubmit:true,
                    onChange:true,
                    eachInvalidField:function(){
                        $(this).addClass("error");
                        $(this).closest('.form-group').delay(100).effect("bounce", { times: 2 }, "slow" );
                        $(this).next('div').show();
                    },
                    eachValidField:function(){
                       $(this).closest('input').css("border","1px solid green");
                       $(this).closest('select').css("border","1px solid green");
                        $(this).next('div').hide();
                    }

                });

                /*
                * Creates a small message on the bottom left to indicate successful
                * sign-in
                */
                function show_checkin_message(){
                  new jBox('Notice', {
                      animation:{open:'tada',close:'flip'},
                      content: 'Check-in Successful',
                      attributes: {
                          x: 'left',
                          y: 'bottom'
                      },
                      autoClose:3000,
                      color:'green'

                  });
                }
            });
        </script>
    </body>
</html>
