<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Login</title>
 </head>
 <body>
   <h1>Login to Hawkfitness Admin</h1>

   <?php echo validation_errors(); ?>
   <?php echo form_open('login'); ?>
     <label for="uname">Username:</label>
     <input type="text" size="20" id="username" name="uname"/> admin1
     <br/>
     <label for="pword">Password:</label>
     <input type="password" size="20" id="passowrd" name="pword"/> secrete
     <br/>
     <input type="submit" value="Login"/>
   </form>
 </body>
</html>