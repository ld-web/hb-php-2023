<?php
require_once 'classes/NewsletterError.php';

$title = "Inscription à la newsletter";
require_once 'layout/header.php';
?>

<div class="container">
  <h1>Inscription à la newsletter</h1>

  <?php if (array_key_exists('error', $_GET)) { ?>
    <div class="alert alert-danger">
      <?php echo NewsletterError::getErrorMessage(intval($_GET['error'])); ?>
    </div>
  <?php } ?>

  <form action="register.php" method="post">
    <div class="form-floating mb-3">
      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required />
      <label for="email">Adresse email</label>
    </div>
    <button type="submit" class="btn btn-primary">
      Inscription
    </button>
  </form>
</div>

<?php
require_once 'layout/footer.php';
