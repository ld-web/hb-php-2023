<?php
class Band
{
  public function __construct(
    private int $id,
    private string $name,
    private int $formationYear,
    private Style $style
  ) {
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getFormationYear(): int
  {
    return $this->formationYear;
  }

  public function getStyle(): Style
  {
    return $this->style;
  }
}
