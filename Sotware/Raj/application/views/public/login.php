
<?php include('public_header.php') ?>

<div class="container">
  <?php echo form_open('login/admin_login',['class'=>'form-horizontal']); ?>
<fieldset>
    <legend>Admin Login</legend>
    <?php if($error=$this->session->flashdata('Login_Fails')): ?>
    <div class="alert alert-dismissible alert-danger">
         <strong><?= $error ?></strong>
    </div>
  <?php endif ?>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-3 control-label">User Name</label>
      <div class="col-lg-6">
         <?php echo form_input(['name'=>'userName','class'=>'form-control','placeholder'=>'User Name','value'=>set_value('userName')]); ?>
      </div>
      <?php echo form_error('userName'); ?>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-3 control-label">Password</label>
      <div class="col-lg-6">
        <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
        </div>
          <?php echo form_error('password'); ?>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php
            echo form_reset(['class'=>'btn btn-default','name'=>'cancel','value'=>'cancel']),
            form_submit(['class'=>'btn btn-primary','name'=>'submit','value'=>'submit']); 
            ?>
      </div>
    </div>
  </fieldset>
</form>
</div>


<?php include('public_footer.php') ?>