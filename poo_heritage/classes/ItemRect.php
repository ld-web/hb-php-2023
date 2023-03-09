<?php
require_once 'Item.php';

class ItemRect extends Item
{
  private float $width;
  private float $height;

  public function getWidth(): float
  {
    return $this->width;
  }

  public function setWidth(float $width): void
  {
    $this->width = $width;
  }

  public function getHeight(): float
  {
    return $this->height;
  }

  public function setHeight(float $height): void
  {
    $this->height = $height;
  }
}
