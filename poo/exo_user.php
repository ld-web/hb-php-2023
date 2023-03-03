<?php
/*
- Créez une classe User qui contiendra un nom, un prénom, un attribut banned booléen et un âge (valeur entière). Si vous voulez, remplacez l'âge par un attribut birthDate de type DateTime issu de la SPL (https://www.php.net/manual/en/class.datetime).
Vous respecterez le principe d'encapsulation pour les attributs de cette classe.
Le constructeur prendra trois paramètres : un nom et un prénom et un âge (ou une date de naissance). L'attribut banned sera à false par défaut
- Créez dans cette classe une méthode fullName qui renverra le nom complet de l'utilisateur, soit : nom et prénom séparés par un espace
- Créez une autre méthode hasLegalAge renvoyant true uniquement si l'utilisateur est majeur
- Créez, en-dehors de la classe User, une fonction ban qui prendra en paramètre un User et permettra de passer son attribut banned à true
- Toujours en-dehors de la classe User, créez un tableau d'objets User. Itérez sur ce tableau pour afficher les noms complets de chacun de ces utilisateurs avec leur méthode fullName, et indiquez pour chacun d'eux s'ils sont majeurs ou non avec la méthode hasLegalAge
*/

class User
{
  private bool $banned;
  public const LEGAL_AGE_FR = 18;

  public function __construct(
    // Promotion d'attributs
    private string $name,
    private string $firstname,
    private int $age,
    private bool $isAdmin
  ) {
    $this->banned = false;
  }

  // MÉTHODES
  public function getFullName(): string
  {
    return $this->getName() . ' ' . $this->getFirstname();
  }

  public function hasLegalAge(): bool
  {
    return $this->age >= self::LEGAL_AGE_FR;
  }

  // ENCAPSULATION
  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }

  public function setFirstname(string $firstname): void
  {
    $this->firstname = $firstname;
  }

  public function getBanned(): bool
  {
    return $this->banned;
  }

  public function setBanned(bool $banned): void
  {
    $this->banned = $banned;
  }

  // Getter : je récupère de la donnée et la renvoie
  public function getAge(): int
  {
    return $this->age;
  }

  // Setter : je modifie de la donnée
  public function setAge(int $age): void
  {
    $this->age = $age;
  }

  public function getIsAdmin(): bool
  {
    return $this->isAdmin;
  }
}

var_dump(User::LEGAL_AGE_FR);

function ban(User $u): void
{
  if (!$u->getIsAdmin()) {
    $u->setBanned(true);
  }
}

$user = new User("Johnston", "Winnie", 63, true);
var_dump($user);
$user->setName("Bobby");
echo $user->getName();
echo "<br />";
echo $user->getFullName();

var_dump($user);
ban($user);
var_dump($user);

$users = [
  new User("Woods", "Alice", 68, false),
  new User("Hart", "Ada", 15, false),
  new User("McKenzie", "Francis", 49, true),
  new User("Lane", "Mario", 50, false),
  new User("Becker", "Brett", 16, false),
  new User("Marsh", "Elva", 63, true),
];

var_dump($users);

foreach ($users as $user) {
  echo $user->getFullName() . "<br />";
  echo $user->hasLegalAge() ? "MAJEUR" : "MINEUR";
  echo "<br />";
}
