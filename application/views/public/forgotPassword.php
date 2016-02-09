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
                <a class="home-link" href="<?php echo site_url('login');?>"><span class="glyphicon glyphicon-arrow-left"> Back</span></a>
            </div>
            <div class="login-container">
                <?php if(isset($info)){
                        if($info =='1'){
                            echo "<div class='resetInfo text-center'>
                                    <p>Password has been reset.</br>Email has been sent to <b>".$_POST['email']."</b> with temporary password and instructions to change password.</b></p>
                                </div>"; 
                        }
                        if($info=='0'){
                            echo "<div class='resetInfo text-center' style='color:red'>
                                    <p>There is no account linked to the email provided in our records.</p>
                                </div>";
                        }
                }?>
                <div class="form-name text-center">
                    <h3>Password Reset Form</h3>
                </div>
                 <?php echo form_open('forgotPassword'); ?>
                
                    <table align="center">
                        <tr>
                            <td>
                                <label>Email: </label> <input type ="email" id="email" name = "email" placeholder="email" autofocus required />
<!--                                <input type="submit" class="btn btn-forgot" value="reset"/>-->
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="btn btn-forgot" name="reset" value="reset"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
</body>