<?php
echo "<h2>Array destructuring</h2>";

$entiers = [1, 2, 3];
[$one, $two, $three] = $entiers;
var_dump($one, $two, $three);
var_dump($entiers);

[,, $last] = $entiers;
var_dump($last);

[2 => $last] = $entiers;
var_dump($last);

$config = [
  "DB_USER" => "Bobby",
  "DB_PASSWORD" => "12345"
];

[
  "DB_USER" => $user,
  "DB_PASSWORD" => $password
] = $config;

var_dump($user, $password);
