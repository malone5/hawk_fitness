
<div>
  <p>
    *Account settings for <b><?php if (isset($user)) echo $user; ?></b>.
  </p>
</div>
<div class="page-messages text-center">
  <?php  if($this->session->flashdata('user_update')!=null){?>
      <p style="color:green"><?php echo $this->session->flashdata('user_update');?></p>
  <?php }?>
  <?php if($this->session->flashdata('user_taken')!=null){?>
      <p style="color:red"><?php echo $this->session->flashdata('user_taken'); ?></p>
  <?php }?>
</div>
<!-- Username change form  -->
<div class="username-form container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="form-container">
        <div class="form-title">
          <p>Username Change</p>
        </div>
        <form action="<?php echo site_url('manage/username')?>", method="post"  accept-charset="utf-8">
          <input type = "text" class="form-control account-input" name="uname" placeholder="Username" />
          <div class="error-user"><?php if ($this->session->flashdata('error')!=null) echo $this->session->flashdata('error'); ?></div>
          <input type = "submit" class="btn btn-change" name="user_submit" value="change" />
        </form>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>

<!-- Password change form  -->
<div class="text-center">
  <?php
    if($this->session->flashdata('error_password')!=null)
    echo '<p style="font-size:14px;color:red;">'.$this->session->flashdata('error_password').'</p>';
    if($this->session->flashdata('success_password')!=null)
    echo '<p style="font-size: 16px; color:green;">'.$this->session->flashdata('success_password').'</p>';

  ?>
</div>
<div class="password-form container-fluid">
  <div class="password-form-container row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="form-container">
        <div class="form-title">
          <p>Password Change</p>
        </div>
        <div class="password-notice">(new password must be atleast 6 characters)</div>
        <form action="<?php echo site_url('manage/password')?>" method="post" charset="utf-8">
          <input type="password" class="form-control account-input" name="current_password" placeholder="Current Password" />
          <div class="error-user">
            <?php if ($this->session->flashdata('password_update')!=null) echo $this->session->flashdata('password_update'); ?>
          </div>
          <input type="password" class="form-control account-input" name="new_password" placeholder="New Password" />
          <div class="error-user">
            <?php
                if ($this->session->flashdata('password_update')!=null)
                  echo $this->session->flashdata('password_update');

                if ($this->session->flashdata('password_match')!=null)
                  echo $this->session->flashdata('password_match');

                if ($this->session->flashdata('password_length')!=null)
                  echo $this->session->flashdata('password_length');
            ?>
          </div>
          <input type="password" class="form-control account-input" name="new_password2" placeholder="New Password" />
          <div class="error-user">
            <?php
                if ($this->session->flashdata('password_update')!=null)
                  echo $this->session->flashdata('password_update');

                if ($this->session->flashdata('password_match')!=null)
                  echo $this->session->flashdata('password_match');

                if ($this->session->flashdata('password_length')!=null)
                  echo $this->session->flashdata('password_length');
            ?>
          </div>
          <input type="submit" class="btn btn-change" name="password_submit" value="change" />
        </form>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
