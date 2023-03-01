<?php
// Recherche utilisateur par nom
// http://localhost/search.php?name=Mick
if (!isset($_GET['q'])) {
exit('aucun nom utilisateur');
}


// 1- récupération des données
require_once 'data/users.php';

// 2- récupération du paramètre d'URL
['q'=>$search] = $_GET;


// 3- Je recherche les résultats dans $users
// ----v1---- fonction annonyme
// $result = array_filter($users, function($user) use ($search){
//     return  str_contains($user['name'], $search);
// });
// ----v2---- fonction fléchée
$results = array_filter($users, fn($user) => str_contains($user['name'], $search));
// var_dump($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div id="wrapper">
        <h1>Résultat de la recherche pour <?php echo $search ;?></h1>
<!-- nombre de résultats -->
<h2><?php echo count($results); ?> résultats</h2>

<!-- affichage des résultats -->
<section class="results">
    <?php foreach ($results as $result){
        $fullName=$result['name']. " " . $result['firstname']
        ?>
    <article class="result-items">
        <div class="profile-pic">
            <img src=" <?php echo $result['profile_pic'] ?>" alt="<?php echo $fullName ?>">
        </div>
        <h3> <?php echo $fullName ?> </h3>
        <h4> <?php echo $result['email'] ?> </h4>
        <div>
            <?php
                foreach ($result['hobbies'] as $hobby){
                    ?> <div class="hobbies"> <?php echo $hobby; ?></div><?php
                }
            ?>
        </div>
    </article>
    <?php }; ?>
</section>
    </div>


</body>
</html>