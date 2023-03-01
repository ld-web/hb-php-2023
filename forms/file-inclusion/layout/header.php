<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    // 1 - Condition IF classique
    // if (isset($title)) {
    //   echo $title;
    // } else {
    //   echo "MyCorp";
    // }

    // 2 - Opérateur ternaire
    // echo (isset($title)) ? $title : "MyCorp";

    // 3 - Opérateur NULL coalescent
    echo $title ?? "MyCorp";
    ?>
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
  <?php require_once __DIR__ . '/navbar.php'; ?>