<div class="content">

<h2>Gestion des Animaux</h2>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Nom</th>
      <th scope="col">Couleur</th>
      <th scope="col">Age</th>
      <th scope="col">Race</th>
      <th scope="col">Description</th>
      <th scope="col">Réservation</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($animaux as $animal) { 
    $categorie = match(strval($animal['id_categorie'])) {
      '1' => 'Chat',
      '2' => 'Chien',
      '3' => 'Poisson',
      '4' => 'Reptile',
      default => '',
    };
    ?>
    <tr>
      <th scope="row"><?= $animal['id'] ?></th>
      <td><?= $categorie ?></td>
      <td><?= $animal['nom'] ?></td>
      <td><?= $animal['couleur'] ?></td>
      <td><?= $animal['age'] ?></td>
      <td><?= $animal['race'] ?></td>
      <td><?= $animal['description'] ?></td>
      <td>
        <?php if ($animal['booking']) { 
          echo "Réservé";
        } else {
          echo "Disponible";
        } 
        ?>
      </td>
      <td>
        <a href=<?= "/animal/" . $animal['id'] ?> >Voir</a>
        <a href=<?= "/edit/" . $animal['id'] ?> >Modifier</a>
        <a href=<?= "/delete/" . $animal['id'] ?> >Supprimer</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<a href="add" style="width: inherit; color: white; margin-bottom: 30px;" class="btn btn-primary">Ajouter un Animal</a>

<h2>Liste des Utilisateurs</h2>

<table class="table" style="margin-bottom: 100px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Mail</th>
      <th scope="col">Role</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($users as $user) { ?>
    <tr>
      <th scope="row"><?= $user['id'] ?></th>
      <td><?= $user['nom'] ?></td>
      <td><?= $user['prenom'] ?></td>
      <td><?= $user['mail'] ?></td>
      <td>
        <?php if ($user['role'] == 0) { 
          echo "Utilisateur";
        } else if ($user['role'] == 1) {
          echo "Administrateur";
        } 
        ?>
      </td>
      <td>
        <?php if ($user['role'] == 0) { ?>
          <form id="myform" method="POST" enctype="multipart/form-data">
            <input style="width: inherit;" class="btn btn-primary" name="bouton" type="submit" value="Passer en Administrateur l'utilisateur <?= $user['id'] ?>"
              onclick="document.forms['myform'].submit();"/>
          </form>
        <?php } else { ?>
          Aucune action n'est permise pour cet utilisateur
        <?php } ?>
    </tr>
    <?php } ?>
  </tbody>
</table>



<?php require('./App/templates/head/footer.php'); ?>
</div>