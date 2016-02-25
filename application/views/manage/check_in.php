<html>
    <head>
        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
        <!--Bootstrap CSS and JS-->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


        <!--jQuery validation plugin-->
         <script src="<?php echo base_url('assets/js/jquery-validate/jquery-validate.min.js')?>"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>

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
                    <div class="form">
                        <div class="form-center">
                             <?//php echo form_open('checkin/'.$seg); ?>
                            <form id="check-form" action="<?php echo site_url('checkin/'.$seg);?>" method="post" accept-charset="utf-8">

                                <div hidden><input type="text" name ="class_type" value="<?php echo $class['class_type']?>"/></div>

                                <div class="fname"><input type="text" class="form-control" data-toggle="tooltip" data-placement="left" title="First Name is important" name="fname" placeholder="First Name" data-required autofocus/></div>

                                <div class="lname"><input type="text" class="form-control" data-toggle="tooltip" data-placement="left" title="Last Name is important" name="lname"  placeholder="Last Name" data-required></div>

                                <div class="age"><input type="text" class="form-control" name="age"data-pattern="[0-9][0-9]" data-toggle="tooltip" data-placement="left" title="age must be numbers only" placeholder="age" maxlength="2" data-required></div>

                                <div class="attendee">
                                    <select id="attendee" class="form-control" data-toggle="tooltip" data-placement="left" title ="Must select an option" name="attendee" data-required>
                                        <option value="" selected disabled >select one</option>
                                        <option value="Student">Student</option>
                                        <option value="Faculty">Faculty</option>
                                        <option value="Alumni">Alumni</option>
                                    </select>
                                </div>

                                <div id="academic-wrapper" hidden>
                                    <select class="form-control" id="academic" data-toggle="tooltip" data-placement="left" title="please select academic year" name="academic">
                                        <option value="" selected disabled >select one</option>
                                        <option value="Freshman">Freshman</option>
                                        <option value="Sophomore">Sophomore</option>
                                        <option value="Junior">Junior</option>
                                        <option value="Senior">Senior</option>
                                    </select>
                                </div>

                                <div id="studentID-wrapper" >
                                    <input id="studentID" class="form-control" type ="text" data-toggle="tooltip" data-placement="left" title="ID is required" data-pattern="\b[0-9]+\b" name="studentID" placeholder="Student ID(without the s)" data-required/>
                                </div>

                                <div class="button-container"><input type="submit" class="btn btn-signin" name ="submit" value ="sign in"/></div>
                            </form>
                        </div>
                    </div>
                </div>
            </fieldset>
            </div><!--field wrapper end-->
        </div><!--content-container-->
        <script>
            $(document).ready(function(){

                $('[data-toggle="tooltip"]').tooltip();

                $("#success").ready(function(){
                     if($("#success").html()!=""){
                        swal({
                            title: 'Sign in Successful',
                            type: 'success',
                            timer: 1200
                        });
                       setTimeout(function(){
                            window.location.reload();
                        },1000);
                    }
                });

                  $("#attendee").on('change',function(){
                    if($(this).val() == "Student"){

                        $("#academic-wrapper").removeAttr('hidden');
                        $("#academic").attr('data-required', true);
                        $("#academic").val('');
                        $("#academic").attr('autofocus',true);


                        // $("#studentID-wrapper").removeAttr('hidden');
                        // $("#studentID").attr('data-required',true);
                        $("#studentID").attr('placeholder','Student ID(without the s)');
                    }
                    else{
                        $("#academic-wrapper").attr('hidden', true);
                         $("#academic").removeAttr('data-required');
                        $("#academic").val('');

                        // $("#studentID-wrapper").removeAttr('hidden');
                        $("#studentID").attr('placeholder','ID number(without the S)');
                        // $("#studentID").attr('data-required','true');
                    }
                });
                $("#check-form").validate({
                    onSubmit:true,
                    eachInvalidField:function(){
                        $(this).closest('div').effect("bounce",{time:1, direction:"right"});
                        $(this).closest('input').css("border","1px solid red");
                        $(this).closest('select').css("border","1px solid red");
                        $(this).closest('[data-toggle="tooltip"]').tooltip();
                    },
                    eachValidField:function(){
                         $(this).closest('input').css("border","1px solid green");
                        $(this).closest('select').css("border","1px solid green");
                        $(this).closest('[data-toggle="tooltip"]').tooltip('destroy');

                    }

                });


            });
        </script>
    </body>
</html>
