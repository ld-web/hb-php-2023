<?php
// Recherche utilisateur par nom
// http://localhost/search.php?q=Mick
if (!isset($_GET['q'])) {
  exit('Recherche incorrecte');
}

// 1 - Récupération des données
require_once 'data/users.php';

// 2 - Récupération du paramètre d'URL
// var_dump($_GET);
['q' => $search] = $_GET;

// 3 - Je recherche les résultats dans $users
// 3.1 - Fonction anonyme
// $results = array_filter($users, function ($user) use ($search) {
//   return str_contains($user['name'], $search);
// });
// 3.2 - Fonction fléchée
$results = array_filter($users, fn ($u) => str_contains($u['name'], $search));

require_once 'layout/header.php';
?>

<a href="search.php?q=<?php echo $search; ?>">Retour à la recherche</a>

<h1>Résultats de la recherche pour <?php echo $search; ?></h1>

<!-- Nombre de résultats -->
<h2>
  <?php echo count($results); ?> résultat<?php echo count($results) > 1 ? 's' : ''; ?>
</h2>

<!-- Affichage des résultats -->
<section class="results">
  <?php foreach ($results as $result) {
    $fullName = $result['firstname'] . ' ' . $result['name'];
  ?>
    <article class="result-item">
      <div class="profile-pic">
        <img src=" <?php echo $result['profile_pic']; ?>" alt="<?php echo $fullName; ?>">
      </div>
      <h3><?php echo $fullName; ?></h3>
      <h4><?php echo $result['email']; ?></h4>
      <div class="hobbies">
        <?php foreach ($result['hobbies'] as $hobby) { ?>
          <div><?php echo $hobby; ?></div>
        <?php } ?>
      </div>
    </article>
  <?php } ?>
</section>

<?php require_once 'layout/footer.php';
