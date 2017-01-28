<?php include('admin_header.php') ?>



<div class="container">
 <fieldset>
    <legend>View Customer Info</legend>
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
      <th>cName</th>
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
 			<?php if(count($customers)): ?>
			<?php foreach ($customers as $customer): ?>
				<td><?= $customer->cusId ?></td>
				<td><?= $customer->cusName ?></td>
				<td><?= $customer->cusBalance ?></td>
				<td><?= $customer->cusAddress ?></td>
				<td><?= $customer->cusPhoneNo ?></td>
				<td><?= $customer->cusPanNo ?></td>
				<td><?= $customer->cusMName ?></td>
				<td><?= $customer->cusMPhoneNo ?></td>
				<td><?= anchor("raj_customer_controller/load_edit_page/{$customer->cusId}",'Edit') ?></td>
		
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