<?php
require_once 'classes/BandsDb.php';
require_once 'classes/StylesDb.php';

$stylesDb = new StylesDb();
$bandsDb = new BandsDb($stylesDb);

foreach ($bandsDb->getBands() as $band) {
  echo $band->getName() . " / " . $band->getStyle()->getName() . "<br />";
}
