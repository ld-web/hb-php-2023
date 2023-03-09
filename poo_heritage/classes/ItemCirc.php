<?php
require_once 'Item.php';

final class ItemCirc extends Item
{
  private float $diameter;

  public function getDiameter(): float
  {
    return $this->diameter;
  }

  public function setDiameter(float $diameter): void
  {
    $this->diameter = $diameter;
  }
}
