<?php include('admin_header.php') ?>
<div class="container">
  <?php echo form_open('raj_customer_controller/editData',['class'=>'form-horizontal']); ?>
    <?php echo form_hidden('cusBalance',$customer->cusBalance); ?>
    <?php echo form_hidden('cusId',$customer->cusId); ?>
  <fieldset>
    <legend>Edit Customer</legend>
    
  <?php if($feedback=$this->session->flashdata('feedback')):
      $feedback_class=$this->session->flashdata('feedback_class');
   ?>
    <div class="alert alert-dismissible alert-<?= $feedback_class ?>">
         <strong><?= $feedback ?></strong>
    </div>
  <?php endif ?>


<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" name="cusName" value="<?= $customer->cusName ?>" class="form-control" id="inputEmail" placeholder="Name">
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('cusName'); ?></div>
<div class="col-xs-8">
   <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" placeholder="Address" name="cusAddress">  <?= $customer->cusAddress ?></textarea>
        </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('cusAddress'); ?></div>
<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Phone No</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" value="<?= $customer->cusPhoneNo ?>" name="cusPhoneNo" id="inputEmail" placeholder="Phone Number">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('cusPhoneNo'); ?></div>
<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">PAN No</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" value="<?= $customer->cusPanNo ?>" name="cusPanNo" id="inputEmail" placeholder="PAN Number">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('cusPanNo'); ?></div>
<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Manager Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" value="<?= $customer->cusMName ?>" name="cusMName" id="inputEmail" placeholder="Manager Name">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('cusMName'); ?></div>
<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Manager Phone No</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" value="<?= $customer->cusMPhoneNo ?>" name="cusMPhoneNo" id="inputEmail" placeholder="Phone Number">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('cusMPhoneNo'); ?></div>


<div class="col-xs-8">
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php
            echo form_reset(['class'=>'btn btn-default','name'=>'cancel','value'=>'cancel']),
            form_submit(['class'=>'btn btn-primary','name'=>'submit','value'=>'submit']); 
            ?>
      </div>
    </div>
 </div>
<div class="col-xs-4"></div>

  </fieldset>
<?php echo form_close(); ?>



</div>





<?php include('admin_footer.php') ?>