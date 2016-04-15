<div class="container-fluid">
<h1 class="text-center">Reports</h1>
<hr>
<div class="row">
<div class="form-inline text-center">
  <div class="input-group">
      <div class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i> Min Date </div>
      <input class="form-control" type="text" id="min" name="min" placeholder="yyyy-mm-dd" maxlength="10">
  </div>
  <span></span>
  <div class="input-group">
      <div class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i> Max Date </div>
      <input class="form-control" type="text" id="max" name="max" placeholder="yyyy-mm-dd" maxlength="10">
  </div>
</div>

<?php if(isset($data_cleared_msg)): ?>
<div class="alert alert-info" role="alert"><?php echo $data_cleared_msg; ?></div>
<?php endif; ?>
<div class="clearBtn text-center">

    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#clear-attendees" >
      <span class="glyphicon glyphicon-trash"></span><span> Clear Attendee Data</span>
    </button>

</div>

</div>




<!-- Delete pop-up for each record -->
<div class="modal fade" id="clear-attendees"tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Clear Database</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                  Are you sure you want to delete all attendee data? You will not be able retrieve this data after confirming.
                  Consider exporting the 'reports' table before deleting all records.
                </div>
            </div>
            <div class="modal-footer ">
              <form action="<?php echo site_url('manage/reports');?>" id="delete-all-form" method="post" accept-charset="utf-8">
                <input  class="btn btn-danger" type="submit" id="submit" name="submit" value="Delete All" />
                <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
              <form id = "edit-form" action="" method="post" accept-charset="utf-8">
          </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>

<hr>


<div class="row">
<div class="table-responsive">
<table id="myTable" class="table table-striped display" cellspacing="0" width="100%" >
  <thead>
        <tr>
          <th>Date(Year-Month-Day)</th>
          <th>Class</th>
          <th>Name</th>
          <th>Email</th>
          <th>Student ID</th>
          <th>Academic Level</th>
          <th>Type</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Date</th>
            <th>Class</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Student ID</th>
            <th>Academic Level</th>
            <th>Type</th>
        </tr>
    </tfoot>
  <tbody>
    <!-- additional filters -->





  <?php if ( !empty( $attendees )) : ?>
      <?php foreach ( $attendees as $attendee ) : ?>
      <tr>
        <td><?php echo  $attendee['date']; ?></td>
        <td><?php echo  $attendee['class_type']; ?></td>
        <td><?php echo  $attendee['fname'];?></td>
        <td><?php echo  $attendee['email']; ?></td>
        <td><?php echo  $attendee['student_id']; ?></td>
        <td><?php echo  $attendee['acad_level']; ?></td>
        <td><?php echo  $attendee['attendee']; ?></td>

      </tr>
      <?php endforeach; ?>
  <?php endif; ?>
  </tbody>
</table>
</div>
</div>
</div>

<script type="text/javascript">

$( "#min" ).datepicker({
      showButtonPanel: true,
      dateFormat: "yy-mm-dd"
});
$( "#max" ).datepicker({
      showButtonPanel: true,
      dateFormat: "yy-mm-dd"
});

$.fn.dataTableExt.afnFiltering.push(
    function( oSettings, aData, iDataIndex ) {
        var iFini = document.getElementById('min').value;
        var iFfin = document.getElementById('max').value;
        var iStartDateCol = 0;
        var iEndDateCol = 0;

        iFini=iFini.substring(6,10) + iFini.substring(3,5)+ iFini.substring(0,2);
        iFfin=iFfin.substring(6,10) + iFfin.substring(3,5)+ iFfin.substring(0,2);

        var datofini=aData[iStartDateCol].substring(6,10) + aData[iStartDateCol].substring(3,5)+ aData[iStartDateCol].substring(0,2);
        var datoffin=aData[iEndDateCol].substring(6,10) + aData[iEndDateCol].substring(3,5)+ aData[iEndDateCol].substring(0,2);

        if ( iFini === "" && iFfin === "" )
        {
            return true;
        }
        else if ( iFini <= datofini && iFfin === "")
        {
            return true;
        }
        else if ( iFfin >= datoffin && iFini === "")
        {
            return true;
        }
        else if (iFini <= datofini && iFfin >= datoffin)
        {
            return true;
        }
        return false;
    }
);

</script>

<script type="text/javascript">

//
// Initialize Data Table
//

$(document).ready(function() {
    var table = $('#myTable').DataTable({
      "order": [[ 0, "desc"]], // Most recent at top
      dom: 'Blfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });

    // Event listener to the two range filtering inputs to redraw on input
    $('#min').change( function() { table.draw(); } );
    $('#max').change( function() { table.draw(); } );

} );


</script>



<script type="text/javascript">
//
// Filter By Column
//
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#myTable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input class="col-search" type="text" placeholder="Filter" />' );
    } );

    // DataTable
    var table = $('#myTable').DataTable();

    // Apply the search
    table.columns().every( function () {
        var that = this;

        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
</script>
