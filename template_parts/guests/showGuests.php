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
            <?php if (getThePageName() === 'index.php') { ?>
            <td>
              <a class="btn btn-success" href="http://localhost/FEBBRAIO/php-boolcrud/guests/show.php?id=<?php echo $guest['id']; ?>">Detail</a>
            </td>
          <?php } ?>
            <td>
              <a class="btn btn-warning"href="http://localhost/FEBBRAIO/php-boolcrud/guests/update.php?id=<?php echo $guest['id']; ?>">Edit</a>
            </td>
            <td>
              <form action="http://localhost/FEBBRAIO/php-boolcrud/guests/delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $guest['id']; ?>">
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
