<?php
require_once "data/users.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Liste des utilisateurs</h1>
  <?php
  foreach ($users as $user){ ?>
    <div class="user">
      <h2><?php echo $user['name'] . ' ' . $user['firstname'] ;?></h2>
      <a href="user.php?id=<?php echo $user['id'] ;?>">voir la carte de <?php echo $user['firstname'] ;?></a>
    </div>
  <?php }; ?>
</body>
</html>