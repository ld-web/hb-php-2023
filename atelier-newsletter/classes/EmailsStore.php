<?php
require_once __DIR__ . '/Email.php';
require_once __DIR__ . '/Exception/DuplicateEmailException.php';
require_once __DIR__ . '/Exception/FileWriteException.php';

class EmailsStore
{
  /**
   * @var Email[]
   */
  private array $emails;

  private const EMAILS_FILE_PATH = __DIR__ . '/../data/emails.txt';

  public function __construct()
  {
    $this->emails = $this->getEmailsFromFile();
  }

  /**
   * @param Email $email
   * @return void
   * @throws DuplicateEmailException if email has duplicate
   * @throws FileWriteException if unable to write to file
   */
  public function add(Email $email)
  {
    if ($this->contains($email)) {
      throw new DuplicateEmailException();
    }

    $emailsFile = fopen(self::EMAILS_FILE_PATH, 'a');
    $writeEmail = fwrite($emailsFile, $email->getEmail() . PHP_EOL);
    if ($writeEmail === false) {
      throw new FileWriteException();
    }
  }

  public function contains(Email $email): bool
  {
    foreach ($this->emails as $fileEmail) {
      if ($email->getEmail() === $fileEmail->getEmail()) {
        return true;
      }
    }

    return false;
  }

  private function getEmailsFromFile(): array
  {
    $emails = file(self::EMAILS_FILE_PATH, FILE_IGNORE_NEW_LINES);
    return array_map(fn ($email) => new Email($email), $emails);
  }
}
