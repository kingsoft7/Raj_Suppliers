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
         <ul class="nav navbar-nav navbar-right">
        <li>
         <?= anchor('login/logout','Login') ?>
         </li>
      </ul>
    </div>
  </div>
</nav>