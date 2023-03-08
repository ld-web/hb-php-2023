<?php
require_once 'classes/NewsletterError.php';

/**
 * Redirects to specified location
 *
 * @param string $location
 * @return void
 */
function redirect(string $location): void
{
  header('Location: ' . $location);
  exit;
}

function getErrorMessage(int $code): string
{
  switch ($code) {
    case NewsletterError::EMAIL_REQUIRED:
      return "Merci de renseigner un email";
      break;
    case NewsletterError::DUPLICATE_EMAIL:
      return "Cet email est déjà inscrit à la newsletter";
      break;
    case NewsletterError::INVALID_FORMAT:
      return "Le format de l'email est invalide";
      break;
    case NewsletterError::EMAIL_IS_SPAM:
      return "Le domaine de cet email est considéré comme un spam";
      break;
    default:
      return "Contactez l'administrateur de l'application";
  }
}
