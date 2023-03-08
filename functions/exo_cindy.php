<?php
class Product
{
  private int $id;
  // Structure de la classe : attributs
  private string $name;
  private float $priceHT;

  public function __construct(string $name, float $priceHT)
  {
    $this->name = $name;
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

$products = [
  new Product("qGVUDGgQga", 319.77),
  new Product("IkXtQnjYz", 252.72),
  new Product("xEdskaslVJEP", 638.48),
  new Product("NnfNbiDtjZlCwwH", 138.39),
  new Product("iYLyHGoboLsBgsprMF", 883.55),
  new Product("ukhwrWptB", 342.94),
  new Product("jaJDemIeUPXrwFSHtf", 950.90),
  new Product("airXKre", 111.56),
  new Product("frpjUeVngdtnLZRbLfIq", 347.2),
  new Product("PhdEj", 172.19),
  new Product("ggotdubYbiEYiNflgi", 740.83),
  new Product("dTtdHJADAds", 620.28),
  new Product("jOlEYZIW", 777.82),
  new Product("aYkpTp", 196.68),
  new Product("ruzxjRRoCkPRVtTHt", 285.70),
  new Product("NHzEsgqv", 672.72),
  new Product("IGquVSoerWxsqIALkp", 679.44),
  new Product("YQoZoHrOWaeRamfwCxb", 264.67),
  new Product("ViNxHzidqquNutnh", 282.05),
  new Product("cCuAZ", 593.66),
  new Product("eAvZqqGKjpPNeZjuWi", 84.83),
  new Product("ZHBERwu", 347.05),
  new Product("DpLogtGUIMQZSXPRPNGp", 214.35),
  new Product("fSNOzHvAeCfjWDeYbLSL", 455.12),
  new Product("dbFbTNu", 154.14),
  new Product("wDnMJrgeR", 924.21),
  new Product("zVIDVu", 282.8),
  new Product("LLiquYonWuUrI", 928.04),
  new Product("DHPdxElIZYn", 164.84),
];

// - Tu peux utiliser les fonctions sur les tableaux, sauf bien sûr, la fonction sort directement sur le tableau de produits
// - Réaliser une fonction qui prend le tableau de produits en paramètre,
// et renvoie un nouveau tableau trié par prix TTC croissant

function sortByPrice(array $products): array
{
  $prices = [];
  foreach ($products as $product) {
    $prices[] = $product->getPriceTTC();
  }
  // Je trie et conserve les clés
  asort($prices);

  // Construire un nouveau tableau de produits triés
  // En utilisant mon tableau de prix triés
  // Car dans le tableau de prix triés, j'ai toutes les clés
  $result = [];
  foreach ($prices as $key => $price) {
    $result[] = $products[$key];
  }

  return $prices;
}

var_dump(sortByPrice($products));
