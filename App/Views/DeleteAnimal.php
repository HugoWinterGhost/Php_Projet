<?php

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'admin') { ?>
  <script>
    location.href = "login";
  </script>;
<?php }

$id = $bddAnimal["id"];

Animaux::deleteAnimal($id);

?>

<script>
  Swal.fire({
    title: "Succès!",
    icon: "success",
    text: "L'animal à bien été Supprimé",
  }).then(function () {
    window.location.href = "../gestion";
  });  
</script>
