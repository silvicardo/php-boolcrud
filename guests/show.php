<?php include '../template_parts/header.php'; ?>

<?php $guests = getGuestById($_GET['id']); ?>


<div class="container">
  <div class="jumbotron">

      <h1 class="text-center mb-5">Guest Details</h1>

    <?php include '../template_parts/guests/guests-table.php'; ?>

  </div>
</div>

<?php include '../template_parts/footer.php'; ?>
