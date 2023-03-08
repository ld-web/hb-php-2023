<?php
require_once 'functions/utils.php';
require_once 'classes/NewsletterError.php';

if (empty($_POST['email'])) {
  redirect('index.php?error=' . NewsletterError::EMAIL_REQUIRED);
}

$email = $_POST['email'];
$emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($emailIsValid === false) {
  redirect('index.php?error=' . NewsletterError::INVALID_FORMAT);
}

$emailsFile = fopen('data/emails.txt', 'a');
$writeEmail = fwrite($emailsFile, $email . PHP_EOL);
if ($writeEmail === false) {
  redirect('index.php?error=' . NewsletterError::FILE_WRITE_ERROR);
}

require_once 'layout/header.php';
?>

<div class="container">
  <div class="alert alert-success">
    Votre email a bien été enregistré
  </div>
</div>

<?php
require_once 'layout/footer.php';
