<?php
require_once 'functions/utils.php';
require_once 'classes/NewsletterError.php';
require_once 'classes/Email.php';
require_once 'classes/EmailsStore.php';
require_once 'classes/Exception/DuplicateEmailException.php';
require_once 'classes/Exception/EmailInvalidFormatException.php';
require_once 'classes/Exception/FileWriteException.php';

if (empty($_POST['email'])) {
  redirect('index.php?error=' . NewsletterError::EMAIL_REQUIRED);
}

try {
  $email = new Email($_POST['email']);
  $store = new EmailsStore();
  $store->add($email);
} catch (NewsletterException $e) {
  redirect('index.php?error=' . $e->getCode());
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
