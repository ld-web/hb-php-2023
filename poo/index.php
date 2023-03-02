<?php
// Classe, instance, constructeur, méthodes, attributs, portée, encapsulation
// héritage, abstraction, classe abstraite, interface, polymorphisme

class Product
{
  private int $id;
  // Structure de la classe : attributs
  private string $name;
  private float $priceHT;

  public function __construct(float $priceHT)
  {
    $this->priceHT = $priceHT;
  }

  // Comportement(s) de la classe : Méthodes
  public function getPriceTTC(): float
  {
    return $this->priceHT * 1.2;
  }

  // Encapsulation :
  // Accesseur (getter)
  public function getId(): int
  {
    return $this->id;
  }

  // Accesseur (getter)
  public function getName(): string
  {
    // J'expose le name toujours en majuscule
    return strtoupper($this->name);
  }

  // Modificateur (setter)
  public function setName(string $name): void
  {
    if ($name !== '') {
      $this->name = $name;
    }
  }
}

$product = new Product(500);
var_dump($product);

echo $product->getPriceTTC() . "€<br />";

$product->setName('PlayStation');
echo $product->getName();
