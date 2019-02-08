<?php include '../template_parts/header.php'; ?>

<?php $deletionSuccess = deleteGuestFrom($_POST['id']); ?>

<div class="container">
  <div class="jumbotron">
    <?php if ($deletionSuccess){ ?>
      <h3>Deletion Succesful, back to the Homepage</h3>
    <?php } else { ?>
      <h3>Deletion Failed, back to Homepage</h3>
    <?php } ?>
  </div>
</div>

<?php include '../template_parts/footer.php'; ?>
