<?php include('admin_header.php') ?>
<div class="container">
  <?php echo form_open('raj_sales_controller/saveTempData',['class'=>'form-horizontal']); ?>
  <?php
$item_id=$arr['item_id'];
$items=$arr['subItem'];
//echo "<pre>";
//print_r($items);
    ?>
  <fieldset>
    <legend>Add Item</legend>
    
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
        <select class="form-control" id="select" name="subItem_id" required>
           <?php
          foreach ($items as $item): ?>
         <option value="<?= $item->subItem_id ?>"><?= $item->subItem_type." ".$item->subItem_value ?></option>
        <?php endforeach; ?>
        </select>
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('subItem_id'); ?></div>


<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Quntity</label>
      <div class="col-lg-10">
        <input type="text" name="item_quntity" class="form-control" id="inputEmail" placeholder="Quntity">
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('item_quntity'); ?></div>



<div class="col-xs-8">
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php
            echo form_reset(['class'=>'btn btn-default','name'=>'cancel','value'=>'cancel']),
            form_submit(['class'=>'btn btn-primary','name'=>'submit','value'=>'Save']); 
            ?>
      </div>
    </div>
 </div>

<div class="col-xs-4"></div>

  </fieldset>

<?php echo form_close(); ?>

</div>





<?php include('admin_footer.php') ?>