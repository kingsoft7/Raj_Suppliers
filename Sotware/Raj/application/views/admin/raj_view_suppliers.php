<?php include('admin_header.php') ?>



<div class="container">
 <fieldset>
    <legend>View Suppliers Info</legend>
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
      <th> Id.</th>
      <th>Name</th>
      <th>Balance</th>
      <th>Address</th>
      <th>PhoneNo</th>
      <th>PanNo</th>
      <th>M.Name</th>
      <th>M.PhoneNo</th>
      <th>Action</th>
    
    </tr>
  </thead>
  <tbody>
     <tr>
 			<?php if(count($suppliers)): ?>
			<?php foreach ($suppliers as $supplier): ?>
				<td><?= $supplier->supId ?></td>
				<td><?= $supplier->supName ?></td>
				<td><?= $supplier->supBalance ?></td>
				<td><?= $supplier->supAddress ?></td>
				<td><?= $supplier->supPhoneNo ?></td>
				<td><?= $supplier->supPanNo ?></td>
				<td><?= $supplier->supMName ?></td>
				<td><?= $supplier->supMPhoneNo ?></td>
				<td><?= anchor("raj_suppliers_controller/load_edit_page/{$supplier->supId}",'Edit') ?></td>
		
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