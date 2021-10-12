<?php

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'admin') { ?>
  <script>
    location.href = "login";
  </script>;
<?php }

$animaux = Animaux::getAllAnimaux();
$users = User::getAllUsers();
$categorie = "";

if (isset($_POST['bouton'])) {
  $id = intval(substr($_POST['bouton'], -1));
  $role = 1;

  User::setUserToAdmin($role, $id);
  
  ?>

  <script>
    Swal.fire({
      title: "Succès!",
      icon: "success",
      text: "L'utilisateur à bien été passé en Administrateur",
    }).then(function () {
      window.location.href = "../gestion";
    });  
  </script>

<?php }

include "App/templates/gestionAnimalView.php";