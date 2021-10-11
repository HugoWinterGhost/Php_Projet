<?php 
if (isset($bddAnimauxByCategorie)){
  $bddAnimaux = $bddAnimauxByCategorie;
}

foreach ($bddAnimaux as $animal) {
  switch($animal["id_categorie"]){
    case(1):
      $newAnimal = new Chat($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"],
      $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"], $animal["booking"]);
      break;
    case(2):
      $newAnimal = new Chien($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"],
      $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"], $animal["booking"]);
      break;
    case(3):
      $newAnimal = new Poisson($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"], $animal["booking"]);
      break;
    case(4):
      $newAnimal = new Reptile($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"], $animal["booking"]);
      break;
    default:
      break;
  }
  $createCard = new AnimalContent();
  $createCard->createCard($newAnimal);
}

include "App/templates/indexView.php";