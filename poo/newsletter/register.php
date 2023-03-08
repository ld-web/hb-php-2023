<?php
require_once 'functions.php';
require_once 'classes/Email.php';
require_once 'classes/EmailDb.php';
require_once 'classes/NewsletterError.php';

// Aucun email n'a été renseigné
// empty vérifie à la fois que $_POST['email'] existe
// et que $_POST['email'] n'est pas une chaîne vide
if (empty($_POST['email'])) {
  redirect('index.php?error=' . NewsletterError::EMAIL_REQUIRED);
}

try {
  $email = new Email($_POST['email']);
} catch (InvalidArgumentException $ex) {
  redirect('index.php?error=' . NewsletterError::INVALID_FORMAT);
}

// Je charge ma base de données
$db = new EmailDb();
try {
  $db->add($email);
} catch (InvalidArgumentException $ex) {
  redirect('index.php?error=' . NewsletterError::DUPLICATE_EMAIL);
} catch (DomainException $ex) {
  redirect('index.php?error=' . NewsletterError::EMAIL_IS_SPAM);
}

echo "Adresse email enregistrée";
