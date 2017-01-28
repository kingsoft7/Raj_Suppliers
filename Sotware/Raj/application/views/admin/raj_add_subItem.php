<?php include('admin_header.php') ?>
<div class="container">
  <?php echo form_open('raj_subItem_controller/saveData',['class'=>'form-horizontal']); ?>
   <?php echo form_hidden('stock',0); ?>
  <fieldset>
    <legend>Add Item Details</legend>
    
  <?php if($feedback=$this->session->flashdata('feedback')):
      $feedback_class=$this->session->flashdata('feedback_class');
   ?>
    <div class="alert alert-dismissible alert-<?= $feedback_class ?>">
         <strong><?= $feedback ?></strong>
    </div>
  <?php endif ?>

<div class="col-xs-8">
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Select Item</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="item_id" value="<?php echo set_value('item_id'); ?>" required>
           <?php
          $items=$arr[items];
         foreach ($items as $item): ?>
         <option value="<?= $item->item_id ?>"><?= $item->item_name ?></option>
        <?php endforeach; ?>
        </select>
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('item_id'); ?></div>

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
      <label for="inputEmail" class="col-lg-2 control-label">Values</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="subItem_value" id="inputEmail" placeholder="Value" required>
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('subItem_value'); ?></div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">MRP</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="subItem_mrp" id="inputEmail" placeholder="Amount" required>
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