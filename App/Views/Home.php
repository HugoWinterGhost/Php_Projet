<?php 
if (isset($bddAnimauxByCategorie)){
  $bddAnimaux = $bddAnimauxByCategorie;
}

if (isset($_POST['bouton'])) {
  $bddAnimaux = array_filter($bddAnimaux, function($key) {
    return $key["booking"] == false;
  });
}

foreach ($bddAnimaux as $animal) {
  
  $newAnimal = match(strval($animal['id_categorie'])) {
    '1' => new Chat($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"], $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"], $animal["booking"]),
    '2' => new Chien($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"], $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"], $animal["booking"]),
    '3' => new Poisson($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"], $animal["booking"]),
    '4' => new Reptile($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"], $animal["booking"]),
    default => '',
  };

  $createCard = new AnimalContent();
  $createCard->createCard($newAnimal);
}


include "App/templates/indexView.php";