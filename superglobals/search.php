<?php
// Recherche utilisateur par nom
// http://localhost/search.php?q=Mick
require_once 'data/users.php';
// Je récupére le nom dans les parametres de l'URL
$name = $_GET['name'];



$founded_name = array_search($name, array_column($users, 'name'));

if ($founded_name === false) {
    exit('Pas de nom trouvé');
}

