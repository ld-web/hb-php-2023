<?php
$clients = ["Bob", "Anna", "John"];
$admins = ["Max", "Stéphanie"];
$nbClients = count($clients);
var_dump(count($clients));

// array_merge renvoie un nouveau tableau
$users = array_merge($clients, $admins);
var_dump($users);

// sort modifie un tableau existant
$sortedUsers = sort($users);
var_dump($sortedUsers);
var_dump($users);

// array_reverse renvoie un nouveau tableau
$usersDescendingOrder = array_reverse($users);
var_dump($usersDescendingOrder, $users);
