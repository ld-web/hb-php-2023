<?php
require_once 'functions.php';
require_once 'classes/Email.php';
require_once 'classes/EmailDb.php';

// Aucun email n'a été renseigné
// empty vérifie à la fois que $_POST['email'] existe
// et que $_POST['email'] n'est pas une chaîne vide
if (empty($_POST['email'])) {
  redirect('index.php?error=1');
}

// Format de l'email valide
try {
  $email = new Email($_POST['email']);
} catch (InvalidArgumentException $ex) {
  redirect('index.php?error=3');
}

// Je charge ma base de données
$db = new EmailDb();
try {
  $db->add($email);
} catch (InvalidArgumentException $ex) {
  redirect('index.php?error=2');
}

echo "Adresse email enregistrée";
