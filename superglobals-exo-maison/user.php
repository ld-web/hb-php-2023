<?php
require_once 'data/users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="display:flex; flex-direction:column ; align-items:center">
  <h1>Utilisateur</h1>
  
  <?php
  $id=intval($_GET['id']);
  foreach ($users as $user) {

    if ($user['id']==$id) {?>
    <div style="box-shadow:0px 0px 20px 0.5px; padding:15px; margin-bottom:20px">
      <div>
        <img style="border-radius:50%" src="<?php echo $user['profile_pic'] ;?>" alt="">
      </div>
      <h2 style="text-align:center"><?php echo $user['name'] . ' ' . $user['firstname'] ;?></h2>
      <h3 style="text-align:center"><?php echo $user['email'] ;?></h3>
    </div>

      

  <?php }
  };
  ?>
  <a href="index.php">retour à la liste</a>
  
</body>
</html>