<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Quotations</title>
  <meta name="GENERATOR" content="WDL-Website-Builder" />
</head>
<script>
function myFunction() {
    frames.focus();
    frames.print();
   }
</script>

<body onload="myFunction()">
<?php 

$orderdetaildetails=$arr['orderdetails'];
$order=$arr['order'];
$count=0;
 ?>
   <table  border="1" cellspacing="0">
    <tbody>
      <tr >
        <td rowspan="1" colspan="6">
         <p align="center"><font size="6">RAJ SUPPLIERS</font></p>

          <p align="center"><font size="3">Address:Shop No.1,Ekta Nagar,Near Trimurti Washing Center,Chakan,Tal-Khed,Dist-Pune 410501</font></p>

          <p align="center"><font size="3">Web:-www.rajgypsumsuppliers.com,Email:-info@rajgypsumsuppliers.com</font></p>

          <p align="center"><font size="3">Contact No:-+91 9920275266,+91 9324595252</font></p>

          <p align="center">&nbsp;<font size="5"><font size="5">&nbsp; <strong>Quotations</strong></font></font></p>
        </td>
      </tr>

 <?php foreach ($order as $ord): ?>

      <tr >
        <td rowspan="2" colspan="5">
          <p>&nbsp; To,</p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?= $ord->cusName ?></p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $ord->cusAddress ?></p>
        </td>

        <td>Quotation No:- <?= $ord->order_id ?></td>
      </tr>

      <tr>
        <td>Date:- <?= $ord->orderDate ?></td>
      </tr>
<?php endforeach; ?>
      <tr>
        <td>
          <p align="center">Sr</p>
        </td>

        <td>
          <p align="center">Item</p>
        </td>

        <td>
          <p align="center">Type</p>
        </td>

        <td>
          <p align="center">Rate</p>
        </td>

        <td>
          <p align="center">Quntity</p>
        </td>

        <td>
          <p align="center">Amount</p>
        </td>
      </tr>



<tr>
      <?php foreach ($orderdetaildetails as $orderdetail):  $count++; ?>
        <td><p align="center"><?= $count ?></p></td>
        <td><p align="center"><?= $orderdetail->item_name ?></p></td>
        <td><p align="center"><?= $orderdetail->subItem_value." ".$orderdetail->subItem_type ?></p></td>
        <td><p align="center"><?= $orderdetail->subItem_mrp ?></p></td>
        <td><p align="center"><?= $orderdetail->item_quntity ?></p></td>
        <td><p align="center"><?= $orderdetail->item_quntity * $orderdetail->subItem_mrp ?></p></td>
        </tr>

      <?php endforeach; ?>

 <?php foreach ($order as $ord): ?>
         <tr>
        <td>
          <p align="center"><?= $ord->totalItem ?></p>
        </td>

        <td colspan="3">
          <p align="center">Total</p>
        </td>

        <td>
          <p align="center"><?= $ord->totalQuntity ?></p>
        </td>

        <td>
          <p align="center"><?= $ord->totalAmount ?></p>
        </td>
      </tr>

    <tr>
       
        <td colspan="4" rowspan="3">
          <p align="center"></p>
        </td>

        <td>
          <p align="center"><?= $ord->pName ?>(<?= $ord->pTax ?>%)</p>
        </td>

        <td>
          <p align="center"><?= $ord->pTaxAmt ?></p>
        </td>
      </tr>
          <tr>
       
        
        <td>
          <p align="center"><?= $ord->sName ?>(<?= $ord->sTax ?>%)</p>
        </td>

        <td>
          <p align="center"><?= $ord->sTaxAmt ?></p>
        </td>
      </tr>
       <tr>
       
        
        <td>
          <p align="center">Amount</p>
        </td>

        <td>
          <p align="center"><?= $ord->billAmt ?></p>
        </td>
      </tr>

      
     <tr>
        <td colspan="3">
          <p>Amount:-<?= $ord->billAmt ?></p>

          <p>&nbsp;</p>
        </td>

        <td colspan="3">
          <p align="center">For RAJ SUPPLIERS</p>

          <p>&nbsp;</p>

          <p align="center">Authorized Signatory</p>
        </td>
      </tr>
       <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
