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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <section class="container">
    <h1 class="my-5 text-center text-uppercase  col-6 offset-3 border p-4 rounded fs-3">Voici la liste des produits :</h1>
    <div class="row justify-content-center gap-3">
      <?php
      foreach ($products as $product) {
        echo '<div class="d-flex flex-column gap-3 col-lg-3 mt-5 border rounded p-5">';
        echo 'id : ' . $product["id"] . '<br>';
        echo "name : "  . $product['name'] . "<br>";
        echo 'price : ' . $product['priceHT'] . '<br>';
        echo 'promo : ' . ($product['promo'] ? '✅' : '❌') . '<br>';
        // if ($product['promo']) {
        //     echo 'promo : ✅ <br>';
        // }else{
        //     echo 'promo : ❌<br>';
        // };
        echo 'color : <br>';
        echo '<div class= " col-md-6 col-3 text-light rounded" style="background-color: ' . $product['color'] . ';">' . $product['color'] . '</div>';
        echo "</div>";
      }
      ?>
    </div>
  </section>

  <script>
    let effect = document.querySelectorAll("div.col-lg-3");
    effect.forEach((v) => {
      v.onmouseover = () => {
        v.style = "transform: scale(1.1); border: 2px solid black !important; cursor: pointer; transform: translateY(50px); transition: all 0.8s ease-in-out;";
      }
      v.onmouseout = () => {
        v.style = "";
      }

      v.onclick = () => {
        if (v.classList.contains("col-lg-3")) {
          v.className = v.className.replace("col-lg-3", "col-lg-12");
        } else {
          v.className = v.className.replace("col-lg-12", "col-lg-3");
        }
      }
    });


    let titleEffect = document.querySelector("h1");
    titleEffect.onmouseover = () => {
      titleEffect.style = "transform: scale(1.1); border: 2px solid black!important; cursor: pointer; transform: translate(20px, 20px); transition: all 0.8s ease-in-out;";
    }
    titleEffect.onmouseout = () => {
      titleEffect.style = "";
    }
  </script>
</body>

</html>