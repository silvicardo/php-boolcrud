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
      $ospiti = getAllGuests();
      foreach ($ospiti as $ospite): ?>
        <li> ID: <?php echo $ospite['id'] ;?>, nome: <?php echo $ospite['name']; ?>, cognome: <?php echo $ospite['lastname'];?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<div class="container">


<?php
//test funzioni DB

//UPDATE

$ospiteUp = ['name' => 'Riccardo', 'lastname' => 'Silvi'];

?>

<h6>UPDATE QUERY <br><?php echo updateGuestFrom(31, $ospiteUp); ?></h6>

<?php
//CREATE

$ospiteNew = [
            'name' => 'Riccardo',
            'lastname' => 'Silvi',
            'date_of_birth' => '1986-12-01',
            'document_type' => 'CI',
            'document_number' => '899.1221.5256 x375'
          ];
?>


<h6>CREATE QUERY <br><?php echo createNewGuestFrom($ospiteNew); ?></h6>
<?php

//DELETE
?>
<h6>DELETE QUERY <br><?php echo deleteGuestFrom(40); ?></h6>



</div>

<?php include 'footer.php'; ?>
