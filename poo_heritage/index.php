<?php
require_once 'classes/ItemCirc.php';
require_once 'classes/ItemRect.php';

$circItem = new ItemCirc();
$rectItem = new ItemRect();

$circItem->setName("Test");
var_dump($circItem);
echo $circItem->getFormattedName();
