<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>

		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>

		<?php if (isset($css)){?>
			<!--custom page css-->
			<link rel="stylesheet" href="<?php echo base_url('assets/css').'/'.$css; ?>" >
		<?php }?>
	</head>
	
	<body>
		<div class="row">
			<div class="jumbotron text-center"  style="box-shadow: 0px 0px 7px 0px #777;">
			  <h1><a href="<?php echo site_url('/'); ?>">HawkFitness</a></h1>
			</div>
		</div>
