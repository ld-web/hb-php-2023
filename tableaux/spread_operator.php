<?php
echo "<h2>Spread operator</h2>";

$notesPhp = [1, 2, 3];
$notesJs = [4, 5, 6];

$notes = $notesPhp;
var_dump($notes);
// Ici, $notesPhp est un élément
// Il aura donc l'index 0 par défaut
$notes = [$notesPhp];
var_dump($notes);

// Spread operator
$notes = [...$notesPhp];
var_dump($notes);
//       [1, 2, 3     , 4, 5, 6    ]
$notes = [...$notesPhp, ...$notesJs];
var_dump($notes);
