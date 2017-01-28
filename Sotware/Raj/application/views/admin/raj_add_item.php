<?php include('admin_header.php') ?>
<div class="container">
  <?php echo form_open('raj_item_controller/saveData',['class'=>'form-horizontal']); ?>
  
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
      <label for="inputEmail" class="col-lg-2 control-label">Item Name</label>
      <div class="col-lg-10">
        <input type="text" name="item_name" class="form-control" id="inputEmail" placeholder="Name">
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

 <fieldset>

      <?php if(count($items)): ?>
   
<table class="table table-striped table-hover ">
  <thead>
    <tr class="success">
      <th>Id</th>
      <th>Item</th>
      <th>Action</th>
     </tr>
  </thead>
  <tbody>
     <tr>
      
      <?php foreach ($items as $item): ?>
        <td><?= $item->item_id ?></td>
        <td><?= $item->item_name ?></td>
        <td><?= anchor("raj_item_controller/load_edit_page/{$item->item_id}",'Edit') ?></td>
        </tr>
      <?php endforeach; ?>
      </tr>
      <?php else: ?>
        <td colspan="3">Record Not Found</td>
        </tr>
      <?php endif; ?>


    </tr>
    
  </tbody>
</table> 
  <?= $this->pagination->create_links(); ?>
</fieldset>


</div>





<?php include('admin_footer.php') ?>