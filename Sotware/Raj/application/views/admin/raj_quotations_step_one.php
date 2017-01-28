<?php include('admin_header.php') ?>
<div class="container">
  <?php echo form_open('raj_quotations_controller/selectItemData',['class'=>'form-horizontal']); ?>
  <?php
$items=$arr['items'];
$orders=$arr['orders'];
$customers=$arr['customers'];
$tax=$arr['tax']; 
    ?>
  <fieldset>
    <legend>New Quotations</legend>
    
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
      <div class="col-lg-10 col-lg-offset-2">
        <?php
            echo form_reset(['class'=>'btn btn-default','name'=>'cancel','value'=>'cancel']),
            form_submit(['class'=>'btn btn-primary','name'=>'submit','value'=>'Next >>']); 
            ?>
      </div>
    </div>
 </div>

<div class="col-xs-4"></div>

  </fieldset>

<?php echo form_close(); ?>
   <legend>Order Data</legend>
 <fieldset>
      <?php

$count=0;
$quntity=0;
$amount=0;

       if(count($orders)): ?>
   
<table class="table table-striped table-hover ">
  <thead>
    <tr class="success">
      <th>Item Name</th>
      <th>Type</th>
      <th>Rate</th>
      <th>Quntity</th>
      <th>Amount</th>
      <th>Action</th>
     </tr>
  </thead>
  <tbody>
     <tr>
          <?php foreach ($orders as $order): ?>
        <td><?= $order->item_name ?></td>
        <td><?= $order->subItem_value." ".$order->subItem_type ?></td>
        <td><?= $order->subItem_mrp ?></td>
        <td><?= $order->item_quntity ?></td>
        <td><?= $order->subItem_mrp*$order->item_quntity ?></td>
        <td><?= anchor("raj_quotations_controller/load_delete_temp_order/{$order->id}",'Delete') ?></td>
        <?php        $count++;
                      $quntity=$quntity+$order->item_quntity;
                      $amount=$amount+$order->subItem_mrp*$order->item_quntity;
         ?>
        </tr>
      <?php endforeach; ?>
      </tr>
        <thead>
    <tr class="success">
      <th>Total Item</th>
      <th><?= $count ?></th>
      <th>Quntity</th>
      <th><?= $quntity ?></th>
      <th>Amount</th>
      <th><?= $amount ?></th>
     </tr>
  </thead>
    


    </tr>
    
  </tbody>
</table> 
  </fieldset>
  <fieldset>
    <?php echo form_open('raj_quotations_controller/saveOrder',['class'=>'form-horizontal']); ?>
    <?php echo form_hidden('totalItem',$count);  ?>
  <?php echo form_hidden('totalQuntity',$quntity);  ?>
  <?php echo form_hidden('totalAmount',$amount);  ?>
   <?php echo form_hidden('pTax',$tax->pTax);  ?>
  <?php echo form_hidden('pName',$tax->pName);  ?>
  <?php echo form_hidden('sTax',$tax->sTax);  ?>
      <?php echo form_hidden('sName',$tax->sName);  ?>
  <div class="col-xs-8">
     <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Date</label>
      <div class="col-lg-10">
        <input type="date" id="datepicker" value="<?php echo set_value('lrDate'); ?>" class="form-control" placeholder="Pickup Date" name="orderDate" required/>
      
      </div>
       
    </div>

</div>
<div class="col-xs-4"><?php echo form_error('orderDate'); ?></div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Select Customer</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="cusId" value="<?php echo set_value('cusId'); ?>" required>
           <?php
          foreach ($customers as $customer): ?>
         <option value="<?= $customer->cusId ?>"><?= $customer->cusName ?></option>
        <?php endforeach; ?>
        </select>
      </div>
    </div>
</div>
<div class="col-xs-4"><?php echo form_error('cusId'); ?></div>


<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><?= $tax->pName ?>(<?= $tax->pTax ?>%)</label>
      <div class="col-lg-10">
        <input type="text" name="pTaxAmt" value="<?= $amount*($tax->pTax /100)  ?>" class="form-control" id="inputEmail" placeholder="tax" readOnly>
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('pTaxAmt'); ?></div>


<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><?= $tax->sName ?>(<?= $tax->sTax ?>%)</label>
      <div class="col-lg-10">
        <input type="text" name="sTaxAmt" value="<?= $amount*($tax->sTax /100)  ?>" class="form-control" id="inputEmail" placeholder="tax" readOnly>
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('sTaxAmt'); ?></div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Bill Amount</label>
      <div class="col-lg-10">
        <input type="text" name="billAmt" value="<?= $amount+($amount*($tax->pTax /100))+($amount*($tax->sTax /100))  ?>" class="form-control" id="inputEmail" placeholder="tax" readOnly>
      </div>

    </div>
</div>
<div class="col-xs-4"><?php echo form_error('billAmt'); ?></div>

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
  <?php else: ?>
        <td colspan="3">Record Not Found</td>
        </tr>
      <?php endif; ?>

</div>





<?php include('admin_footer.php') ?>