


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />    <meta name="description" content="">
    <meta name="author" content="">

    <title>HawkFitness Admin Panel</title>

    <!-- Jquery/UI JS/CSS-->
    <script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js');?>"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css" >
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-timepicker/jquery.timepicker.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/js/jquery-timepicker/jquery.timepicker.css');?>" />


    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >

   <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

    <!--JQuery validate js-->
    <script src="<?php echo base_url('assets/js/jquery-validate/jquery-validate.js');?>" ></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/sb-admin-2.css'); ?>" >


    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>" >
    <!--Sweet alert CSS and JS-->
    <script src="<?php echo base_url('assets/js/sweetalert/dist/sweetalert2.min.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/js/sweetalert/dist/sweetalert2.css');?>" >


    <!-- DataTables.net Bootstrap CSS + Javascript -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" >
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <link  rel="stylesheet" href="<?php echo base_url('assets/admin/css/admin.css');?>" />

    <!-- Datatables Export -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css" >
    <script src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('/'); ?>">Monmouth Fitness</a>
            </div>
            <!-- /.navbar-header -->

            <!-- TOP NAVBAR -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="fa fa-user fa-fw"></span>  <span class="fa fa-caret-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo site_url('manage/account'); ?>"><span class="fa fa-user fa-fw"></span> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('manage/logout'); ?>"><span class="fa fa-sign-out fa-fw"></span> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <!-- SIDE NAVBAR -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
                      <?php if($this->session->userdata('logged_in')['role'] == 'limited'){?>
                        <li>
                          <a href="<?php echo site_url('manage/'); ?>"><span class="fa fa-dashboard fa-fw"></span> Dashboard</a>
                        </li>
                        <li>
                          <a href="<?php echo site_url('manage/checkin'); ?>"><span class="fa fa-check-square-o fa-fw"></span> Check-ins' </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('manage/user_manual'); ?>"><span class="fa fa-book fa-fw"></span> User Manual</a>
                        </li>
                      <?php }else{?>
                      <li>
                        <a href="<?php echo site_url('manage/'); ?>"><span class="fa fa-dashboard fa-fw"></span> Dashboard</a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('manage/checkin'); ?>"><span class="fa fa-check-square-o fa-fw"></span> Check-ins' </a>
                      </li>
                      <li>
                          <a href="<?php echo site_url('manage/fitnessclasses'); ?>"><span class="fa fa-calendar-o fa-fw"></span> Fitness Classes</a>
                      </li>
                      <li>
                          <a href="<?php echo site_url('manage/classtypes'); ?>"><span class="fa fa-tags fa-fw"></span>Class Types</a>
                      </li>
                      <li>
                          <a href="<?php echo site_url('manage/reports'); ?>"><span class="fa fa-table fa-fw"></span> Reports</a>
                      </li>
                      <li>
                          <a href="<?php echo site_url('manage/email_list'); ?>"><span class="fa fa-envelope-o fa-fw"></span> Email List</a>
                      </li>
                      <li>
                          <a href="<?php echo site_url('manage/user_manual'); ?>"><span class="fa fa-book fa-fw"></span> User Manual</a>
                      </li>
                      <?php }?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<div id="page-wrapper">
<!--

Page Content Here

-->
