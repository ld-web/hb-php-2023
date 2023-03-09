<?php
class Item
{
  protected int $id;
  protected string $name;
  protected float $price;

  public function getFormattedName(): string
  {
    return strtoupper($this->name);
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): void
  {
    $this->price = $price;
  }
}
