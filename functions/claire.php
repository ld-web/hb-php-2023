<?php
function roundDecimal(float $number): float
{
  return round($number * 2) / 2;
}

var_dump(roundDecimal(51.23));
var_dump(roundDecimal(23.25));
var_dump(roundDecimal(32.456));
var_dump(roundDecimal(27.5664));
var_dump(roundDecimal(29.75));
var_dump(roundDecimal(30.74));
var_dump(roundDecimal(30));
var_dump(roundDecimal(89.99));
var_dump(roundDecimal(17.5));
var_dump(roundDecimal(46.23));
var_dump(roundDecimal(-46.23));
