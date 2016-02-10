


<!-- TEST -->


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-sm-12">
      <a class="btn btn-default" href="<?php echo site_url('manage/fitnessclasses'); ?>">Back</a>
      <h2><?php echo $title; ?>  </h2>

      

      <?php echo validation_errors(); ?>
       
        <div style="width:200px;float:right; margin-right:10px;">
            <span style="margin-right:20px;">Add more entries: </span>
            <div style="margin-left:60px;">
                 <a id="remove" class="glyphicon glyphicon-minus" style="text-decoration:none;font-size:20px;"  href="javascript:;"></a>
                <span id="amount" style="margin-left:5px; margin-right:5px; font-size:20px;"></span>
                <a id="add" class="glyphicon glyphicon-plus" style="text-decoration:none; font-size:20px;" href="javascript:;"></a>
            </div>
        </div>  
        
        <?php echo form_open('manage/new_fitnessclass'); //open a form in the 'create' controller ?> 
            <div id="extra-wrapper"> 
                <div id="extra" style = "margin-bottom:20px">
                    <select class="form-control" required name="class_type[]">
                      <?php foreach($classtype_options as $option): ?>
                        <option required value="<?php echo $option['name']; ?>" ><?php echo $option['name']; ?><br /></option>
                      <?php endforeach; ?>
                    </select>





                  <!-- <input name="class_type" type="text" size="30" class="form-control" placeholder="Class Type" />
                  <span class="input-group-addon" style="cursor:pointer;">
                      <span class="glyphicon glyphicon-tag"></span>
                  </span> -->


              <div class="input-group">
                  <input name="instructor[]" type="text"  size="30" class="form-control" placeholder="instructor" required />
                  <span class="input-group-addon" style="cursor:pointer;">
                      <span class="glyphicon glyphicon-education"></span>
                  </span>
              </div>

              <div class="input-group">
                  <input name="location[]" type="text" size="30" class="form-control" placeholder="Location" required />
                  <span class="input-group-addon" style="cursor:pointer;">
                      <span class="glyphicon glyphicon-map-marker"></span>
                  </span>
              </div>

              <div class="input-group">
                  <input name="start_time[]" type="text" size="30" class="form-control" placeholder="Start Time" required />
                  <span class="input-group-addon" style="cursor:pointer;">
                      <span class="glyphicon glyphicon-time"></span>
                  </span>
              </div>


              <div class="input-group">
                  <input name="date[]" type="text" size="30" class="datepickers form-control" placeholder="Select Date" required />
                  <span class="input-group-addon" style="cursor:pointer;">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div><!--end of extra div-->
        </div><!--end of extra wrapper-->
          <input style="float: right;" class="btn" type="submit" name="submit" value="Add Class" />
        </form>
    </div>
  </div>
</div> <!-- .content-wrapper -->



<script>
    $(document).ready(function(){
//        $( ".datepicker" ).datepicker({
//              showButtonPanel: true,
//              dateFormat: "yy-mm-dd"
//        });

        $(document).on('focus',".datepickers", function(){
                $(this).datepicker({
                     showButtonPanel: true,
                    dateFormat: "yy-mm-dd"
                });
        });                               
        counter=1;
       
        $("#amount").html(counter);
         $("#remove").hide();
       $("#add").on('click',function(){
            counter++;
            $("#remove").show();
            $("#amount").html(counter);
            var temp = $("#extra").html();
            $("#extra-wrapper").append("<div id='added-form"+counter+"'>"+temp+"</div>");
            $("#added-form"+counter).css("margin-top","25px");
       });
        
        $("#remove").on("click", function(){
            if(counter==1){
                 $("#remove").hide();
            }
            else{
               $("#added-form"+counter).remove(); 
                counter--;
                $("#amount").html(counter);
            }
        });
    

    });

</script>
