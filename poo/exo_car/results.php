<?php
if (!isset($_GET['year'])) {
  header('Location: index.php');
}

require_once 'data/cars.php';

$year = intval($_GET['year']);

// $results = [];

// foreach ($cars as $car) {
//   if ($car->getYear() === $year) {
//     $results[] = $car;
//   }
// }

$results = array_filter($cars, fn (Car $c) => $c->getYear() === $year);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Résultats de recherche</title>
</head>

<body>
  <h1>Résultats</h1>
  <div class="results">
    <?php foreach ($results as $res) { ?>
      <div class="result-item">
        <h3>
          <?php echo $res->getName(); ?>
        </h3>
        <span>
          <?php echo $res->getKm(); ?> - <?php echo $res->getYear(); ?>
        </span>
      </div>
    <?php } ?>
  </div>
</body>

</html>