<?php
require_once 'DbItem.php';
require_once 'Style.php';

class Band extends DbItem
{
  private string $name;
  private int $formationYear;
  private Style $style;

  function __construct(
    int $id,
    string $name,
    int $formationYear,
    Style $style
  ) {
    parent::__construct($id);
    $this->name = $name;
    $this->formationYear = $formationYear;
    $this->style = $style;
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
