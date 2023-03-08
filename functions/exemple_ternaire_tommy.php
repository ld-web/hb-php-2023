<?php
$integers = [1, 2, 5, 6, 8, 9];

function pairOuImpair(int $integer): string
{
  return ($integer % 2 === 0) ? "pair" : "impair";
}

foreach ($integers as $integer) {
  echo "$integer est " . pairOuImpair($integer) . "<br />";
}
