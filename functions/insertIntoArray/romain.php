<?php
$myArray = ['jumbo', 'winnie', 'saturnin'];

// Version renvoyant erreur

function insertIntoArray(array &$array, int $key, mixed $value)
{
  $length = count($array);
  if ($key >= $length) {
    echo ('Error : the key is out of range<br />');
  } else {
    array_splice($array, $key, 0, $value);
    // $array[$key] = $value;
    // return $array;
  }
}

// Version agrandissant le tableau
function insertIntoAndAfterArray(array &$array, int $key, mixed $value)
{
  $arrayLength = count($array);
  if ($key >= $arrayLength) {
    for ($i = $arrayLength; $i < $key; $i++) {
      $array[$i] = null;
    }
    $array[$key] = $value;
  } else {
    array_splice($array, $key, 0, $value);
    // $array[$key] = $value;
    // return $array;
  }
}

//quelques tests
insertIntoArray($myArray, 1, 'bobby');
var_dump($myArray);
insertIntoArray($myArray, 6, 'jojo');
var_dump($myArray);
insertIntoArray($myArray, 8, 'test');
var_dump($myArray);

insertIntoAndAfterArray($myArray, 1, 'bobby');
var_dump($myArray);
insertIntoAndAfterArray($myArray, 6, 'jojo');
var_dump($myArray);
insertIntoAndAfterArray($myArray, 8, 'test');
var_dump($myArray);
