<?php

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'admin') { ?>
  <script>
    location.href = "login";
  </script>;
<?php }

$animaux = Animaux::getAllAnimaux();
$categorie = "";

include "App/templates/gestionAnimalView.php";