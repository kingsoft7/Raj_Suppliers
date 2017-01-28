<?php include('public_header.php') ?>

<div class="container">

  <fieldset>
    <legend>LR Enquery</legend>


 <?php if(count($lr)): ?>
<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">LR No</label>
      <div class="col-lg-10">
           <label for="inputEmail" class="form-control"><?= $lr->lrNo ?></label>
      </div>
    </div>
</div>


<div class="col-xs-8">
     <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Date</label>
      <div class="col-lg-10">
      <label for="inputEmail" class="form-control"><?= $lr->lrDate ?></label>
      
      </div>
       
    </div>
</div>


<div class="col-xs-8">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Time</label>
      <div class="col-lg-10">
           <label for="inputEmail" class="form-control"><?= $lr->lrTime ?></label>
      </div>

    </div>
</div>



<div class="col-xs-8">
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label" >From</label>
      <div class="col-lg-10">
          <label for="inputEmail" class="form-control"><?= $lr->lrFrom ?></label>
      </div>
    </div>
  
</div>


<div class="col-xs-8">
  <div class="form-group">
      <label for="select" class="col-lg-2 control-label">To</label>
      <div class="col-lg-10">
     <label for="inputEmail" class="form-control"><?= $lr->lrTo ?></label>
      </div>
    </div>
</div>

<div class="col-xs-8">
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Vehicle No</label>
      <div class="col-lg-10">
     <label for="inputEmail" class="form-control"><?= $lr->vehNumber ?></label>
      </div>
    </div>
</div>


<div class="col-xs-8">
  <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Driver Name</label>
      <div class="col-lg-10">
   <label for="inputEmail" class="form-control"><?= $lr->driName ?></label>
      </div>
    </div>
</div>


<?php else: ?>
  <div class="col-xs-8">
  <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Record Not Found</label>
      
    </div>
 </div>
      
      <?php endif; ?>

<div class="col-xs-4"></div>


  </fieldset>




</div>

<?php include('public_footer.php') ?>