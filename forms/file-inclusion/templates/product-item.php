<?php
require_once 'constants.php';
?>
<article class="row product-item">
  <div>
    <h2><?php echo $product['name']; ?></h2>
  </div>
  <div>
    <?php echo $product['priceHT'] * (1 + TVA); ?> €
  </div>
</article>