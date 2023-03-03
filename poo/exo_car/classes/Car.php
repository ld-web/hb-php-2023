<?php
class Car
{
  public function __construct(
    private string $name,
    private string $engine,
    private int $year,
    private int $km,
  ) {
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getEngine(): string
  {
    return $this->engine;
  }

  public function setEngine(string $engine): self
  {
    $this->engine = $engine;

    return $this;
  }

  public function getYear(): int
  {
    return $this->year;
  }

  public function setYear(int $year): self
  {
    $this->year = $year;

    return $this;
  }

  public function getKm(): int
  {
    return $this->km;
  }

  public function setKm(int $km): self
  {
    $this->km = $km;

    return $this;
  }
}
