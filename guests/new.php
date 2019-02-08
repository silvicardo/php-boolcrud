<?php include '../template_parts/header.php'; ?>

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

<?php include '../template_parts/footer.php'; ?>
