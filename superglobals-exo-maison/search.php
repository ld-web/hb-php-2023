<?php
require_once 'data/users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="GET">
        <input type="text" name="search" value="" placeholder="votre recherche">
        <input type="submit" value="recherche">
    </form>
    
</body>
</html>