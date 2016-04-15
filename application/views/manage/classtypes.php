<?php if($this->session->flashdata('newclasstype')!=null){?>
  <!-- success message for newly added classtype-->
  <span id="classtype-message" class="alert alert-success">
    <?php echo $this->session->flashdata('newclasstype');?>
  </span>
  <script type="text/javascript">
  // timer to display new classtype sucess message for 2 seconds
  setTimeout(function(){
    document.getElementById('classtype-message').style.display = 'none';
  }, 2000);
  </script>
  <?php } ?>

<div class="classtype-title-container">
  <h1><?php echo  $title; ?></h1>
</div>
<hr>
<div class="newclasstype-container">
  <a class="btn btn-success" href="<?php echo site_url('manage/new_classtype'); ?>">Create New Class Type</a>
</div>
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12 col-sm-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Class Name</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($classtypelist as $classtype_item): ?>
                            <tr>
                                <td><?php echo  $classtype_item['id']; ?></td>
                                <td><?php echo  $classtype_item['name']; ?></td>
                                <td><?php echo  $classtype_item['description']; ?></td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit">
                                        <a class="btn btn-primary btn-xs" data-title="Edit" href="<?php echo base_url(); ?>manage/classtypes/edit/<?php echo $classtype_item['id'] ?>">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#<?php echo $classtype_item['id'] ?>" >
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    </p>
                                </td>

                                <!-- Delete pop-up for each record -->
                                <div class="modal fade" id="<?php echo $classtype_item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete the "<?php echo $classtype_item['name'] ?>" class type?</div>
                                            </div>
                                            <div class="modal-footer ">
                                                <a href="<?php echo base_url(); ?>manage/classtypes/delete/<?php echo $classtype_item['id'] ?>" type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</a>
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
	</div>
</div>
