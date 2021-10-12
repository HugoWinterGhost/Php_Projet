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

  public static function createUser($nom, $prenom, $mail, $password, $role) {
    $sql = "INSERT INTO `users` (nom, prenom, mail, password, role) VALUES (?, ?, ?, ?, ?)";
    $stmt = Bdd::getInstance()->conn->prepare($sql);
    $stmt->execute([
      $nom,
      $prenom,
      $mail,
      $password,
      $role
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

  public static function addAnimal($id_categorie, $nom, $couleur, $age, $race, $description, $booking) {
    $sql = "INSERT INTO `animaux` (id_categorie, nom, couleur, age, race, description, booking) 
      VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = Bdd::getInstance()->conn->prepare($sql);
    $stmt->execute([
      $id_categorie, 
      $nom, 
      $couleur, 
      $age, 
      $race, 
      $description, 
      $booking
    ]);
  }

  public static function editAnimal($id_categorie, $nom, $couleur, $age, $race, $description, $booking, $id) {
    $sql = "UPDATE `animaux` SET `id_categorie` = ?, `nom` = ?, `couleur` = ?, `age` = ?,
      `race` = ?, `description` = ?, `booking` = ?  WHERE `id` = ?";
    $stmt = Bdd::getInstance()->conn->prepare($sql);
    $stmt->execute([
      $id_categorie, 
      $nom, 
      $couleur, 
      $age, 
      $race, 
      $description, 
      $booking,
      $id
    ]);
  }

  public static function deleteAnimal($id) {
    $sql = "DELETE FROM `animaux` WHERE `id` = ?";
    $stmt = Bdd::getInstance()->conn->prepare($sql);
    $stmt->execute([
      $id
    ]);
  }
}
