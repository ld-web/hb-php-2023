<?php
const FR_AGE_MAJORITE = 18;

function isMajeur(int $age): bool
{
  // 1 - Condition IF classique
  // if ($age >= FR_AGE_MAJORITE) {
  //   return true;
  // } else {
  //   return false;
  // }

  // 2 - Opérateur ternaire
  // return ($age >= FR_AGE_MAJORITE) ? true : false;

  // 3 - Retour = résultat de l'évaluation
  // de l'expression "$age >= FR_AGE_MAJORITE"
  // Vu qu'il s'agit d'une comparaison,
  // elle va forcément retourner TRUE ou FALSE
  // On peut donc la relayer en retournant son résultat
  return $age >= FR_AGE_MAJORITE;
}

$user = [
  'name' => 'Winnie Frazier',
  'country' => 'FR',
  'age' => 54
];

if (isMajeur($user['age'])) {
  echo "Vous êtes majeur !";
} else {
  echo "Vous n'êtes pas autorisé à visionner les contenus de ce site";
}
