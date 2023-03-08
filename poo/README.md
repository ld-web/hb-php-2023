# Programmation orientée objet

Dans [index.php](index.php), découverte de la structure d'une classe.

Écriture d'attributs, de méthodes, et de méthodes d'accès et de modification pour appliquer l'encapsulation des attributs au sein de la classe.

## Ateliers

### User

[exo_user.php](exo_user.php)

> Objectifs : écriture d'une classe, d'attributs, de méthodes, encapsulation, constante de classe

- Créez une classe User qui contiendra un nom, un prénom, un attribut banned booléen et un âge (valeur entière). Si vous voulez, remplacez l'âge par un attribut birthDate de type [DateTime](https://www.php.net/manual/en/class.datetime) issu de la SPL. Vous respecterez le principe d'encapsulation pour les attributs de cette classe. Le constructeur prendra trois paramètres : un nom et un prénom et un âge (ou une date de naissance). L'attribut banned sera à false par défaut
- Créez dans cette classe une méthode fullName qui renverra le nom complet de l'utilisateur, soit : nom et prénom séparés par un espace
- Créez une autre méthode hasLegalAge renvoyant true uniquement si l'utilisateur est majeur
- Créez, en-dehors de la classe User, une fonction ban qui prendra en paramètre un User et permettra de passer son attribut banned à true
- Toujours en-dehors de la classe User, créez un tableau d'objets User. Itérez sur ce tableau pour afficher les noms complets de chacun de ces utilisateurs avec leur méthode fullName, et indiquez pour chacun d'eux s'ils sont majeurs ou non avec la méthode hasLegalAge

### Car

[exo_car](exo_car/)

> Objectifs : écriture d'une classe, parcours d'un tableau d'objets, construction dynamique d'une liste `select` basée sur une partie des données présentes dans le tableau (années des voitures)

- Réalisez une classe Car qui aura les attributs suivants :
  - name, engine, year, km
- Réalisez un tableau de Car que vous déposerez dans un fichier PHP, puis un moteur de recherche pour chercher les voitures (par année ou par kilométrage)
- Pour l'année dans le moteur de recherche, générez une liste "select" en fonction des années qui se trouvent dans le tableau de voitures

### Newsletter

[newsletter](newsletter/)

> Objectifs : lecture/écriture dans un fichier, refactorisation en classes, gestion d'erreurs (exceptions)

Réaliser un petit système de newsletter :

- Une page contenant un formulaire où renseigner son adresse mail
- Dans la cible du formulaire, écrire dans un fichier l'adresse email renseignée. Ouvrir et lire le fichier au préalable pour s'assurer que l'adresse email n'a pas déjà été enregistrée (doublon)
- Une fois cette fonctionnalité réalisée, développer un système qui détecte si l'adresse email est un spam ou non
