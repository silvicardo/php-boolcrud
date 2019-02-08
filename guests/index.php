<?php include '../template_parts/header.php'; ?>

<?php $guests = getAllGuests(); ?>

<div class="container">

  <h1 class="text-center mb-5">Guests</h1>

  <div class="jumbotron">

    <?php include '../template_parts/guests/guests-table.php'; ?>

  </div>
</div>


<?php include '../template_parts/footer.php'; ?>
