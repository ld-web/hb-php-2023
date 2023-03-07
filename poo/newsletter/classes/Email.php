<?php

class Email
{
  private string $email;

  public function __construct(string $email)
  {
    $this->email = $email;

    if (!$this->isValid()) {
      throw new InvalidArgumentException();
    }
  }

  private function isValid(): bool
  {
    $isEmailValid = filter_var($this->email, FILTER_VALIDATE_EMAIL);
    return $isEmailValid !== false;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }
}
