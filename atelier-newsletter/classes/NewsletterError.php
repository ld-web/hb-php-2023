<?php
class NewsletterError
{
  public const EMAIL_REQUIRED = 1;
  public const INVALID_FORMAT = 2;
  public const FILE_WRITE_ERROR = 3;
  public const DUPLICATE_EMAIL = 4;

  public static function getErrorMessage(int $code): string
  {
    switch ($code) {
      case self::EMAIL_REQUIRED:
        return "L'email est obligatoire";
        break;
      case self::INVALID_FORMAT:
        return "Le format de l'email est invalide";
        break;
      case self::FILE_WRITE_ERROR:
        return "Une erreur s'est produite lors de l'enregistrement de votre email";
        break;
      case self::DUPLICATE_EMAIL:
        return "Cet email est déjà enregistré";
        break;
      default:
        return "Une erreur est survenue";
    }
  }
}
