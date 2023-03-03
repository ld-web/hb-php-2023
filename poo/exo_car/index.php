<?php
require_once 'data/cars.php';

$years = [];
foreach ($cars as $car) {
  $years[] = $car->getYear();
}
$years = array_unique($years);
sort($years);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recherche de voitures</title>
</head>

<body>
  <form action="results.php" method="get">
    <input type="number" name="km" id="km" />
    <select name="year" id="year">
      <?php foreach ($years as $y) { ?>
        <option value="<?php echo $y; ?>">
          <?php echo $y; ?>
        </option>
      <?php } ?>
    </select>
    <input type="submit" value="Rechercher">
  </form>
</body>

</html>