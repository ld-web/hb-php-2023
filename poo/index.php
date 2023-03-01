<?php

// Classes, instance, constructeur, méthodes, attributs, portée, encapsulation
// héritage, abstraction, classe abstraite, interface, polymorphisme



// struture : une classe Product A un non et A un prix HT
// si l'attriut à une portée définie private, alors elle ne sera accessile QUE DANS la classe
class Product
{
    private int $id;
    private string $name;
    private float $priceHT;

    public function __construct(float $priceHT)
    {
        $this->priceHT= $priceHT;
    }

    //Comportement de la classe : Méthodes
    public function getPriceTTC() : float
    {
        return  $this->priceHT * 1.2;
    }

    //Encapsulation :
        // Accesseur (getter)
        public function getName() : string
        {
            return strtoupper($this->name);
        }
        // Modifcateur (setter)
        public function setName(string $name) : void
        {
            if($name !== ''){
                $this->name = $name;
            }
        }

        // Accesseur (getter)
        public function getId() : int
        {
            return $this->id;
        }
}

$product = new Product(500);
var_dump($product);
// echo $product->name; ne fonctionnera pas car name était défini private et ici nous ne sommes plus dans la définition de classe
// echo $product->priceHT; ne fonctionnera pas car nous n'avons encore pas défini de prix (quand le prix était en public)

// $product->priceHT = 50; valable quand le prix était en public
// echo $product->priceHT; valable quand le prix était en public
echo $product-> getPriceTTC()
?>€<br><?php

$product->setName('banane');
echo $product->getName();