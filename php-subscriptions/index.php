<?php 
$page = $_GET['page'] ?? "subscription";
require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <?php include_once('./inc/header.php') ?>
<body>
  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="container-fluid-md">
      <?php 
        include_once("pages/{$page}.php");
      ?>
    </div>
  </div>
  <?php include_once("./inc/footer.php") ?>
</body>
</html>
