<?php
echo "<h2>Opérateur +</h2>";

$admin['name'] = "Stéphanie";
$admin['age'] = 22;

// Tableau multi-dimensionnel
$admins = [$admin];

$clients = [
  $user,
  ['name' => 'Lucie', 'age' => 35],
  ['name' => 'Hervé', 'age' => 66]
];

$users = $admin + $clients;
var_dump($users);
