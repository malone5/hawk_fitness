<section id="section1">
    <div class="container-fluid">
        <div class="text-center" style="color:red;">
            </br>
            <?php
                echo validation_errors();?>
        </div>
         <?php echo form_open('login'); ?>

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
                                 <div class="input-group col-md-4 ">
                                     <input class="btn btn-success" type="submit" value="Login"/>
                                 </div>
                             </td>
                         </tr>
                     </tbody>

                 </table>
        </form>
    </div>
</section>