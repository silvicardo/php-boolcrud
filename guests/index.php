<?php include '../template_parts/header.php'; ?>

<?php $guests = getAllGuests(); ?>


<div class="container">
  <h1 class="text-center">Guests</h1>

  <div class="container text-center my-5">
    <a class="btn btn-primary" href="http://localhost/FEBBRAIO/php-boolcrud/guests/new.php">Add New</a>
  </div>

  <div class="jumbotron">

    <?php include '../template_parts/guests/showGuests.php'; ?>

  </div>
</div>


<?php include '../template_parts/footer.php'; ?>
