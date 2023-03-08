<?php

class SpamChecker
{
  private const SPAM_DOMAINS = ['youhou.com', 'mailinator.com', 'free.fr', 'hello.net'];

  public function isSpam(Email $email): bool
  {
    return in_array($email->getDomain(), self::SPAM_DOMAINS);
  }
}
