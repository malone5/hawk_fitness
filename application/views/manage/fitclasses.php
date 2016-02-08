<div class="container-fluid">
    <div class="row">
        <h1><?php echo  $title; ?></h1>
    </div>
	<div class="row">
        <div class="col-lg-12 col-sm-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
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
                                <td><?php echo  $fitclass_item['id']; ?></td>
                                <td><?php echo  $fitclass_item['class_type']; ?></td>
                                <td><?php echo  $fitclass_item['instructor']; ?></td>
                                <td><?php echo  $fitclass_item['location']; ?></td>
                                <td><?php echo  $fitclass_item['start_time']; ?></td>
                                <td><?php echo  $fitclass_item['date']; ?></td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit">
                                        <a class="btn btn-primary btn-xs" data-title="Edit" href="<?php echo base_url(); ?>manage/fitnessclasses/edit/<?php echo $fitclass_item['id'] ?>">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#<?php echo $fitclass_item['id'] ?>" >
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    </p>
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

            <a class="btn btn-success" href="<?php echo site_url('manage/new_fitnessclass'); ?>">Create New Fitness Class</a>
        </div>
	</div>
</div>


