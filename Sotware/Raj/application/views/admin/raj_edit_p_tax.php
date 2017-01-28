<?php include('admin_header.php') ?>
<div class="container">
  <?php echo form_open('raj_order_controller/update_tax_Data',['class'=>'form-horizontal']); ?>
    <?php echo form_hidden('id',$tax->id); ?>

  <fieldset>
    <legend>Purchase Tax Setting</legend>
    
  <?php if($feedback=$this->session->flashdata('feedback')):
      $feedback_class=$this->session->flashdata('feedback_class');
   ?>
    <div class="alert alert-dismissible alert-<?= $feedback_class ?>">
         <strong><?= $feedback ?></strong>
    </div>
  <?php endif ?>


<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">First Tax Name</label>
      <div class="col-lg-10">
        <input type="text" name="pName" value="<?= $tax->pName ?>" class="form-control" id="inputEmail" placeholder="Tax Name" required>
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('pName'); ?></div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Tax(%)</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" value="<?= $tax->pTax ?>" name="pTax" id="inputEmail" placeholder="Tax(%)">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('pTax'); ?></div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Secound Tax Name</label>
      <div class="col-lg-10">
        <input type="text" name="sName" value="<?= $tax->sName ?>" class="form-control" id="inputEmail" placeholder="Tax Name" required>
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('sName'); ?></div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Tax(%)</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" value="<?= $tax->sTax ?>" name="sTax" id="inputEmail" placeholder="Tax(%)">
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('sTax'); ?></div>


<div class="col-xs-8">
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php
            echo form_reset(['class'=>'btn btn-default','name'=>'cancel','value'=>'cancel']),
            form_submit(['class'=>'btn btn-primary','name'=>'submit','value'=>'Update']); 
            ?>
      </div>
    </div>
 </div>
<div class="col-xs-4"></div>

  </fieldset>
<?php echo form_close(); ?>



</div>

<?php include('admin_footer.php') ?>