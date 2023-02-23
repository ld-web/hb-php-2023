<?php
// Initialisation d'un tableau avec un élément
$products = ["Ecran"];
// Ajout d'un élément
$products[] = "Télévision";
$products[] = "Téléphone";

var_dump($products);

$products[3] = "Micro-ondes";
echo $products[3];
