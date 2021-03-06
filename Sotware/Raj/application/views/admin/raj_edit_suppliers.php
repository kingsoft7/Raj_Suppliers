<?php include('admin_header.php') ?>
<div class="container">
  <?php echo form_open('raj_suppliers_controller/editData',['class'=>'form-horizontal']); ?>
  <?php echo form_hidden('supBalance',$suppliers->supBalance); ?>
  <?php echo form_hidden('supId',$suppliers->supId); ?>
  <fieldset>
    <legend>Add Suppliers</legend>
    


<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" name="supName" value="<?= $suppliers->supName ?>" class="form-control" id="inputEmail" placeholder="Name">
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('supName'); ?></div>
<div class="col-xs-8">
   <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" placeholder="Address" name="supAddress"> <?= $suppliers->supAddress ?></textarea>
        </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('supAddress'); ?></div>
<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Phone No</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="supPhoneNo" value="<?= $suppliers->supPhoneNo ?>" id="inputEmail" placeholder="Phone Number">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('supPhoneNo'); ?></div>
<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">PAN No</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="supPanNo" value="<?= $suppliers->supPanNo ?>" id="inputEmail" placeholder="PAN Number">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('supPanNo'); ?></div>
<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Manager Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="supMName" value="<?= $suppliers->supMName ?>" id="inputEmail" placeholder="Manager Name">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('supMName'); ?></div>
<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Manager Phone No</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="supMPhoneNo" value="<?= $suppliers->supMPhoneNo ?>" id="inputEmail" placeholder="Phone Number">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('supMPhoneNo'); ?></div>


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