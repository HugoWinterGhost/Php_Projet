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
    switch ($animal['id_categorie']):
      case 1 :
        $categorie = "Chat";
        break;
      case 2 :
        $categorie = "Chien";
        break;
      case 3 :
        $categorie = "Poisson";
        break;
      case 4 :
        $categorie = "Reptile";
        break;
      default:
      $categorie = "";
      break;
    endswitch;
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

<a href="add" style="width: inherit; color: white;" class="btn btn-primary">Ajouter un Animal</button>

<?php require('./App/templates/head/footer.php'); ?>
</div>