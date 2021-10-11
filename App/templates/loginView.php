<div class="content">
  <div class="page_connection">
      <div class="container">
          <div class="formulaireconnect">
              <div class="connexion">
                <h1 class="form-title">Se Connecter</h1>
                <form class="logform" action="login" id="myform" method="POST" enctype="multipart/form-data">
                    <input name="email" placeholder="Adresse Mail" type="text" value="" size="30"/>
                    <input name="password" placeholder="Mot de Passe" type="password" value="" size="30"/>
                    <input class="btn-primary" name="bouton" type="submit" id="seconnecter" value="Connexion"
                      onclick="document.forms['myform'].submit();"/>
                </form>
              </div>
          </div>
      </div>
  </div>

  <?php require('./App/templates/head/footer.php'); ?>
</div>
