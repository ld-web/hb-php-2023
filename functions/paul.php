<?php
function Arrondi($number)
{
  $roundedNumber = round(($number / 5), 1);
  $number_arrondi_05 = $roundedNumber * 5;

  // echo "<p>" . $number1 . " = " . $number_arrondi_05 . "</p>";
  return $number_arrondi_05;
}

var_dump(Arrondi(51.23));
var_dump(Arrondi(23.25));
var_dump(Arrondi(32.456));
var_dump(Arrondi(27.5664));
var_dump(Arrondi(29.75));
var_dump(Arrondi(30.74));
var_dump(Arrondi(30));
var_dump(Arrondi(89.99));
var_dump(Arrondi(17.5));
var_dump(Arrondi(46.23));
var_dump(Arrondi(-46.23));
