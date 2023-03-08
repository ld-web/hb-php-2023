<?php
class EmailDb
{
  private array $emails;
  private const EMAILS_DB_PATH = __DIR__ . '/../emails.txt';

  public function __construct()
  {
    $this->emails = $this->getEmailsFromDb();
  }

  public function add(Email $email): bool
  {
    if ($this->contains($email)) {
      throw new InvalidArgumentException();
    }

    $emailsFile = fopen(self::EMAILS_DB_PATH, 'a');
    $write = fwrite($emailsFile, $email->getEmail() . PHP_EOL);
    if ($write !== false) {
      return true;
    }
    fclose($emailsFile);
  }

  public function contains(Email $email): bool
  {
    return in_array($email->getEmail(), $this->emails);
  }

  private function getEmailsFromDb(): array
  {
    $emailsFileContent = file_get_contents(self::EMAILS_DB_PATH);

    return array_filter(
      explode(PHP_EOL, $emailsFileContent),
      fn ($email) => $email !== ''
    );
  }

  public function getEmails(): array
  {
    return $this->emails;
  }
}
