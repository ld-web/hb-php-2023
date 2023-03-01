<?php
require_once 'data/users.php';
$search = $_GET['search'];
// var_dump($search);
$results = array_filter($users, fn ($user) => str_contains($user['name'],$search));
// var_dump($results);
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
    <h1>Resultats de la recherche</h1>
    <a href="search.php?search=<?php echo $search ;?>">retour à la recherche</a>
    
    <div style="display:flex; flex-wrap:wrap; justify-content:space-evenly; width:80%; margin:auto">
    <?php foreach ($results as $result)
    { 
    ?>
    <div style="box-shadow:0px 0px 20px 0.5px; padding:15px; margin-bottom:20px; width:250px; display:flex; flex-direction:column; align-items:center">
        <div>
        <img style="border-radius:50%" src="<?php echo $result['profile_pic'] ;?>" alt="">
        </div>
        <h2 style="text-align:center"><?php echo $result['name'] . ' ' . $result['firstname'] ;?></h2>
        <h3 style="text-align:center"><?php echo $result['email'] ;?></h3>
        <div>
            <?php
        foreach ($result['hobbies'] as $hobby){ ?>
            <span style="background-color: bisque; padding:2px; margin:10px"><?php echo $hobby ;?></span>
        <?php }
        ?>
        </div>
    </div>
    <?php
    } ?>
    </div>
    
</body>
</html>