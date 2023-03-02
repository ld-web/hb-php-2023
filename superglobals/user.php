<?php
// Fiche utilisateur à partir d'un paramètre GET

// Récupérer le paramètre d'URL 'id'
// A partir de ce paramètre d'URL, chercher dans le tableau $users
// un utilisateur possédant cet ID
// Une fois récupéré, affichez-le à l'écran
// http://localhost/user.php?id=1
// var_dump($_GET);
require_once 'data/users.php';

// intval convertit une donnée en valeur entière
// En cas d'échec elle renvoie 0.
// Vu que dans notre BDD on n'aura pas d'ID 0,
// on peut contrôler si la valeur entrée dans l'URL est
// correcte ou non
$id = intval($_GET['id']);
if ($id === 0) {
  exit('Entrez un identifiant correct');
}

// --- Avec les fonctions de la SPL ----
$foundUserKey = array_search($id, array_column($users, 'id'));
if ($foundUserKey === false) {
  exit('Utilisateur non trouvé');
}
$foundUser = $users[$foundUserKey];
var_dump($foundUser);

// --- Avec foreach -------
// J'initialise $foundUser
$foundUser = null;

foreach ($users as $user) {
  if ($user['id'] === $id) {
    $foundUser = $user;
  }
}

// Si foundUser vaut null, c'est parce qu'il n'a pas été
// changé dans le foreach, donc aucun utilisateur trouvé
if ($foundUser === null) {
  exit('Utilisateur non trouvé');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiche utilisateur</title>
</head>

<body>
  <h1><?php echo $foundUser['name'] . ' ' . $foundUser['firstname']; ?></h1>
</body>

</html>