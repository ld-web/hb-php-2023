<?php

function roundedPositiveFloat(float $number): float
{
  if ($number < 0) {
    echo "nombres négatifs non acceptés";
    exit;
  }
  $numberInt = intval($number); // isoler la partie entière
  $numberDecimal = $number - $numberInt; // isoler la partie décimale

  if ($numberDecimal >= 0.75) {
    return $numberInt + 1;
  }

  if ($numberDecimal >= 0.25) {
    return $numberInt + 0.5;
  }

  return $numberInt;
};

var_dump(roundedPositiveFloat(51.23));
var_dump(roundedPositiveFloat(23.25));
var_dump(roundedPositiveFloat(32.456));
var_dump(roundedPositiveFloat(27.5664));
var_dump(roundedPositiveFloat(29.75));
var_dump(roundedPositiveFloat(30.74));
var_dump(roundedPositiveFloat(30));
var_dump(roundedPositiveFloat(89.99));
var_dump(roundedPositiveFloat(17.5));
var_dump(roundedPositiveFloat(46.23));
var_dump(roundedPositiveFloat(-46.23));
