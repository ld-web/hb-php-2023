<?php
// Recherche utilisateur par nom
// http://localhost/search.php?q=Mick
require_once 'data/users.php';
// Je récupère le nom dans les paramètres de l'URL
$name = $_GET['name'];

$founded_name = array_search($name, array_column($users, 'name'));
if ($founded_name === false) {
    exit('Pas de nom trouvé');
}
$founded_userName = $users[$founded_name];

$founded_userName = null;

foreach ($users as $user) {
    if ($user['name'] === $name) {
        $founded_userName = $user;
    }
}

if ($founded_userName === null) {
    exit('Pas de nom trouvé');
}

// if ($founded_user['name'] !== $name) {
//     exit('Pas de nom trouvé');
// }

// if ($founded_userName === $founded_user['name']) {
//     echo 'Le nom '.$founded_user['name']. 'est trouvée';
// }

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
   <h1><?php $founded_userName?></h1>
</body>
</html>