<?php require_once 'layout/header.php'; ?>

<h1>Recherche d'utilisateurs</h1>

<form action="results.php" method="GET">
  <input type="text" name="q" placeholder="Votre recherche ici" value="<?php echo $_GET['q'] ?? ''; ?>" />
  <input type="submit" value="Recherche">
</form>

<?php require_once 'layout/footer.php'; ?>