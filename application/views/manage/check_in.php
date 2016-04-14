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
         <!--jBox CSS and JS-->
         <script src="<?php echo base_url('assets/js/jBox/Source/jBox.min.js');?>" ></script>
         <link rel="stylesheet" href="<?php echo base_url('assets/js/jBox/Source/jBox.css');?>" />

        <!--Custom CSS checkin page-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/checkin.css');?>">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title><?php echo $title;?></title>
    </head>
    <body>
      <?php if($this->session->flashdata('checkin_form_message')=='success'){?>
        <script>
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
        </script>
      <?php }?>
      <?php if($this->session->flashdata('checkin_form_message')=='negative'){?>
        <div class="text-center" style="color:red">Something went wrong! Try Again</div>
      <?php }?>
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
                                  <input type="email" id="email" class="form-control" autocomplete="off" name="email" data-pattern="[a-z0-9]+[_a-z0-9\.-]*[a-z0-9]+@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})"  placeholder="Email" data-required/>
                                  <div class="hints">Email is required</div>
                                </div>

                                <div id="studentID-wrapper" class="form-group">
                                  <label class="sID-label">S</label>
                                  <input id="studentID" class="form-control sID" autocomplete="off" type ="text" data-pattern="\b[0-9]+\b" name="studentID" placeholder="Student ID(without the s)"/>
                                  <div class="hints">numbers only!</div>
                                  <span class="addon">(optional)</span>
                                </div>
                                <hr></hr>

                                <!-- Member type -->
                                <div class="well well-sm text-center">

                                  <h3>Member Type<span>(select one)</span></h3>


                                  <div class="btn-group attendee form-group" data-toggle="buttons">
                                    <label class="btn attendee-selection btn-default">
                                      <input type="radio" name="attendee" value="Student" autocomplete="off" >
                                      <span class="select-label">Student </span><span class="glyphicon glyphicon-ok"></span>
                                    </label>

                                    <label class="btn attendee-selection btn-default">
                                      <input type="radio" name="attendee" required value="Alumni" autocomplete="off">
                                      <span class="select-label">Alumni </span><span class="glyphicon glyphicon-ok"></span>
                                    </label>
                                    <label class="btn attendee-selection btn-default">
                                      <input type="radio" name="attendee" value="Faculty" autocomplete="off">
                                      <span class="select-label">Faculty </span><span class="glyphicon glyphicon-ok"></span>

                                    </label>

                                  </div>

                                  <h3>Acedemic level</h3>
                                  <div class="academic form-group">

                                    <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Freshman"/>Freshman</span>
                                    <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Sophmore"/>Sophmore</span>
                                    <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Junior"/>Junior</span></br>
                                    <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Senior"/>Senior</span>
                                    <span class="radio-options"><input type="radio" class="academic-select" name="academic" value="Graduate"/>Graduate</span>
                                  </div>

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
              $('.academic-select').attr('disabled','disabled');

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
                      $('.academic-select').attr('disabled','disabled');
                      $('input[name=academic]').attr('checked',false);
                  }
              });

              /*
              *  this is executed if Sign-in is successful
              */
                // $("#success").ready(function(){
                //     if($("#success").html()!=""){
                //        show_checkin_message();
                //        setTimeout(function(){
                //             window.location.reload();
                //         },1000);
                //     }
                // });


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
                // function show_checkin_message(){
                //   new jBox('Notice', {
                //       animation:{open:'tada',close:'flip'},
                //       content: 'Check-in Successful',
                //       attributes: {
                //           x: 'left',
                //           y: 'bottom'
                //       },
                //       autoClose:3000,
                //       color:'green'
                //
                //   });
                // }
            });
        </script>
    </body>
</html>
