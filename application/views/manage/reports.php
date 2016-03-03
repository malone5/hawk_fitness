<h3 class="text-center">Reports</h3>
<div class="table-responsive">
  <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%" >
  	<thead>
          <tr>
          	<th>Class</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Student ID</th>
              <th>Academic Level</th>
              <th>Age</th>
              <th>Type</th>

          </tr>
      </thead>
      <tfoot>
          <tr>
              <th>Class</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Student ID</th>
              <th>Academic Level</th>
              <th>Age</th>
              <th>Type</th>
          </tr>
      </tfoot>
    <tbody>
    <?php if ( !empty( $attendees )) : ?>
        <?php foreach ( $attendees as $attendee ) : ?>
  		  <tr>
  		    <td><?php echo  $attendee['class_type']; ?></td>
  		    <td><?php echo  $attendee['fname']; ?></td>
  		    <td><?php echo  $attendee['lname']; ?></td>
  		    <td><?php echo  $attendee['student_id']; ?></td>
  		    <td><?php echo  $attendee['acad_level']; ?></td>
  		    <td><?php echo  $attendee['age']; ?></td>
  		    <td><?php echo  $attendee['attendee']; ?></td>
  		  </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
  $(document).ready(function() {
      $('#myTable').DataTable();
  } );
</script>
