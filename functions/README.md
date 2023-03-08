# Fonctions

## Introduction

Dans [index.php](index.php), définition d'une fonction retournant un booléen en fonction d'un âge donné : est-ce que l'âge est au-dessus d'une limite légale.

Ensuite, définition d'une constante contenant la limite légale et utilisation au sein de la fonction.

## Pratique

Dans [functions.php](functions.php), création d'autres fonctions : on joue un peu avec les paramètres, et on découvre les valeurs par défaut pour rendre un paramètre optionnel.

On a ensuite découvert qu'on pouvait réutiliser le spread operator dans les paramètres d'une fonction.

## Atelier

Les fichiers sont les différentes implémentations des élèves. Cela offre plusieurs approches différentes pour la réalisation de l'atelier.

### Arrondi à 0.5

- Vous allez réaliser une fonction qui effectue un arrondi à 0.5 supérieur ou inférieur au plus proche suivant la valeur donnée
- Exemple :
  0.234 => 0
  1.56 => 1.5
  1.27 => 1.5
  1.12 => 1
  1.25 => 1.5
  ...
- Vous réfléchirez au nom de cette fonction, à sa signature, et la manière dont vous l'implémentez
- Réalisez au moins une dizaine d'exemples qui démontreront le bon fonctionnement de votre fonction

### Insertion dans un tableau

Réaliser une fonction qui insère un élément dans un tableau. On fournira à la fonction le tableau dans lequel insérer l'élément, l'élément en question, et la position (l'index).
Par exemple, si j'ai le tableau [1, 2, 3] et que je veux insérer l'élément 4 à l'index 2, je me retrouverai avec [1, 2, 4, 3].
Bien sûr les index sont toujours positifs. On ne travaillera qu'avec des index numériques.
Si on fournit un index plus grand que la taille du tableau, alors on proposera 2 implémentations différentes : la première renverra une erreur car l'index est en-dehors des limites, la seconde agrandira le tableau avec des éléments vides jusqu'à insérer l'élément voulu.
