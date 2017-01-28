<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png" href="<?= base_url('assets/images/Ganesh.png')?>">
  <title>RAJ SUPPLIERS</title>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">

  </head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">RAJ SUPPLIERS</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

     <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Basic<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
             <li><?= anchor('raj_item_controller/load_add_item_page','Add/View Item') ?></li>
                   <li class="divider"></li>
             <li><?= anchor('raj_subItem_controller/load_subItem_page','Add Item Details') ?></li>
                   <li class="divider"></li>
             <li><?= anchor('raj_subItem_controller/load_subItem_view_page','View Item Details') ?></li>
             <li class="divider"></li>
             <li><?= anchor('raj_suppliers_controller/raj_add_suppliers','Add Suppliers Info') ?></li>
                   <li class="divider"></li>
             <li><?= anchor('raj_suppliers_controller/raj_view_suppliers','View Suppliers Info') ?></li>
            <li class="divider"></li>
            <li><?= anchor('raj_customer_controller/add_customer','Add Customer Info') ?></li>
                  <li class="divider"></li>
             <li><?= anchor('raj_customer_controller/view_customer','View Customer Info') ?></li>
             <li class="divider"></li>
             <li><?= anchor('raj_subItem_controller/view_stock_page','Stock') ?></li>
            </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Purchase<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
             <li><?= anchor('raj_order_controller/load_order_step_one_page','Recived Order') ?></li>
             <li class="divider"></li>
             <li><?= anchor('raj_order_controller/view_order_page','View Order') ?></li>
             <li class="divider"></li>
             <li><?= anchor('raj_order_controller/load_edit_order_tax_page','Set Tax') ?></li>
          </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sales<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?= anchor('raj_sales_controller/load_order_step_one_page','Sales Order') ?></li>
            <li class="divider"></li>
            <li><?= anchor('raj_sales_controller/view_order_page','View Order') ?></li>
            <li class="divider"></li>
             <li><?= anchor('raj_quotations_controller/load_edit_order_tax_page','Set Tax') ?></li>
         </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Quotations<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?= anchor('raj_quotations_controller/load_order_step_one_page','New Quotations') ?></li>
            <li class="divider"></li>
             <li><?= anchor('raj_quotations_controller/view_order_page','View Quotations') ?></li>
          </ul>
        </li>
   
         <li><?= anchor('login/call_to_change_password','Change Password') ?></li>
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li>
        <?= anchor('login/logout','Logout') ?>
         </li>
      </ul>
    </div>
  </div>
</nav>