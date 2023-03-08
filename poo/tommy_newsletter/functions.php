<?php

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
    case 1:
      return "Merci de renseigner un email";
      break;
    case 2:
      return "Cet email est déjà inscrit à la newsletter";
      break;
    case 3:
      return "Le format de l'email est invalide";
      break;
    case 4:
      return "Cet email est un spam";
      break;
    default:
      return "Contactez l'administrateur de l'application";
  }
}
