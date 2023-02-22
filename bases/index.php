<?php
const SOFTWARE_VERSION = "1.0.1";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bases</title>
</head>

<body>
  <?php
  /*
  Commentaire multi-lignes
  */
  $age = 25; // int
  $myOtherVar = 'Bonjour l\'équipe, j\'ai ' . $age . ' ans'; // string
  $myVar = "Bonjour l'équipe, j'ai $age ans"; // string
  echo $myOtherVar;
  echo "<br />";
  echo $myVar;

  $isLogged = true; // boolean
  $priceHT = 156.45; // float
  $hobbies = ["Reading", "Eating", "Sleeping", 45]; // array
  echo $hobbies[1];
  var_dump($hobbies);

  var_dump($age);
  var_dump(SOFTWARE_VERSION);

  $age = $age + 1;
  $age += 1; // Strictement équivalent à la ligne précédente
  $age++; // Également équivalent
  echo "<br />";
  echo "J'ai pris trois ans, j'ai maintenant $age ans !";

  $MyVarName = "age";

  echo $$MyVarName; // echo $age
  ?>

  <footer>
    MyCorp - 2023 - v<?php echo SOFTWARE_VERSION; ?>
  </footer>
</body>

</html>