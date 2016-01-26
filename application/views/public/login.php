<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Login</title>
 </head>
 <body>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="text-center">
        <p>username = admin1</p>
        <p>password = secrete</p>
      </div>

      <?php echo validation_errors(); ?>
      <?php echo form_open('login'); ?>
        <div class="input-group">
            <input name="uname" type="text" size="20" class="form-control" placeholder="Username" />
            <span class="input-group-addon" style="cursor:pointer;">
                <span class="glyphicon glyphicon-user"></span>
            </span>
        </div>
        <div class="input-group">
            <input name="pword" type="password" size="20" class="form-control" placeholder="Password" />
            <span class="input-group-addon" style="cursor:pointer;">
                <span class="glyphicon glyphicon-asterisk"></span>
            </span>
        </div>
        <input class="btn" type="submit" value="Login"/>

      </form>
    </div>
  </div>
 </body>
</html>