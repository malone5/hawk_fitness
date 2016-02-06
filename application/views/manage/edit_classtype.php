<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-sm-12">

    <a class="btn btn-default" href="<?php echo site_url('manage/classtypes'); ?>">Back</a>

    <h2><?php echo $title; ?> </h2>

    <?php echo validation_errors(); ?>

    <?php echo form_open('manage/classtypes/edit/'.$classtype['id'].''); //open a form in the 'create' controller ?> 

        <div class="input-group">
        	<label>Title</label>
            <input name="name" type="text" size="30" class="form-control" value="<?php echo $classtype['name']; ?>" />
        </div>



        <div class="input-group">
        	<label>Description</label>
            <textarea name="description" cols="40" rows="5" class="form-control" ><?php echo $classtype['description']; ?></textarea>
        </div>


        <input class="btn btn-success" type="submit" name="submit" value="Submit" />

    </div>
  </div>
</div> <!-- .content-wrapper -->







