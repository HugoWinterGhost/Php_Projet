<?php

class Animaux extends Bdd {

  public static function getAllAnimaux() {
    return Bdd::getInstance()->conn->query('SELECT animaux.id, animaux.id_categorie, animaux.nom, animaux.couleur, animaux.age, animaux.race, animaux.description, 
      animaux.compatibleChat, animaux.compatibleChien, animaux.compatibleEnfants, animaux.booking
      FROM animaux INNER JOIN categories ON categories.id = animaux.id_categorie')->fetchAll();
  }

  public static function getAnimal(int $idAnimal, ?string $fetchMode = null) {
    $req = sprintf('SELECT animaux.id, animaux.id_categorie, animaux.nom, animaux.couleur, animaux.age, animaux.race, animaux.description, 
      animaux.compatibleChat, animaux.compatibleChien, animaux.compatibleEnfants, animaux.booking FROM animaux 
      INNER JOIN categories ON categories.id = animaux.id_categorie
      WHERE animaux.id = %d', $idAnimal);
    $return = Bdd::getInstance()->conn->query($req);
    if(isset($fetchMode)){
    return $return->setFetchMode(\PDO::FETCH_CLASS, $fetchMode);
    }else{
      return $return->fetch();
    }
  }
  
  public static function getAnimauxByCategorie(string $categorieName) {
    $req = sprintf("SELECT animaux.id, animaux.id_categorie, animaux.nom, animaux.couleur, animaux.age, animaux.race, animaux.description, 
    animaux.compatibleChat, animaux.compatibleChien, animaux.compatibleEnfants, animaux.booking FROM animaux
      INNER JOIN categories ON categories.id = animaux.id_categorie
      WHERE categories.nom = '%s'", $categorieName);
    return Bdd::getInstance()->conn->query($req)->fetchAll();
  }

  public static function createUser($nom, $prenom, $mail, $password) {
    $sql = "INSERT INTO `users` (nom, prenom, mail, password) VALUES (?, ?, ?, ?)";
    $stmt = Bdd::getInstance()->conn->prepare($sql);
    $stmt->execute([
      $nom,
      $prenom,
      $mail,
      $password
    ]);
  }

  public static function bookingAnimal($booking, $id) {
    $sql = "UPDATE `animaux` SET `booking` = ? WHERE `id` = ?";
    $stmt = Bdd::getInstance()->conn->prepare($sql);
    $stmt->execute([
      $booking,
      $id
    ]);
  }
}
