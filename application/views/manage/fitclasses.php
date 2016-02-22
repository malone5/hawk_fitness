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

    <div class="row">
        <h1><?php echo  $title; ?></h1>
    </div>
  </div>
<div><span id="msg" style="color:red;"><?php if(isset($success))echo $success;?></span></div>

        <!--Page action buttons-->
         <div class="action-buttons" >
             <a class="btn btn-success" href="<?php echo site_url('manage/new_fitnessclass'); ?>">Create New Fitness Class</a>
             <span class="batch-label">Batch Delete:
                 <span class="btn-group btn-toggle delete-buttons-group">
                        <button id="batch-delete-on" class="btn btn-xs btn-default">ON</button>
                        <button id="batch-delete-off" class="btn btn-xs btn-danger active">OFF</button>
                 </span>
             </span>
             <!-- <a type="button" class="deleteM btn btn-sm btn-danger" style="" id="batch-delete" >Delete Selected</a> -->
       </div>
     </br>
        <a  class="deleteM btn btn-sm btn-danger" id="batch-delete" href="javascript:;" >Delete Selected</a>

          <div class="table-container">
            <table align="center" class="table-condensed table-striped table">
                <thead>
                    <tr>
                        <th hidden>#</th>
                        <th>Class Type</th>
                        <th>Instructor</th>
                        <th>Location</th>
                        <th>Start Time</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($fitclasslist as $fitclass_item): ?>
                            <tr>
                                <td hidden><?php echo  $fitclass_item['id']; ?></td>
                                <td class="class-name"><?php echo  $fitclass_item['class_type']; ?></td>
                                <td class="instructor-class"><?php echo  $fitclass_item['instructor']; ?></td>
                                <td><?php echo  $fitclass_item['location']; ?></td>
                                <td><?php echo  $fitclass_item['start_time']; ?></td>
                                <td class="date-class"><?php echo  $fitclass_item['date']; ?></td>
                                <td class="edit-class">
                                    <p data-placement="top" data-toggle="tooltip" title="Edit">
                                        <a class="btn btn-primary btn-xs" data-title="Edit" href="<?php echo base_url(); ?>manage/fitnessclasses/edit/<?php echo $fitclass_item['id'] ?>">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </p>
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

        var selected = [];
        var class_names=[];
        var instructor=[];
        var dates=[];

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

        //On click of delete selected button
        $(".deleteM").on("click",function(){
            if(selected.length<1){
                swal("No classes were selected","","error");
            }
            else{

                var add="";
                for(var i =0;i<selected.length;i++){

                    add+="<div class='alert alert-danger'><strong>"+class_names[i]+"</strong> with <strong>"+instructor[i]+"</strong> on <strong>"+dates[i]+"</strong></div>";
                }

                $("#delete-batch-modal .selects").html(add);
                $("#delete-batch-modal").modal('toggle');
                $("#delete-batch-modal").modal('show');

            }
        });



        //on click of a checkbox
         $(".deleteC").on("click",function(){
               if($(this).is(':checked')){
                selected.push($(this).val());
                   class_names.push($(this).attr('data-name'));
                   instructor.push($(this).attr('data-instructor'));
                   dates.push($(this).attr('data-date'));
               }else{
                  var index = selected.indexOf($(this).val());
                  if(index>-1){
                    selected.splice(index,1);
                  }
               }
           });

         $("#multipleDelete").on("click",function(){

            $('#delete-batch-modal').hide();
            $.ajax({

                type: "POST",
                url: "multipleDelete",
                async: false,
                data:{selected:selected},
                success: function (response) {
                   if(response){
                        $('#delete-batch-modal').hide();
                        //$("#msg").html("Classes deleted!");
                        window.location.reload();
                    }
                }
            });
         });

    });
</script>
