<?php include '../header.php'; ?>

<?php $guests = getGuestById($_GET['id']); ?>

<div class="container">
  <h1 class="text-center">Guests</h1>
  <div class="jumbotron">
    <table class="table">
          <thead>
              <?php foreach ($guests[0] as $key => $value): ?>
                <th><?php echo $key; ?></th>
              <?php endforeach; ?>
          </thead>
          <tbody>
            <?php foreach ($guests as $guest): ?>
              <tr>
                <?php foreach ($guest as $key => $value): ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach; ?>
                <td class="text-center">
                  <a class="btn btn-warning mb-2"href="http://localhost/FEBBRAIO/php-boolcrud/guests/update.php?id=<?php echo $guest['id']; ?>">Edit</a>

                  <form action="http://localhost/FEBBRAIO/php-boolcrud/guests/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $guest['id']; ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

    <ul>
      <?php

      foreach ($ospiti as $ospite): ?>
        <li> ID: <?php echo $ospite['id'] ;?>, nome: <?php echo $ospite['name']; ?>, cognome: <?php echo $ospite['lastname'];?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<?php include '../footer.php'; ?>
