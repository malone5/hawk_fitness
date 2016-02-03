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
            if (isset($extraRef) and !empty($extra)){
			foreach($extraRef as $link){
                echo $link;
            }
		 }?>
	</head>
	
	<body>
        <div class=" all-info">
            <section id="section1">
                <div class="home text-center">
                    <a class="home-link" href="<?php echo site_url();?>"><span class="glyphicon glyphicon-arrow-left"> Login</span></a>
                </div>
            </section>

            <div class="login-container">
                <h3 style="color:#0d1d41;">Admin Login</h3>
                <div style="color:red;">

                    <?php
                        echo validation_errors();?>
                </div>
                 <form action="login" method="post">
                         <table align="center">

                             <thead>

                             </thead>
                             <tbody>
                                 <tr>
                                     <td>
                                         <div class="form-group has-feedback">
                                             <input id="username" name="uname" type="text" size="20"  class="form-control" placeholder="username" autofocus required/>
                                            <span title = "enter username" class="glyphicon glyphicon-user form-control-feedback"></span>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-group has-feedback">
                                             <input id="username" name="pword" type="password" size="20" class="form-control" placeholder="password" required />
                                            <span title ="enter password" class="glyphicon glyphicon-asterisk form-control-feedback"></span>

                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-group ">
                                             <input class="btn " type="submit" value="Login"/>
                                         </div>
                                     </td>
                                 </tr>
                             </tbody>

                         </table>
                </form>
            </div>
        </div>
    </body>
</html>