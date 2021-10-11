<form class="profile-content" id="myform" method="POST" enctype="multipart/form-data">
  <?php if (isset($_SESSION['user'])) { ?> 
    <?php if ($newAnimal->getBooking() == true) { ?>
      <button class="btn btn-primary" onclick="alreadyBook()">Réverver</button>
    <?php } else { ?>
      <input style="width: inherit;" class="btn btn-primary" name="bouton" type="submit" value="Réverver"
        onclick="document.forms['myform'].submit();"/>
    <?php } ?>
  <?php } else if (!isset($_SESSION['user'])) { ?>
    <button class="btn btn-primary" onclick="bookError()">Réverver</button>
  <?php } ?>

  <?php require('./App/templates/head/footer.php'); ?>
</div>

<script>

  function alreadyBook(){
    Swal.fire({
      title: "Erreur",
      icon: "error",
      text: "Cet animal à déjà été réservé",
    }).then(function () {
      window.location.href = "../index";
    });  
  }

  function bookError(){
    Swal.fire({
      title: "Erreur",
      icon: "error",
      text: "Vous devez vous connecter",
    }).then(function () {
      window.location.href = "../login";
    });  
  }

  function bookAnimal(){
    Swal.fire({
      title: "Succès!",
      icon: "success",
      text: "Réservation Terminée",
    }).then(function () {
      window.location.href = "../index";
    });  
  }
</script>