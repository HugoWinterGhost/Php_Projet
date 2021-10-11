<div class="content">
  <div class="contenupage">
      <div class="container">
          <div class="row">
              <div>
                  <form class="register" action="register" id="myForm" method="POST"
                    enctype="multipart/form-data">
                      <h1 class="form-title">Inscription</h1>
                      <input name="nom" type="text" value="" size="30" placeholder="Nom"/>
                      <input name="prenom" type="text" value="" size="30" placeholder="Prénom"/>
                      <input name="email" type="text" value="" size="30" placeholder="Adresse Mail"/>
                      <input name="password" type="password" value="" size="30" placeholder="Mot de Passe"/>                     
                      <input class="btn-primary" name="bouton" type="submit" id="sinscrire" value="Valider"
                        onclick="document.forms['myForm'].submit();"/>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <?php require('./App/templates/head/footer.php'); ?>
</div>
