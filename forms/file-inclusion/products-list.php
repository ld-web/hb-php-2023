<?php
// IMPORT DATA
require_once 'data/products.php';
// LAYOUT - HEADER
$title = "Produits";
require_once 'layout/header.php';
?>
<!-- CONTENT -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h1 class="page-header">Produits</h1>
      <p class="lead">
        Retrouvez tous nos produits !
      </p>
    </div>
  </div>
  <section>
    <?php foreach ($products as $product) {
      require 'templates/product-item.php';
    } ?>
  </section>
</div>
<!-- CONTENT -->

<?php
// LAYOUT - FOOTER
require_once 'layout/footer.php';
?>