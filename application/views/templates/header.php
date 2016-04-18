<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>

      		<!--jQuery references-->
      		<script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js');?>"></script>
		  	<script src="<?php echo base_url('assets/js/jquery-ui.min.js');?>"></script>
			<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
			<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
					<!-- Font Awesome  -->
			<link rel='stylesheet' href='<?php echo base_url("assets/admin/bower_components/font-awesome/css/font-awesome.css");?>' />

			<!-- Social Share jquery plugin  -->
			<script src="<?php echo base_url('assets/js/socialshare/SocialShare.js')?>"></script>
      		<!--disable zoom function for mobile devices-->
      		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
			<!-- Font Awesome  -->
			<link rel='stylesheet' href='<?php echo base_url("assets/admin/bower_components/font-awesome/css/font-awesome.css");?>' />

			<!-- Social Share jquery plugin  -->
			<script src="<?php echo base_url('assets/js/socialshare/SocialShare.js')?>"></script>
			<!--  sharer SHARE-->
			<script src="https://cdn.jsdelivr.net/sharer.js/latest/sharer.min.js"></script>

      		<!--Custom or extra css or js references-->
			<link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>" >


			<?php
	            if($this->session->userdata('logged_in')!=true);
	            {
	                //echo '<script src="https://cdn.jsdelivr.net/sharer.js/latest/sharer.min.js"></script>';
	                //echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">';
	            }
	            if (isset($extraRef) and !empty($extraRef)){
	                foreach($extraRef as $link){
	                    echo $link.PHP_EOL;
	                }
			    }
      ?>
	</head>

	<body>
