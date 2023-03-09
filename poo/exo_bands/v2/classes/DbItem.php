<?php
class DbItem
{
  protected int $id;

  public function __construct(int $id)
  {
    $this->id = $id;
  }

  public function getId(): int
  {
    return $this->id;
  }
}
