<?php
$elements = [1, 2, 3];

function addElementInArray(array $tableau, int $index, int $value): array
{
  $tableauLength = count($tableau);
  $countNull = $index - $tableauLength;
  if ($index < $tableauLength) {
    array_splice($tableau, $index, 0, $value);
    return $tableau;
  }

  $nullFilledTableau = array_fill($tableauLength, $countNull, NULL);

  // $tableau += $nullFilledTableau;
  // $tableau[] = $value;
  // return $tableau;
  return [...$tableau, ...$nullFilledTableau, $value];
};

$elements = addElementInArray($elements, 18, 1);
var_dump($elements);
