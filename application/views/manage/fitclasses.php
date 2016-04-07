<div class="container-fluid">

    <!--Modal for batch-delete-->
        <div class="modal fade" id="delete-batch-modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Are you sure you want to delete?</h4>
            </div>
          <div class="modal-body">
            <div class="selects">

              </div>
          </div>
          <div class="modal-footer">
              <a id="multipleDelete" class ="btn btn-danger" data-dismiss="modal" href="javascript:;" >Delete</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Modal for editing-->
        <div class="modal fade" id="edit-class-modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align">Edit</h4>
            </div>
          <div class="modal-body">
            <form id = "edit-form" action="" method="post" accept-charset="utf-8">
              <div><label class="edit-label">Class Type:</label><select id="class-type" name = "class_type" class="form-control edit-input">
                      <!-- <option id="current-name" selected value="" > </option> -->
                      <?php foreach($classtypes as $fitClass){?>
                      <option value="<?php echo $fitClass['name']?>"> <?php echo $fitClass['name']?> </option>
                      <?php }?>
                    </select>
              </div>
              <div><label class="edit-label">Instructor:</label> <input type="text" class="form-control edit-input" id="edit-instructor" name="instructor" value="" placeholder="instructor" required /></div>
              <div><label class="edit-label">Location:</label> <input type="text" class="form-control edit-input" id="edit-location" name="location" value="" placeholder="location" required /></div>
              <div><label class="edit-label">Start Time:</label> <input type="text" class="form-control edit-input" id="edit-time" name="start_time" value="" placeholder="start time" required /></div>
              <div><label class="edit-label">Date:</label> <input type="text" class="form-control edit-input" id="edit-date" name="date" value="" placeholder="date" required /></div>
          </div>
          <div class="modal-footer">
              <div style="width:50%;"> <input type="submit" class="btn btn-primary" value="update" /></div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="row">
        <h1><?php echo  $title; ?></h1>
    </div>
  </div>
<div><span id="msg" style="color:red;"><?php if(isset($success))echo $success;?></span></div>

        <!--Page action buttons-->
         <div class="action-buttons" >
             <a class="btn btn-success" href="<?php echo site_url('manage/new_fitnessclass'); ?>">Create New Fitness Class</a>
             <div class="batch-label">Batch Delete:
                 <span class="btn-group btn-toggle delete-buttons-group">
                        <button id="batch-delete-on" class="btn btn-xs btn-default">ON</button>
                        <button id="batch-delete-off" class="btn btn-xs btn-danger active">OFF</button>
                 </span>
                 <div class="batch-delete-button"><a type="button" class="deleteM btn btn-sm btn-danger" style="" id="batch-delete" >Delete Selected</a></div>
             </div>
             <!-- <a type="button" class="deleteM btn btn-sm btn-danger" style="" id="batch-delete" >Delete Selected</a> -->
       </div>
        <!-- <a  class="deleteM btn btn-sm btn-danger" id="batch-delete" href="javascript:;" >Delete Selected</a> -->
          <div class="table-responsive">
            <table align="center" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th hidden>#</th>
                        <th>Date</th>
                        <th>Class Type</th>
                        <th>Instructor</th>
                        <th>Location</th>
                        <th>Start Time</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($fitclasslist as $fitclass_item): ?>
                            <tr>
                                <td hidden><?php echo  $fitclass_item['id']; ?></td>
                                <td class="date-class"><?php echo  $fitclass_item['date']; ?></td>
                                <td class="class-name"><?php echo  $fitclass_item['class_type']; ?></td>
                                <td class="instructor-class"><?php echo  $fitclass_item['instructor']; ?></td>
                                <td><?php echo  $fitclass_item['location']; ?></td>
                                <td><?php echo  $fitclass_item['start_time']; ?></td>

                                <td class="edit-class">

                                        <a class="btn btn-primary btn-xs edit-classes" href="javascript:;" data-title="Edit" data-time = "<?php echo $fitclass_item['start_time'];?>" data-location="<?php echo $fitclass_item['location'];?>" data-id="<?php echo $fitclass_item['id'];?>" data-name="<?php echo $fitclass_item['class_type'];?>"
                                          data-instructor="<?php echo $fitclass_item['instructor'];?>" data-date="<?php echo $fitclass_item['date'];?>">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>

                                </td>
                                <td>
                                        <a class="btn btn-danger btn-xs deletes"  data-title="Delete" data-id="<?php echo $fitclass_item['id'];?>" data-toggle="modal" data-target="#<?php echo $fitclass_item['id']; ?>" >
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                        <input hidden type="checkbox" name ="deleteBox[]" class="deleteC" data-name="<?php echo  $fitclass_item['class_type']; ?>" data-instructor="<?php echo  $fitclass_item['instructor']; ?>" data-date="<?php echo  $fitclass_item['date']; ?>" value="<?php echo $fitclass_item['id'];?>">
                                </td>

                                <!-- Delete pop-up for each record -->
                                <div class="modal fade" id="<?php echo $fitclass_item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert alert-danger">
                                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                                    Are you sure you want to delete: <?php echo $fitclass_item['class_type'] . " with " . $fitclass_item['instructor'] . " on " . $fitclass_item['date']; ?>
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <a href="<?php echo base_url(); ?>manage/fitnessclasses/delete/<?php echo $fitclass_item['id'] ?>" type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                                          </div>
                                        </div> <!-- /.modal-content -->
                                    </div> <!-- /.modal-dialog -->
                                </div>
                            </tr>
                        <?php endforeach; ?>

                </tbody>
            </table>
          </div>
