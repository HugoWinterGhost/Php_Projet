<div class="content">
  <div class="page_connection">
      <div class="container">
          <div class="formulaireconnect">
              <div class="ajout">
                <h1 class="form-title">Ajouter un Animal</h1>
                <form class="addForm" id="myform" method="POST" enctype="multipart/form-data">
                    <input name="id_categorie" placeholder="Id Catégorie" type="text" value=""/>
                    <input name="nom" placeholder="Nom" type="text" value=""/>
                    <input name="couleur" placeholder="Couleur" type="text" value=""/>
                    <input name="age" placeholder="Age" type="text" value=""/>
                    <input name="race" placeholder="Race" type="text" value=""/>
                    <input name="description" placeholder="Description" type="text" value=""/>
                    <input class="btn-primary" name="bouton" type="submit" id="ajouter" value="Enregistrer"
                      onclick="document.forms['myform'].submit();"/>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require('./App/templates/head/footer.php'); ?>
</div>