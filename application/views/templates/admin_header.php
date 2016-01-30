


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HawkFitness Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/metisMenu/dist/metisMenu.min.css') ?>" >
    <!-- <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> -->

    <!-- Timeline CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/sb-admin-2.css') ?>" >
    <!-- <link href="../dist/css/timeline.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/sb-admin-2.css') ?>" >
    <!-- <link href="../dist/css/sb-admin-2.css" rel="stylesheet"> -->

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/morrisjs/morris.css') ?>" >
    <!-- <link href="../bower_components/morrisjs/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css') ?>" >
    <!-- <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    
    <!-- Custom Static CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/admin.css') ?>" >
    <!-- Custom Dynamic CSS -->
    <?php if (isset($css)){?>
			<link rel="stylesheet" href="<?php echo base_url('assets/admin/css').'/'.$css; ?>" >
	<?php }?>




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.html">HawkFitness Admin</a>
            </div>
            <!-- /.navbar-header -->

            <!-- TOP NAVBAR -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                    <ul class="nav" id="side-menu">
                        <!-- NOT USED AT THE MOMMENT
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>                       
                        <li>
                            <a href="<?php echo site_url('manage/'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('manage/create/'); ?>"><i class="fa fa-list fa-fw"></i> Fitness CLasses</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('manage/classtypes'); ?>"><i class="fa fa-edit fa-fw"></i>Class Types</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('manage/reports'); ?>"><i class="fa fa-table fa-fw"></i> Reports</a>
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
