<html>
	<head>
		<title><?php echo $title;?></title>

        <!--jQuery references-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css" >
		    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
						<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>

        <!--disable zoom function for mobile devices-->
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

				<!--JQuery validate js-->
				<script src="<?php echo base_url('assets/js/jquery-validate/jquery-validate.js');?>" ></script>

        <!--Custom or extra css or js references-->

			<?php
	            if (isset($extraRef)){
				foreach($extraRef as $link){
	                echo $link;
	            }
			 }?>
	</head>

	<body>
        <section id="section1">
            <div class="home">
                <a class="home-link text-center" href="<?php echo site_url();?>"><span class="glyphicon glyphicon-arrow-left"></span></a>
            </div>
					</section>
					<section id="section2">
            <div class="container-fluid">
								<div class="row"><p class="web-title">HawkFitness<span class="important-text">(admin login)</span></p></div>
                 <?php if ($this->session->flashdata('login_error')!= "null"){?>
									 <div class="text-center" style="color:red;"><?php echo $this->session->flashdata('login_error');?></div>
								 <?php }?>
								 <form id="login-form" action="<?php site_url('login');?>" method="post" accept-charset="utf-8">
									<div class="row">
											<div class="col-lg-4"></div>
											<div class="col-lg-4">
		                  	<div class="form-group has-feedback move">
                           <input  name="uname" type="text" size="20" class="form-control visibility" placeholder="username" autofocus data-required/>
                           <span title = "enter username" class="glyphicon glyphicon-user form-control-feedback"></span>
                       </div>
										 	</div>
										 	<div class="col-lg-4"></div>
									 </div>
									 <div class="row">
                       <div class="form-group has-feedback move">
                           <input  name="pword" type="password" size="20" class="form-control visibility" placeholder="password" data-required />
                        	 <span title ="enter password" class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                       </div>
									 </div>
									 <div class="row">
                       <div class="form-group move">
                           <input class="btn btn-login" type="submit" name ="submit" value="Login"/>
                       </div>
									 </div>
								</form>
	            </div>
	        </section>
					<script>
						$(document).ready(function(){
								$("#login-form").validate({
											onChange:true,
											eachInvalidField:function(){
													$(this).closest('div').effect("bounce","slow");
													$(this).closest('input').css("border","2px solid red");
											},
											eachValidField:function(){
													$(this).closest('input').css("border","1px solid #ccc");
													$(this).closest('input').css("box-shadow","none");
											}
								});
						});
					</script>
			</body>
</html>
