<?php
require_once 'DbItem.php';

class Style extends DbItem
{
  private string $name;

  public function __construct(
    int $id,
    string $name
  ) {
    parent::__construct($id);
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }
}
