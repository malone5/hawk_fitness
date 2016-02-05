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
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        
        <!--Custom or extra css or js references-->
        
		<?php 
            if (isset($extraRef) and !empty($extraRef)){
			foreach($extraRef as $link){
                echo $link.'</br>';
            }
		 }?>
	</head>
	
	<body>
        <script type="text/javascript">
            $(document).ready(function(){
                  $('a[href^="#"]').on('click',function (e) {
                    e.preventDefault();

                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                    });
                });
            });
        </script>
    <!-- Second navbar for sign in -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  class="navbar-brand visible-xs" style="color: #0D1241; font-size:35px" href="<?php echo site_url();?>">HawkFitness</a>
          <a id="diffBrand" class="navbar-brand visible-sm" href="<?php echo site_url();?>">HawkFitness</a>
          <a id="diffBrand" class="navbar-brand visible-md" href="<?php echo site_url();?>">HawkFitness</a>
          <a id="diffBrand" class="navbar-brand visible-lg" href="<?php echo site_url();?>">HawkFitness</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <li><a id="sec1" class="hidden-xs" href="#section1" style="font-size:17px;">Quotes</a></li>
              <li><a id ="sec1"class=" visible-xs" data-toggle="collapse" data-target=".navbar-collapse"  href="#section1" style="font-size:17px;">Quotes</a></li>
            <li><a id= "sec2" class="hidden-xs" href="#section2" style="font-size:17px;">schedule</a></li>
              <li><a id="sec2" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse"  href="#section2" style="font-size:17px;">Schedule</a></li>
            <li><a id="sec3" class="hidden-xs" href="#section3" style="font-size:17px;">classes</a></li>
              <li><a id="sec3" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse"  href="#section3" style="font-size:17px;">classes</a></li>
            <li>
              <a class="btn btn-login hidden-xs" href="<?php echo site_url('login');?>">Sign in</a>
             <a class="btn btn-login visible-xs" href="<?php echo site_url('login');?>">Sign in</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse2">
            <form class="navbar-form navbar-right form-inline" role="form">
              <div class="form-group">
                <label class="sr-only" for="Email">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Email" autofocus required />
              </div>
              <div class="form-group">
                <label class="sr-only" for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" required />
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

