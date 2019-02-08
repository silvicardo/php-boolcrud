</div><!-- page_content - end -->

</div><!-- main_container - end -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<?php if  (getThePageName() === 'index.php' ||
          (getThePageName() === 'new.php' && empty($_POST)) ||
          (getThePageName() === 'update.php' && count($_GET) === 1 && !empty($_GET['id'])) ||
          (getThePageName() === 'delete.php' && empty($_POST)) ||
          (getThePageName() === 'show.php')) { ?>
<script src="http://localhost/FEBBRAIO/php-boolcrud/dist/app.js" charset="utf-8"></script>
<?php } else { ?>
<script src="http://localhost/FEBBRAIO/php-boolcrud/dist/redirect.js" charset="utf-8"></script>
<?php } ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>
