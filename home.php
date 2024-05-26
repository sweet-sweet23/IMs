<?php
  $page_title = 'Home Page';
  require_once('Controllers/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('admin.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Your account is inactive, please contact the administrator.</h1>   
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
