<?php include 'header.php'; ?>

<div class="container">
  <div class="jumbotron">
    <h1 class="text-center">starter Project</h1>
  </div>
</div>

<div class="container">
  <h1 class="text-center">test DB</h1>
  <div class="jumbotron">
    <ul>
      <?php
      $ospiti = getResultsFromQuery('SELECT `id`, `name`, `lastname` FROM `ospiti`');
      foreach ($ospiti as $ospite): ?>
        <li> ID: <?php echo $ospite['id'] ;?>, nome: <?php echo $ospite['name']; ?>, cognome: <?php echo $ospite['lastname'];?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>


<?php include 'footer.php'; ?>
