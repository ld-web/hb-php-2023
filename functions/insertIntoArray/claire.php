<?php
function addValueTab(int $value, int $key, array $tabs): array
{
  $nbTabs = count($tabs);

  if ($key > $nbTabs) {
    $tabs = array_pad($tabs, $key, null);
    $tabs[$key] = $value;
  } else {
    $tabsSplit1 = array_slice($tabs, 0, $key);
    $tabsSplit2 = array_slice($tabs, $key);
    $tabs = [...$tabsSplit1, $value, ...$tabsSplit2];
  }

  return $tabs;
}

$integerValues = [1, 2, 3];

$firstTry = addValueTab(4, 6, $integerValues);
var_dump($firstTry);

$secondTry = addValueTab(84, 4, $firstTry);
var_dump($secondTry);

$thirdTry = addValueTab(75, 0, $secondTry);
var_dump($thirdTry);
