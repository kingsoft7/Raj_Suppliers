<?php include('admin_header.php') ?>
<div class="container">
  <?php echo form_open('raj_subItem_controller/editData',['class'=>'form-horizontal']); ?>
    <?php echo form_hidden('subItem_id',$subItem->subItem_id); ?>
    <?php echo form_hidden('item_id',$subItem->item_id); ?>
    <?php echo form_hidden('stock',$subItem->stock); ?>
  <fieldset>
    <legend>Edit Item Details</legend>
    
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
        <input type="text" name="item_name" value="<?= $subItem->item_name ?>" class="form-control" id="inputEmail" placeholder="Name" readOnly>
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('item_name'); ?></div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Select Type</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="subItem_type" value="<?php echo set_value('subItem_type'); ?>" required>
             <option value="Kg">Kg</option>
             <option value="Metre">Metre</option>
             <option value="Centimeter">Centimetre</option>
             <option value="Inch">Inch</option>
             <option value="Foot">Foot</option>
             <option value="Ltr">Ltr</option> 
             <option value="Nos">Nos</option>     
        </select>
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('subItem_type'); ?></div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Value</label>
      <div class="col-lg-10">
        <input type="text" name="subItem_value" value="<?= $subItem->subItem_value ?>" class="form-control" id="inputEmail" placeholder="value">
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('subItem_value'); ?></div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">MRP</label>
      <div class="col-lg-10">
        <input type="text" name="subItem_mrp" value="<?= $subItem->subItem_mrp ?>" class="form-control" id="inputEmail" placeholder="MRP">
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('subItem_mrp'); ?></div>



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