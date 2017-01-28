<?php include('admin_header.php') ?>
<div class="container">
  <?php echo form_open('raj_item_controller/editData',['class'=>'form-horizontal']); ?>
  <?php echo form_hidden('item_id',$item->item_id); ?>
  
  <fieldset>
    <legend>Edit Item</legend>

<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Item Name</label>
      <div class="col-lg-10">
        <input type="text" name="item_name" value="<?= $item->item_name ?>" class="form-control" id="inputEmail" placeholder="Number">
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('item_name'); ?></div>
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