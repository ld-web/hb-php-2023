<?php
// LAYOUT - HEADER
require_once 'layout/header.php';
?>

<!-- CONTENT -->
<div class="container-fluid">
  <h1>CONTACT</h1>
  <form>
    <div>
      <label for="name">Nom :</label>
      <input type="text" name="" id="name" />
    </div>
    <div>
      <label for="email">Email :</label>
      <input type="email" name="" id="email" />
    </div>
    <div>
      <select name="object" id="">
        <option value="devis">Demande de devis</option>
        <option value="infos">Demande d'informations</option>
      </select>
    </div>
    <div>
      <textarea name="message" id="" cols="30" rows="15"></textarea>
    </div>
    <div><input type="submit" value="Envoyer" /></div>
  </form>
</div>
<!-- CONTENT -->

<?php
// LAYOUT - FOOTER
require_once 'layout/footer.php';
?>