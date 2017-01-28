<?php include('admin_header.php') ?>



<div class="container">
 <fieldset>
    <legend>View subItem Info</legend>
   <?php if($feedback=$this->session->flashdata('feedback')):
      $feedback_class=$this->session->flashdata('feedback_class');
   ?>
    <div class="alert alert-dismissible alert-<?= $feedback_class ?>">
         <strong><?= $feedback ?></strong>
    </div>
  <?php endif ?>
<table class="table table-striped table-hover ">
  <thead>
    <tr class="success">
      <th>Sr.No</th>
      <th>Name</th>
      <th>Type</th>
      <th>MRP</th>
      <th>Action</th>
   
    </tr>
  </thead>
  <tbody>
     <tr>
 			<?php if(count($subItems)): ?>
			<?php foreach ($subItems as $subItem): ?>
				<td><?= $subItem->subItem_id ?></td>
				<td><?= $subItem->item_name ?></td>
				<td><?= $subItem->subItem_type ?>(<?= $subItem->subItem_value ?>)</td>
				<td><?= $subItem->subItem_mrp ?></td>
				 <td><?= anchor("raj_subItem_controller/load_edit_page/{$subItem->subItem_id}",'Edit') ?></td>
				
		
				</tr>
			<?php endforeach; ?>
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