 <div class="row">
     <div class="col-md-4"></div>
     <div class="info col-md-4">
         <span>username = admin1</span>
     </div>
     <div class="col-md-4"></div>
 </div> <div class="row">
     <div class="col-md-4"></div>
     <div class="info col-md-4">
         <span>password = secrete</span>
     </div>
     <div class="col-md-4"></div>
 </div>
<?php
    echo validation_errors();
    echo form_open('login'); 
?>
         <table align="center">

             <thead>

             </thead>
             <tbody>
                 <tr>
                     <td>
                         <div class="input-group">
                             <input name="uname" type="text" size="20"  class="form-control" placeholder="Username" />
                             <span class="input-group-addon" style="cursor:pointer;">
                                 <span class="glyphicon glyphicon-user"></span>
                             </span>
                         </div>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <div class="input-group">
                             <input name="pword" type="password" size="20" class="form-control" placeholder="Password" />
                            <span class="input-group-addon" style="cursor:pointer;">
                                <span class="glyphicon glyphicon-asterisk"></span>
                            </span>
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
