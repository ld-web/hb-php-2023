<?php
require_once 'functions.php';

// Aucun email n'a été renseigné
// empty vérifie à la fois que $_POST['email'] existe
// et que $_POST['email'] n'est pas une chaîne vide
if (empty($_POST['email'])) {
  redirect('index.php?error=1');
}

$email = $_POST['email'];

// Format de l'email valide
$emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

if ($emailIsValid === false) {
  redirect('index.php?error=3');
}

// --- LECTURE ET VÉRIFICATION DE DOUBLON ---
$emailsFileContent = file_get_contents('emails.txt');

$emails = array_filter(
  explode(PHP_EOL, $emailsFileContent),
  fn ($email) => $email !== ''
);

// Vérification de doublon
$emailAlreadyExists = in_array($_POST['email'], $emails);

// L'adresse email a été renseignée, mais existe déjà
if ($emailAlreadyExists) {
  redirect('index.php?error=2');
}

// --- ECRITURE ---
$emailsFile = fopen('emails.txt', 'a');
$write = fwrite($emailsFile, $_POST['email'] . PHP_EOL);
if ($write !== false) {
  echo "Adresse email enregistrée";
}
fclose($emailsFile);
