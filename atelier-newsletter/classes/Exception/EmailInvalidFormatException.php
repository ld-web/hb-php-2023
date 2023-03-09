<?php

require_once __DIR__ . '/../NewsletterError.php';
require_once __DIR__ . '/NewsletterException.php';

/**
 * Vu que cette classe hérite de la classe Exception
 * de la SPL, je vais alors hériter de tous
 * les attributs "protected" ou "public"
 * et de toutes les méthodes "protected" ou "public"
 */
final class EmailInvalidFormatException extends NewsletterException
{
  public function __construct()
  {
    $this->code = NewsletterError::INVALID_FORMAT;
  }
}
