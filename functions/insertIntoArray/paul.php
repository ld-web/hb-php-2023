<?php
$newNbr = 50;
$id = 20;
$tables = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function insertTable(int $newNbr, int $key, array &$tables): void
{
  $length = count($tables);
  if ($key > $length) {
    $tables = array_pad($tables, $key, null);
    $tables[] = $newNbr;
  } else {
    array_splice($tables, $key, 0, $newNbr);
  }
}

insertTable($newNbr, $id, $tables);
var_dump($tables);
