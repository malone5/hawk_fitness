


<!-- TEST -->


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-sm-12">
      <a class="btn btn-default" href="<?php echo site_url('manage/fitnessclasses'); ?>">Back</a>
        <div class="title"><h2><?php echo $title; ?></h2></div>

      

        <div hidden id="success-class"><?php if(isset($success)) echo $success; ?></div>
       
<!--
        <div style="width:200px;float:right; margin-right:10px;">
            <span style="margin-right:20px;">Add more entries: </span>
            <div style="margin-left:60px;">
                 <a id="remove" class="glyphicon glyphicon-minus" style="text-decoration:none;font-size:20px;"  href="javascript:;"></a>
                <span id="amount" style="margin-left:5px; margin-right:5px; font-size:20px;"></span>
                <a id="add" class="glyphicon glyphicon-plus" style="text-decoration:none; font-size:20px;" href="javascript:;"></a>
            </div>
        </div>  
-->
        
        <?php //echo form_open('manage/new_fitnessclass'); //open a form in the 'create' controller ?> 
        <form action="<?php echo site_url('manage/new_fitnessclass');?>" id="class-form" method="post" accept-charset="utf-8">
            <div id="extra-wrapper"> 
                <div id="extra" >
                    <div class="form-description"> *All field are required</div>
                        <div class="form-group has-feedback">
                            <select class="form-control" data-required data-toggle="tooltip" data-placement="left" title="class name is important"   id="class_type"  name="class_type[]">   
                                <option disabled selected value=''>Select Class</option>
                              <?php foreach($classtype_options as $option){ ?>
                                <option required value="<?php echo $option['name']; ?>" ><?php echo $option['name']; ?><br /></option>
                                    <?php } ?>
                            </select>
                        </div>
                        <div class="form-group has-feedback">
                              <input name="instructor[]"  data-toggle="tooltip" data-placement="left" title="instructor is important" id="instructor" type="text" data-required  size="30" class="form-control" placeholder="instructor"  />

                                  <span class="glyphicon glyphicon-education form-control-feedback"></span>

                        </div>
                          <div class="form-group has-feedback">
                              <input name="location[]" id="location" data-toggle="tooltip" data-placement="left" title="location is important" type="text" size="30" data-required class="form-control" placeholder="Location"  />
                                  <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                              <input name="start_time[]" type="time" size="30" class="form-control" placeholder="Start Time" data-toggle="tooltip" data-placement="left" title="start time is important" data-required />
                                <span class="glyphicon glyphicon-time form-control-feedback"></span>
                          </div>

                        <div class="form-group has-feedback">
                          <input name="date[]" type="text" size="30" class="datepickers form-control" placeholder="Select Date" data-toggle="tooltip" data-placement="left" title="date is important" data-required />
                              <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                        </div>
                </div><!--end of extra div-->
            </div><!--end of extra wrapper-->
            <div class="submit"><input  class="btn" type="submit" id="submit" name="submit" value="Add Class" /></div>
        </form>
    </div>
  </div>
</div> <!-- .content-wrapper -->



<script>
    $(document).ready(function(){
          $( ".datepickers" ).datepicker({
                  showButtonPanel: true,
                  dateFormat: "yy-mm-dd"
            });
     
            if($("#success-class").html()!=""){
                swal({   
                    title: 'classes created',
                    type: 'success',
                    timer: 1000 
                 });
                 setTimeout(function(){
                    window.location.reload();
                },1000);
            }
   
        $('[data-toggle="tooltip"]').tooltip();
        $("#class-form").validate({
                onChange:true,
                onkeyup:true,
                eachValidField:function(){
                    $(this).closest('input').css('border','2px solid green');
                    $(this).closest('select').css('border','2px solid green');
                    $(this).closest('[data-toggle="tooltip"]').tooltip('hide');
                },
                eachInvalidField: function(){
                    $(this).closest('div').effect("shake",{times:2,direction:"right"});
                    $(this).closest('input').css("border","1px solid red");
                    $(this).closest('select').css("border","1px solid red");
                    $(this).closest('[data-toggle="tooltip"]').tooltip('show');
            
                    
                }
         
        });
        
//        $("#class-form").on("submit",function(){
//            if($("#instructor").val()=="" || $("#location").val()=="" ){
//                $(".form-control").attr("placeholder","cannot be blank");
//                $(this).css("border","1px solid red");
//                $(this).effect("shake");
//                return false;
//            }
//            else{
//                return true;
//            }
//        }); 
    });

   // $(document).ready(function(){
//        $( ".datepicker" ).datepicker({
//              showButtonPanel: true,
//              dateFormat: "yy-mm-dd"
//        });
//
//        $(document).on('focus',".datepickers", function(){
//                $(this).datepicker({
//                     showButtonPanel: true,
//                    dateFormat: "yy-mm-dd"
//                });
//        });                               
//        counter=1;
//       
//        $("#amount").html(counter);
//         $("#remove").hide();
//       $("#add").on('click',function(){
//            counter++;
//            $("#remove").show();
//            $("#amount").html(counter);
//            var temp = $("#extra").html();
//            $("#extra-wrapper").append("<div id='added-form"+counter+"'>"+temp+"</div>");
//            $("#added-form"+counter).css("margin-top","25px");
//       });
//        
//        $("#remove").on("click", function(){
//            if(counter==1){
//                 $("#remove").hide();
//            }
//            else{
//               $("#added-form"+counter).remove(); 
//                counter--;
//                $("#amount").html(counter);
//            }
//        });
//    

   // });

</script>
