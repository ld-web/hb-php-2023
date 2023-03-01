<?php
// LAYOUT - HEADER
require_once 'layout/header.php';
var_dump($_GET);
var_dump($_POST);
?>

<!-- CONTENT -->
<div class="container-fluid">
  <h1>CONTACT</h1>
  <form method="post">
    <div>
      <label for="name">Nom :</label>
      <input type="text" name="nom" id="name" />
    </div>
    <div>
      <label for="email">Email :</label>
      <input type="email" name="email" id="email" />
    </div>
    <div>
      <select name="object" id="">
        <option value="devis">Demande de devis</option>
        <option value="infos">Demande d'informations</option>
      </select>
    </div>
    <div>
      <!-- <label for="news">je souhaite m'abonner à la newsletter</label>
      <input type="checkbox" value="yes" name="news" id="news"> -->
      <div>Jem'abonne à la newsletter</div>
      <input type="radio" name="news" value="yes" checked id="newsYes">
      <label for="newsYes">Oui</label>
      <input type="radio" name="news" value="no" id="newsNo">
      <label for="newsNo">Non</label>
    </div>
    <div>
      <textarea name="message" id="" cols="30" rows="10"></textarea>
    </div>
    <div><input type="submit" value="Envoyer" /></div>
  </form>
</div>
<!-- CONTENT -->

<?php
// LAYOUT - FOOTER
require_once 'layout/footer.php';
?>