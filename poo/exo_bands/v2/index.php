<?php
require_once __DIR__ . '/classes/Db.php';

$db = new Db();

foreach ($db->getBands() as $band) {
  echo $band->getName() . " / " . $band->getStyle()->getName() . "<br />";
}
