<?php
require_once 'functions/utils.php';
require_once 'classes/NewsletterError.php';
require_once 'classes/Email.php';
require_once 'classes/EmailsStore.php';

if (empty($_POST['email'])) {
  redirect('index.php?error=' . NewsletterError::EMAIL_REQUIRED);
}

try {
  $email = new Email($_POST['email']);
} catch (InvalidArgumentException $e) {
  redirect('index.php?error=' . NewsletterError::INVALID_FORMAT);
}

$store = new EmailsStore();
try {
  $store->add($email);
} catch (InvalidArgumentException $e) {
  redirect('index.php?error=' . NewsletterError::DUPLICATE_EMAIL);
} catch (RuntimeException $e) {
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
