<?php
$products = [
  [
    'id' => 1,
    'name' => 'HQZXIvwYLPPI',
    'priceHT' => 324.51,
    'promo' => false,
    'color' => '#ab9885'
  ],
  [
    'id' => 2,
    'name' => 'kjTcHGYFBZAoagenpV',
    'priceHT' => 845.80,
    'promo' => true,
    'color' => '#335ac1'
  ],
  [
    'id' => 3,
    'name' => 'bVHSmlhuegbNolFqbOUT',
    'priceHT' => 163.49,
    'promo' => false,
    'color' => '#0971a7'
  ],
  [
    'id' => 4,
    'name' => 'trHojFrwtwteLG',
    'priceHT' => 402.77,
    'promo' => false,
    'color' => '#13699a'
  ],
  [
    'id' => 5,
    'name' => 'KnbuZFMbLzaqm',
    'priceHT' => 362.63,
    'promo' => false,
    'color' => '#accd9d'
  ],
  [
    'id' => 6,
    'name' => 'teuSwIJIwgjG',
    'priceHT' => 312.72,
    'promo' => false,
    'color' => '#c5a32d'
  ],
  [
    'id' => 7,
    'name' => 'wBEQgz',
    'priceHT' => 773.82,
    'promo' => true,
    'color' => '#79e888'
  ],
  [
    'id' => 8,
    'name' => 'MfLeagrDdUPDnU',
    'priceHT' => 892.35,
    'promo' => true,
    'color' => '#8e5b19'
  ],
  [
    'id' => 9,
    'name' => 'soSEUuCOA',
    'priceHT' => 408.30,
    'promo' => false,
    'color' => '#c377f6'
  ],
  [
    'id' => 10,
    'name' => 'IshrcuzYAoCqbG',
    'priceHT' => 885.08,
    'promo' => true,
    'color' => '#498429'
  ],
  [
    'id' => 11,
    'name' => 'DPeMEeQQF',
    'priceHT' => 564.80,
    'promo' => false,
    'color' => '#ad0bb5'
  ],
  [
    'id' => 12,
    'name' => 'lBRSeSdBD',
    'priceHT' => 665.98,
    'promo' => true,
    'color' => '#081d55'
  ],
  [
    'id' => 13,
    'name' => 'FUaiiTfjkgyZkvGu',
    'priceHT' => 401.9,
    'promo' => false,
    'color' => '#ff9c1c'
  ],
  [
    'id' => 14,
    'name' => 'KHCtjTadKETPqfFqkGfY',
    'priceHT' => 55.66,
    'promo' => false,
    'color' => '#0debf6'
  ],
  [
    'id' => 15,
    'name' => 'cvGYygIKqfSMASRWeX',
    'priceHT' => 896.21,
    'promo' => false,
    'color' => '#b02b9f'
  ],
  [
    'id' => 16,
    'name' => 'QcEjFoBhEriXK',
    'priceHT' => 843.84,
    'promo' => true,
    'color' => '#3aecaa'
  ],
  [
    'id' => 17,
    'name' => 'yrJCeieZhRkdmeKn',
    'priceHT' => 860.62,
    'promo' => true,
    'color' => '#524503'
  ],
  [
    'id' => 18,
    'name' => 'BgbThK',
    'priceHT' => 668.48,
    'promo' => false,
    'color' => '#9752a6'
  ],
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .produit {
      transform: scale(1) rotate(-360deg);
      transition: all 1s;
    }

    .produit:hover {
      transform: scale(1.2) rotate(360deg);
    }
  </style>
</head>

<body>
  <?php
  foreach ($products as $product) { ?>
    <div class="produit" style="padding:20px; background-color:<?php echo $product['color']; ?>; margin:20px; width:25%">
      <?php
      echo '<h2 class="nom">' . $product['name'] . '</h2>';
      echo '<p class="idP">' . "identifiant produit :" . $product['id'] . '</p>';
      echo '<p class="prixP">' . "prix HT : " . $product['priceHT'] . '</p>';
      if ($product["promo"]) {
        echo '<p class="promoP"> Il y a une promo </p>';
      } else {
        echo "<p class='promoP'> Il n'y a pas de promo </p>";
      };
      ?><p class='colorP' style="display:inline"> sa couleur est : </p>
      <?php
      ?>
    </div>
  <?php
  };
  ?>
  <script>
    // let produits = document.querySelectorAll(".produit");

    // produits.forEach((produit) => {
    //   produit.onmouseover = () => {
    //     produit.style.scale = "1.2";
    //     produit.style.transform = "rotate(360deg)";
    //     produit.style.transition = "all 1000ms";
    //   }
    //   produit.onmouseout = () => {
    //     produit.style.scale = "1"
    //     produit.style.transform = "rotate(-360deg)";
    //     produit.style.transition = "all 1000ms"
    //   }
    // })
  </script>
</body>

</html>