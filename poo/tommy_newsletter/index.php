<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription à la newsletter</title>
  <style>
    .error {
      background-color: #F00;
      color: #FFF;
      padding: 1em;
      width: 40%;
      text-align: center;
      margin-bottom: 20px;

    }
  </style>
</head>

<body>
  <h1>Inscription newsletter</h1>

  <?php
  if (isset($_GET['error'])) { ?>
    <div class="error">
      Une erreur est survenue : <?php echo getErrorMessage(intval($_GET['error'])); ?>
    </div>
  <?php } ?>

  <form action="register.php" method="post">
    <input type="email" name="email" placeholder="Votre email..." required />
    <input type="submit" value="Inscription" />
  </form>
</body>

</html>