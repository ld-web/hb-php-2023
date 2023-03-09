<?php
require_once __DIR__ . '/Exception/EmailInvalidFormatException.php';

class Email
{
  /**
   * @param string $email
   * @throws EmailInvalidFormatException if email has incorrect format
   */
  public function __construct(
    private string $email
  ) {
    if (!$this->isValid()) {
      throw new EmailInvalidFormatException();
    }
  }

  public function isValid(): bool
  {
    return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): void
  {
    $this->email = $email;
  }
}
