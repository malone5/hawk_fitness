


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />    <meta name="description" content="">
    <meta name="author" content="">

    <title>HawkFitness Admin Panel</title>

    <!-- Jquery/UI JS/CSS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css" >
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


      <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >

   <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!--JQuery validate js-->
    <script src="<?php echo base_url('assets/js/jquery-validate/jquery-validate.js');?>" ></script>

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/metisMenu/dist/metisMenu.min.css'); ?>" >


    <!-- Timeline CSS -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/sb-admin-2.css'); ?>" >


    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/morrisjs/morris.css'); ?>" >


    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>" >
    <!--Sweet alert CSS and JS-->
    <script src="<?php echo base_url('assets/js/sweetalert/dist/sweetalert2.min.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/js/sweetalert/dist/sweetalert2.css');?>" >

    <!-- Custom Static CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/admin.css') ?>" >

    <!-- Custom Dynamic CSS -->
    <?php if (isset($css)){?>
			<link rel="stylesheet" href="<?php echo base_url('assets/admin/css').'/'.$css; ?>" >
	<?php }?>



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
                <a class="navbar-brand" href="<?php echo site_url('/'); ?>">HawkFitness Admin</a>
            </div>
            <!-- /.navbar-header -->

            <!-- TOP NAVBAR -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="fa fa-user fa-fw"></span>  <span class="fa fa-caret-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><span class="fa fa-user fa-fw"></span> User Profile</a>
                        </li>
                        <li><a href="#"><span class="fa fa-gear fa-fw"></span> Settings</a>
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
                      <li>
                        <a href="<?php echo site_url('manage/'); ?>"><span class="fa fa-dashboard fa-fw"></span> Dashboard</a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('manage/checkin'); ?>"><span class="fa fa-sign-in fa-fw"></span> Check in </a>
                      </li>
                      <li>
                          <a href="<?php echo site_url('manage/fitnessclasses'); ?>"><span class="fa fa-list fa-fw"></span> Fitness Classes</a>
                      </li>
                      <li>
                          <a href="<?php echo site_url('manage/classtypes'); ?>"><span class="fa fa-edit fa-fw"></span>Class Types</a>
                      </li>
                      <li>
                          <a href="<?php echo site_url('manage/reports'); ?>"><span class="fa fa-table fa-fw"></span> Reports</a>
                      </li>
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
