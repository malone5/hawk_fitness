<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-sm-12">
      <a class="btn btn-default" href="<?php echo site_url('manage/classtypes'); ?>">Back</a>

      <h2><?php echo $title; ?> </h2>
      <hr>
      <div class="errors-classtypes">  <?php echo validation_errors(); ?></div>
      <?php echo form_open('manage/new_classtype'); //open a form in the 'create' controller ?>


        <div class="input-group">
            <input name="name" type="text" size="30" class="form-control classtype-input" placeholder="Class Type" />
        </div>



        <div class="input-group">
            <textarea name="description" cols="40" rows="5" class="form-control classtype-input" placeholder="Write description here..." ></textarea>
        </div>


        <input class="btn btn-class-type" type="submit" name="submit" value="Add Class Type" />
      </form>
    </div>
  </div>
</div> <!-- .content-wrapper -->
