<div class="card">
    <div class="card-header">
        <span>Nouveau Contact</span>
        <span class="offset-8">
           <a href="index.php" class="btn btn-success">Liste des conntacts</a>
        </span>
    </div>
    <div class="card-body">
        <form action="index.php?action=importer" method="post"> 
          <div class="form-group">
            <label for="">Prénom</label>
            <input type="text" class="form-control" name="prenom">
          </div>
          <div class="form-group">
            <label for="">nom</label>
            <input type="text" class="form-control" name="nom">
          </div>
          <div class="form-group">
            <label for="">Télèphone</label>
            <input type="text" class="form-control" name="tel">
          </div>
          <div class="row">
            <input type="submit" name="add" class="btn btn-primary" value="Enrigistrer">
          </div>
        </form>
    </div>
</div>