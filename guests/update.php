<?php include '../header.php'; ?>

<?php

//UPDATE

$ospiteUp = ['name' => 'Riccardo', 'lastname' => 'Silvi'];

?>

<h6>UPDATE QUERY <br><?php echo updateGuestFrom(31, $ospiteUp); ?></h6>


<?php include '../footer.php'; ?>