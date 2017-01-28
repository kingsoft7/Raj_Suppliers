<?php include('admin_header.php') ?>
<div class="container">
 <?php echo form_open('login/changePassword',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Change Password</legend>

  <?php if($feedback=$this->session->flashdata('feedback')):
      $feedback_class=$this->session->flashdata('feedback_class');
   ?>
    <div class="alert alert-dismissible alert-<?= $feedback_class ?>">
         <strong><?= $feedback ?></strong>
    </div>
  <?php endif ?>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">User Name</label>
      <div class="col-lg-10">
        <input type="text" name="userName" class="form-control" id="" placeholder="user Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Old Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="" name="userOldPassword" placeholder="Password">
      
        </div>
      </div>
      <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">New Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="userNewPassword" id="" placeholder="Password">
      
        </div>
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
  <?php echo form_close(); ?>


</div>

<?php include('admin_footer.php') ?>