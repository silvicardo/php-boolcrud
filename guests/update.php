
<?php include '../template_parts/header.php'; ?>

<div class="container">
  <div class="jumbotron">

    <h1 class="text-center mb-5">Update Guest</h1>
    <?php
    if (!empty($_GET['id']) && count($_GET) === 1)  {

      include '../template_parts/guests/update-form.php';

    } else {

       include '../template_parts/guests/update-result.php';

     }
     ?>


  </div>
</div>

<?php include '../template_parts/footer.php'; ?>
