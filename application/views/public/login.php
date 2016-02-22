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
            if (isset($extraRef)){
			foreach($extraRef as $link){
                echo $link;
            }
		 }?>
	</head>
	
	<body>
        <section id="section1">
            <div class="home text-center">
                <a class="home-link" href="<?php echo site_url();?>"><span class="glyphicon glyphicon-arrow-left"> Back</span></a>
            </div>
            <div class="login-container">
               
                 <?php echo form_open('login'); ?>

                         <table align="center">
                             <tbody>
                                 <tr>
                                     <td><p class="web-title">HawkFitness<span class="important-text">(admin login)</span></p></td>
                                 </tr>
                                 <tr>
                                   <td>
                                       <div class="errors"><?php if(isset($invalid)) echo $invalid;?></div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-group has-feedback">
                                             <input  name="uname" type="text" size="20"  class="form-control" placeholder="username" autofocus required/>
                                            <span title = "enter username" class="glyphicon glyphicon-user form-control-feedback"></span>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-group has-feedback">
                                             <input  name="pword" type="password" size="20" class="form-control" placeholder="password" required />
                                            <span title ="enter password" class="glyphicon glyphicon-asterisk form-control-feedback"></span>

                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-group ">
                                             <input class="btn btn-defualt" type="submit" name ="submit" value="Login"/>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                    <td> <a href="<?php echo site_url('forgotPassword')?>">Forgot Password?</a></td>
                                 </tr>
                             </tbody>

                         </table>
                </form>
            </div>
        </section>
</body>