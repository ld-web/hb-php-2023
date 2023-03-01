<?php
require_once 'data/users.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
</head>

<body>
  <h1><?php echo "Bienvenue " ; ?></h1>
  <h2>Utilisateurs</h2>
  <?php foreach ($users as $user) { ?>
    <div>
      <h3><?php echo $user['firstname'] . ' ' . $user['name']; ?></h3>
      <p>
        <a href="user.php?id=<?php echo $user['id']; ?>">Voir la fiche de <?php echo $user['firstname']; ?></a>
      </p>
    </div>
  <?php } ?>
</body>

</html>