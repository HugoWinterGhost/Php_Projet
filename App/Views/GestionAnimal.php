<?php

if (!isset($_SESSION['user'])) { ?>
  <script>
    location.href = "login";
  </script>;
<?php }

$animaux = Animaux::getAllAnimaux();
$categorie = "";

include "App/templates/gestionAnimalView.php";