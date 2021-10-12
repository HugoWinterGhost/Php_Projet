<?php

class User extends Bdd {

  public static function getAllUsers() {
    return Bdd::getInstance()->conn->query('SELECT * FROM `users`')->fetchAll();
  }

  public static function setUserToAdmin($role, $id) {
    $sql = "UPDATE `users` SET `role` = ? WHERE `id` = ?";
    $stmt = Bdd::getInstance()->conn->prepare($sql);
    $stmt->execute([
      $role,
      $id
    ]);
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
}