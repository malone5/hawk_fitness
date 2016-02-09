<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
        
        <!--jQuery references-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
        
        <!--disable zoom function for mobile devices-->
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
        
        <!--Custom or extra css or js references-->
        
		<?php 
            if (isset($extraRef) and !empty($extraRef)){
			foreach($extraRef as $link){
                echo $link.PHP_EOL;
            }
		 }?>
	</head>
	
	<body>
