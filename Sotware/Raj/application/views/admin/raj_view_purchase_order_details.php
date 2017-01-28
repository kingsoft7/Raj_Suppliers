<?php include('admin_header.php') ?>

<?php 

$orderdetaildetails=$arr['orderdetails'];
$order=$arr['order'];
 ?>

<div class="container">
 <fieldset>
    <legend>View Recived Order Details Info</legend>
    <table class="table table-striped table-hover ">
  <?php foreach ($order as $ord): ?>
    <tr>
      <td>PO No:</td>
      <td><?= $ord->order_id ?></td>
      <td>Supplier Name</td>
      <td><?= $ord->supName ?></td>
    </tr>
    <tr>
      <td>Supplier Bill No</td>
      <td><?= $ord->billNo ?></td>
      <td>Order Date</td>
      <td><?= $ord->orderDate ?></td>
    </tr>
    <tr>
      <td><?= $ord->pName ?>(<?= $ord->pTax ?>)</td>
      <td><?= $ord->pTaxAmt ?></td>
      <td><?= $ord->sName ?>(<?= $ord->sTax ?>)</td>
      <td><?= $ord->sTaxAmt ?></td>
      </tr>
       <tr>
      <td></td>
      <td></td>
      <td>Bill Amount</td>
      <td><?= $ord->billAmt ?></td>
    </tr>
<?php endforeach; ?>
   </table>
<table class="table table-striped table-hover ">
   <thead>
    <tr class="success">
      <th>Name</th>
      <th>Type</th>
      <th>Quntity</th>
      <th>Rate</th>
      <th>Amount</th>
      
    </tr>
  </thead>
  <tbody>
     <tr>
 			<?php if(count($orderdetaildetails)): ?>
			<?php foreach ($orderdetaildetails as $orderdetail): ?>
				<td><?= $orderdetail->item_name ?></td>
				<td><?= $orderdetail->subItem_value." ".$orderdetail->subItem_type ?></td>
				<td><?= $orderdetail->item_quntity ?></td>
				<td><?= $orderdetail->item_price ?></td>
				<td><?= $orderdetail->item_quntity * $orderdetail->item_price ?></td>
				</tr>

			<?php endforeach; ?>
       <thead>
    <tr class="success">
     <?php foreach ($order as $ord): ?>
      <th>Total</th>
      <th>Item:<?= $ord->totalItem ?></th>
      <th>Quntity:<?= $ord->totalQuntity ?></th>
      <th>-</th>
      <th>Amount:<?= $ord->totalAmount ?></th>
      
    </tr>
          <?php endforeach; ?>
  </thead>
			<?php else: ?>
				<td colspan="3">Record Not Found</td>
				</tr>
			<?php endif; ?>


    </tr>
    
  </tbody>
</table> 

</fieldset>


</div>




<?php include('admin_footer.php') ?>