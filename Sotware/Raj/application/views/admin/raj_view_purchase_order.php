<?php include('admin_header.php') ?>



<div class="container">
 <fieldset>
    <legend>View Recived Order Info</legend>
<table class="table table-striped table-hover ">
  <thead>
    <tr class="success">
      <th>Order No</th>
      <th>Customer Name</th>
      <th>Date</th>
      <th>Bill No</th>
      <th>Quntity</th>
      <th>Bill Amount</th>
      <th>Total Item</th>
      <th>Action</th>
  
    </tr>
  </thead>
  <tbody>
     <tr>
 			<?php if(count($orders)): ?>
			<?php foreach ($orders as $order): ?>
				<td><?= $order->order_id ?></td>
				<td><?= $order->supName ?></td>
				<td><?= $order->orderDate ?></td>
				<td><?= $order->billNo ?></td>
				<td><?= $order->totalQuntity ?></td>
				<td><?= $order->billAmt ?></td>
				<td><?= $order->totalItem ?></td>
				<td><?= anchor("raj_order_controller/load_view_old_order/{$order->order_id}",'View') ?></td>
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