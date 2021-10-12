<?php 

$newAnimal = match(strval($bddAnimal['id_categorie'])) {
  '1' => new Chat($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"], $bddAnimal["compatibleChat"], $bddAnimal["compatibleChien"], $bddAnimal["compatibleEnfants"], $bddAnimal["booking"]),
  '2' => new Chien($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"], $bddAnimal["compatibleChat"], $bddAnimal["compatibleChien"], $bddAnimal["compatibleEnfants"], $bddAnimal["booking"]),
  '3' => new Poisson($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"], $bddAnimal["booking"]),
  '4' => new Reptile($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"], $bddAnimal["booking"]),
  default => '',
};

$createProfile = new AnimalContent();
$createProfile->createProfile($newAnimal);


if (isset($_POST['bouton'])) {
  $id = $bddAnimal["id"];
  $booking = 1;

  Animaux::bookingAnimal($booking, $id);
  
  ?>

  <script>
    Swal.fire({
      title: "Succès!",
      icon: "success",
      text: "Réservation Terminée",
    }).then(function () {
      window.location.href = "../index";
    });  
  </script>

<?php }

include "App/templates/animalProfileView.php";