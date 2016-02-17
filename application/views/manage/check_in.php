<html>
    <head>
        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <!--Bootstrapp CSS and JS-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

        <!--jQuery validation plugin-->
         <script src="<?php echo base_url('assets/js/jquery-validate/jquery-validate.js')?>"></script>
            
        <!--Sweetalert modal plugin css and js-->
        <script src="<?php echo base_url('assets/js/sweetalert/dist/sweetalert2.min.js');?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('assets/js/sweetalert/dist/sweetalert2.css');?>" >
        <!--Custom CSS checkin page-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/checkin.css')?>">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    </head>
    <body>
       
        <div hidden id="success" style="color:red"><?php if(isset($success)) echo $success; ?></div>
        <div class="content-container">
            <div class="back-container">
                <a class="btn btn-back" href="<?php echo site_url();?>">back</a>
            </div>
            <div class="field-wrapper">
            <fieldset class="field">
                <!--Class info container--->

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

                <!--Class sign-in form container--->
                <div class="form-container">
                    <div class="form">
                        <div class="form-center">
                             <?//php echo form_open('checkin/'.$seg); ?>
                            <form id="check-form" action="<?php echo site_url('checkin/'.$seg);?>" method="post" accept-charset="utf-8">
                                <div hidden><input type="text" name ="class_type" value="<?php echo $class['class_type']?>"/></div>
                                <div class="fname"><input type="text" class="form-control" name="fname" placeholder="First Name" data-required autofocus></div>
                                <div class="lname"><input type="text" class="form-control" name="lname" placeholder="Last Name" data-required></div>
                                <div class="age"><input type="text" class="form-control" name="age" data-pattern="[0-9][0-9]" placeholder="age" maxlength="2" data-required></div>
                                <div class="attendee">
                                    <select id="attendee" class="form-control" name="attendee" data-required>
                                        <option value="" selected disabled >select one</option>
                                        <option value="Student">Student</option>
                                        <option value="Faculty">Faculty</option>
                                        <option value="Alumni">Alumni</option>
                                    </select>
                                </div>
                                <div id="academic-wrapper" hidden>
                                    <select class="form-control" id="academic"name="academic">
                                        <option value="" selected disabled >select one</option>
                                        <option value="Freshman">Freshman</option>
                                        <option value="Sophomore">Sophomore</option>
                                        <option value="Junior">Junior</option>
                                        <option value="Senior">Senior</option>
                                    </select>
                                </div>
                                <div id="studentID-wrapper" hidden>
                                    <input id="studentID" class="form-control" type ="text" data-pattern="\b[0-9]+\b" name="studentID" placeholder="Student ID(without the s)"/>
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
                        
                        $("#studentID-wrapper").removeAttr('hidden');
                        $("#studentID").attr('data-required',true);
                        $("#studentID").attr('placeholder','Student ID(without the s)');
                    }
                    else{
                        $("#academic-wrapper").attr('hidden', true);
                         $("#academic").removeAttr('data-required');
                        $("#academic").val('');
                        
                        $("#studentID-wrapper").removeAttr('hidden');
                        $("#studentID").attr('placeholder','ID number(without the S)');
                        $("#studentID").attr('data-required','true');
                    }
                });
                $("#check-form").validate({
                   
                    onChange:true,
                    eachInvalidField:function(){
                        $(this).closest('div').effect("shake",{time:2, direction:"right"});
                        $(this).closest('input').css("border","1px solid red");
                        $(this).closest('select').css("border","1px solid red");
                    },
                    eachValidField:function(){
                         $(this).closest('input').css("border","1px solid green");
                        $(this).closest('select').css("border","1px solid green");
                    }
//                    valid:function(){
//                        swal({   
//                            title: 'Sign in Successful',
//                            type: 'success',
//                            timer: 4000
//                        });
//                    }
                                          
                });
         
               
            });
        </script>
    </body>
</html>