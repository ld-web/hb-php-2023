<?php

function addInArray(array $array, mixed $element, int $index): mixed
{
  if ($index < 0) {
    return "L'index doit être positif";
  } else if ($index > count($array)) {
    return "Le tableau n'est pas aussi grand";
  }
  array_splice($array, $index, 0, $element);
  return $array;
}

function addToArray(array $array, mixed $element, int $index): mixed
{
  if ($index <= count($array)) {
    $array = addInArray($array, $element, $index);
  } else {
    for ($i = count($array); $i <= $index; $i++) {
      $array[$i] = ($i === $index) ? $element : null;
    }
  }
  return $array;
}

var_dump(addInArray([1, 2, 3], 4, 2));
var_dump(addInArray([1, 2, 3], 5, 5));

var_dump(addToArray([1, 2, 3], 4, 2));
var_dump(addToArray([1, 2, 3], 5, 5));
