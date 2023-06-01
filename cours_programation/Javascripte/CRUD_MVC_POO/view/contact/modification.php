<div class="card">
    <div class="card-header">
        <span>modifier Contact</span>
        <span class="offset-8">
           <a href="index.php" class="btn btn-warning">Liste des conntacts</a>
        </span>
    </div>
    <div class="card-body">
        <form action="index.php?action=importerModif" method="post">
          <input type="hidden" name="id" value="<?= $resultat['id']?>">
          <div class="form-group">
            <label for="">Prénom</label>
            <input type="text" class="form-control" name="prenom" value="<?= $resultat['prenom']?>" required>
          </div>
          <div class="form-group">
            <label for="">nom</label>
            <input type="text" class="form-control" name="nom" value="<?= $resultat['nom']?>" required>
          </div>
          <div class="form-group">
            <label for="">Télèphone</label>
            <input type="text" class="form-control" name="tel" value="<?= $resultat['tel']?>" required>
          </div>
          <div class="row">
            <input type="submit" name="mod" class="btn btn-primary" value="Modifier">
          </div>
        </form>
    </div>
</div>