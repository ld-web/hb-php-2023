<?php
$clients = ["Bob", "Anna", "John"];
$nbClients = count($clients);

// for
echo "<h2>For loop</h2>";
for ($i = 0; $i < $nbClients; $i++) {
  echo $clients[$i] . "<br />";
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

// foreach
echo "<h2>Foreach loop</h2>";
$clients = ["Bob", "Anna", "John", "vip" => "JCVD"];
foreach ($clients as $index => $clientName) {
  echo "Index : $index, valeur : $clientName<br />";
}
