<?php include '../template_parts/header.php'; ?>



<div class="container">
  <div class="jumbotron">

  <h1 class="text-center my-5">Create a new guest</h1>

   <?php
   if (empty($_POST)) {

     include '../template_parts/guests/create-form.php';

   } else {

     include '../template_parts/guests/create-result.php';

   }

    ?>

  </div>
</div>

<?php include '../template_parts/footer.php'; ?>
