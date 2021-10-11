<?php

if ((isset($_REQUEST['email'])) && (trim($_REQUEST['email']) !== '') && (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))) {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> L'email n'est pas au bon format";
  } else {
    $erreur = "L'email n'est pas au bon format";
  }
}

if (!isset($_REQUEST['email']) || trim($_REQUEST['email']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> L'email est manquant";
  } else {
    $erreur = "L'email est manquant";
  }
}

if (!isset($_REQUEST['password']) || trim($_REQUEST['password']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> Le password est manquant";
  } else {
    $erreur = "Le password est manquant";
  }
}

if (!isset($erreur) && isset($_POST['bouton'])) {
  $resultQuery = Bdd::getInstance()->conn->query('SELECT * FROM users WHERE mail LIKE "' . $_REQUEST['email'] . '"');
  $res = "";
  foreach ($resultQuery as $value) {
    $res = $value['password'];
  }

  $verify = password_verify($_REQUEST['password'], $res);
  if ($verify === false) {
    if (isset($erreur)) {
      $erreur = $erreur . " <br/> Couple adresse mail/mot de passe erroné";
    } else {
      $erreur = "Couple adresse mail/mot de passe erroné";
    }
  }

  if ($verify === true) {
    $result = Bdd::getInstance()->conn->query('SELECT * FROM `users` WHERE `mail` LIKE "' . $_REQUEST['email'] . '" AND `password` LIKE "' . $res . '"');

    foreach ($result as $row) {
      $_SESSION['user'] = $row['id'];
    }
    
    if (isset($_SESSION['user'])) { ?>
      <script>
        Swal.fire({
          title: "Succès!",
          icon: "success",
          text: "Connexion Réussi",
        }).then(function () {
          window.location.href = "index";
        });
      </script>  
    <?php }
  }
}

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

include "App/templates/loginView.php";
