<?php
$user['name'] = "John";
$user['age'] = 26;

$admin['name'] = "Stéphanie";
$admin['age'] = 22;

// Tableau multi-dimensionnel
$admins = [$admin];

$clients = [
  $user,
  ['name' => 'Lucie', 'age' => 35],
  ['name' => 'Hervé', 'age' => 66]
];
