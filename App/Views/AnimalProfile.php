<?php 
switch($bddAnimal["id_categorie"]){
    case(1):
        $newAnimal = new Chat($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"],
        $bddAnimal["compatibleChat"], $bddAnimal["compatibleChien"], $bddAnimal["compatibleEnfants"], $bddAnimal["booking"]);
        break;
    case(2):
        $newAnimal = new Chien($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"],
        $bddAnimal["compatibleChat"], $bddAnimal["compatibleChien"], $bddAnimal["compatibleEnfants"], $bddAnimal["booking"]);
        break;
    case(3):
        $newAnimal = new Poisson($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"], $bddAnimal["booking"]);
        break;
    case(4):
        $newAnimal = new Reptile($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"], $bddAnimal["booking"]);
        break;
    default:
        break;
}
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