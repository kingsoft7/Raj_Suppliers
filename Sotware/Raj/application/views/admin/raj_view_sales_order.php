<?php include('admin_header.php') ?>

<div class="container">
 <fieldset>
    <legend>View Invoice Info</legend>
<table class="table table-striped table-hover ">
  <thead>
    <tr class="success">
      <th>Quotations No</th>
      <th>Customer Name</th>
      <th>Date</th>
      <th>Quntity</th>
      <th>Total Amount</th>
      <th>Total Item</th>
      <th>Action</th>
  
    </tr>
  </thead>
  <tbody>
     <tr>
 			<?php if(count($orders)): ?>
			<?php foreach ($orders as $order): ?>
				<td><?= $order->order_id ?></td>
				<td><?= $order->cusName ?></td>
				<td><?= $order->orderDate ?></td>
				<td><?= $order->totalQuntity ?></td>
				<td><?= $order->billAmt ?></td>
				<td><?= $order->totalItem ?></td>
				<td><?= anchor("raj_sales_controller/load_view_old_order/{$order->order_id}",'Print') ?></td>
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