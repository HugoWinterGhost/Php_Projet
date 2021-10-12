<?php

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'admin') { ?>
  <script>
    location.href = "login";
  </script>;
<?php }

if (!isset($_REQUEST['id_categorie']) || trim($_REQUEST['id_categorie']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> L'id categorie est manquant";
  } else {
    $erreur = "L'id categorie est manquant";
  }
}

if (!isset($_REQUEST['nom']) || trim($_REQUEST['nom']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> Le nom est manquant";
  } else {
    $erreur = "Le nom est manquant";
  }
}

if (!isset($_REQUEST['couleur']) || trim($_REQUEST['couleur']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> La couleur est manquante";
  } else {
    $erreur = "La couleur est manquante";
  }
}

if (!isset($_REQUEST['age']) || trim($_REQUEST['age']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> L'age est manquant";
  } else {
    $erreur = "L'age est manquant";
  }
}

if (!isset($_REQUEST['race']) || trim($_REQUEST['race']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> La race est manquante";
  } else {
    $erreur = "La race est manquante";
  }
}

if (!isset($_REQUEST['description']) || trim($_REQUEST['description']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> La description est manquante";
  } else {
    $erreur = "La description est manquante";
  }
}

if (!isset($erreur) && isset($_POST['bouton'])) {
  $id_categorie = $_POST["id_categorie"];
  $nom = $_POST["nom"];
  $couleur = $_POST["couleur"];
  $age = $_POST["age"];
  $race = $_POST["race"];
  $description = $_POST["description"];
  $booking = 0;
  $id = $bddAnimal["id"];

  Animaux::editAnimal($id_categorie, $nom, $couleur, $age, $race, $description, $booking, $id);
  
  ?>

  <script>
    Swal.fire({
      title: "Succès!",
      icon: "success",
      text: "L'animal à bien été Modifié",
    }).then(function () {
      window.location.href = "../gestion";
    });  
  </script>

<?php }

if (isset($_POST['bouton']) && isset($erreur)) {
  echo '
    <script>
      Swal.fire({
        icon: "error",
        title: "Erreur",
        html: " ' . $erreur . ' ",
      });
    </script>';
}

include "App/templates/editAnimalView.php";