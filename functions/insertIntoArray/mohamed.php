<?php
$names = ['Mohamed', 'Lucas', 'Théo', 'Mika', 'Tommy'];

function insertElement(array $names, string $elementToAdd, int $index): array
{
  if ($index > count($names)) {
    $paddedNames = array_pad($names, $index, null);
    $paddedNames[$index] = $elementToAdd;
    return $paddedNames;
  } else {
    array_splice($names, $index, 0, $elementToAdd);
    return $names;
  }
}

$names = insertElement($names, 'Paul', 13);
var_dump($names);
