<?php
$clients = ["Bob", "Anna", "John"];
$nbClients = count($clients);
$lastClientIndex = $nbClients - 1;

// for
echo "<h2>For loop</h2>";
for ($i = 0; $i < $nbClients; $i++) {
  echo $clients[$i] . "<br />";
}

// Sens inverse
echo "<h4>Sens inverse</h4>";
// v1
echo "<h5>v1</h5>";
for ($i = $lastClientIndex; $i >= 0; $i--) {
  echo $clients[$i] . "<br />";
}
// v2
echo "<h5>v2</h5>";
for ($i = count($clients); $i > 0; $i--) {
  echo $clients[$i - 1] . "<br />";
}
// v3
echo "<h5>v3</h5>";
$reverse = array_reverse($clients);
// boucle for
for ($i = 0; $i < count($reverse); $i++) {
  echo $reverse[$i] . "<br />";
}

// while
echo "<h2>While loop</h2>";
$i = 0; // instruction d'initialisation
while ($i < $nbClients) { // condition de maintien
  echo $clients[$i] . "<br />";
  $i++; // instruction de pas
}

// do...while
echo "<h2>Do...while loop</h2>";
$i = 0;
do {
  echo $clients[$i] . "<br />";
  $i++;
} while ($i < $nbClients);
// Sens inverse
echo "<h4>Sens inverse</h4>";
$i = count($clients); // instruction d'initialisation
do {
  $i--; // instruction de pas
  echo $clients[$i] . "<br />";
} while ($i > 0); // condition de maintien

// foreach
echo "<h2>Foreach loop</h2>";
$clients = ["Bob", "Anna", "John", "vip" => "JCVD"];
foreach ($clients as $index => $clientName) {
  echo "Index : $index, valeur : $clientName<br />";
}
