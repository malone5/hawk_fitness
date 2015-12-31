<!doctype html>
<html lang="en" class="no-js">
<head>
	

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>"> <!-- CSS reset -->

	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

	<!-- Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" >	

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	
	<link rel="stylesheet" href="<?php echo base_url('assets/css/manage.css'); ?>"> <!-- Resource style -->
	<script src="<?php echo base_url('assets/js/modernizr.js'); ?>"></script> <!-- Modernizr -->
  	
  	<title>HawkFitness Prototype</title>

</head>
<body>
	<header class="cd-main-header">
		<a href="<?php echo site_url('/'); ?>" class="cd-logo">HawkFitness<!-- <img src="img/cd-logo.svg" alt="Logo"> --></a>
		
		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="#0">Manage Classes</a></li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">

	<nav class="cd-side-nav"> <!-- Navigation start-->
      <ul>
        <li class="cd-label">Main</li>
        <li class="has-children overview">
          <a href="#0">Manage</a>
        </li>
            <li class="has-children bookmarks">
          	<a href="#0">Reports</a>
        </li>


      </ul>

      <ul>
        <li class="cd-label">Secondary</li>


        <li class="has-children users">
          <a href="#0">Profile</a>
          
        </li>
      </ul>

      <ul>
        <li class="cd-label">Action</li>
        <li class="action-btn"><a href="#0">+ Button</a></li>
      </ul>
    </nav>

	<!-- VIEW START -->