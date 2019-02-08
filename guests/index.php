<?php include '../template_parts/header.php'; ?>

<?php $guests = getAllGuests(); ?>

<div class="container">
  <h1 class="text-center">Guests</h1>
  <div class="jumbotron">

    <?php include '../template_parts/guests/showGuests.php'; ?>

  </div>
</div>


<?php include '../template_parts/footer.php'; ?>