<script>
    $(document).ready(function(){

        var selected = []; //array of selected ids
        var class_names=[]; //array of selected class names/types
        var instructor=[]; //array of selected instructors
        var dates=[];//array of selected dates

        $('#batch-delete').hide();

        //on click of on/off switch
        $('.btn-toggle').click(function() {
            //toggle switch on/off
            $(this).find('.btn').toggleClass('active');
            if ($(this).find('.btn-danger').size()>0) {
                $(this).find('.btn').toggleClass('btn-danger');
            }
            // if switch is on
            if($('#batch-delete-on').hasClass('active')==true){
                $("#batch-delete").show();
                $(".deletes").hide();
                $(".deleteC").removeAttr("hidden");
            }
            //if switch is off
            else{
                $("#batch-delete").hide();
                $(".deletes").show();
                $(".deleteC").attr("hidden",true);
                $(".deleteC").prop('checked', false);
            }
        });

        // when edit button is clicked
        $(".edit-classes").click(function(){
            var class_id = $(this).attr("data-id");
            var class_instructor = $(this).attr("data-instructor");
            var class_date = $(this).attr("data-date");
            var class_name = $(this).attr("data-name");
            var class_location = $(this).attr("data-location");
            var class_time = $(this).attr("data-time");

            $("#edit-class-modal").modal("toggle");
            $("#edit-class-modal").modal("show");
            $("#edit-form").attr("action",document.location.origin+document.location.pathname+"/update/"+class_id);
            $("#class-type").val(class_name).attr("selected","selected");
            $("#current-name").html(class_name);
            $("#edit-instructor").val(class_instructor);
            $("#edit-location").val(class_location);
            $("#edit-date").val(class_date);
            $("#edit-time").val(class_time);

        });
        // initiate datepicker on click of date input
        $("#edit-date").datepicker({
            showButtonPanel: true,
            dateFormat: "yy-mm-dd",
            minDate: 0
        });

        // initiate timepicker on click of time input
        $("#edit-time").timepicker({
            'minTime': '6:00AM',
            'maxTime': '11:30PM',
        });

        //On click of delete selected button, display modal with list
        // of all selected classes. If no classes are selected display error message
        $(".deleteM").on("click",function(){
            if(selected.length<1){
                swal("No classes were selected","","error");
            }
            else{

                var add="";
                for(var i =0;i<selected.length;i++){

                    add+="<div class='alert alert-danger'><strong>"+class_names[i]+"</strong> with <strong>"+instructor[i]+
                    "</strong> on <strong>"+dates[i]+"</strong></div>";
                }

                $("#delete-batch-modal .selects").html(add);
                $("#delete-batch-modal").modal('toggle');
                $("#delete-batch-modal").modal('show');

            }
        });

        //on click of a checkbox, check to see whether it checked or not and act
        // accordingly
         $(".deleteC").on("click",function(){
               if($(this).is(':checked')){
                selected.push($(this).val());
                   class_names.push($(this).attr('data-name'));
                   instructor.push($(this).attr('data-instructor'));
                   dates.push($(this).attr('data-date'));
               }
               else{
                  var index = selected.indexOf($(this).val());
                  if(index>-1){
                    selected.splice(index,1);
                  }
               }
           });

          //Delete button for multiple classes.
         $("#multipleDelete").on("click",function(){
            $('#delete-batch-modal').hide();
            //finds the td with the matching id and hides the row
            for(var i =0;i<selected.length;i++){
                  var row=  $('td').filter(function(){
                                return $(this).text() === selected[i]
                            })
                  console.log(row);
                  row.closest('tr').fadeOut(1000);
            }
            //removes the classes from the database
            $.ajax({
                type: "POST",
                url: "multipleDelete",
                data:{selected:selected},
                success: function (response) {
                   if(response){
                        // ADD Jbox popup
                        new jBox('Notice', {
                            animation:{open:'tada',close:'flip'},
                            content: 'Classes Removed',
                            attributes: {
                                x: 'left',
                                y: 'bottom'
                            },
                            autoClose:3000,
                            color:'red'

                        });
                        //reset selected values to 0
                        selected=[];
                        class_names=[];
                        instructor=[];
                        dates=[];
                    }
                }
            });
         });

    });
</script>
