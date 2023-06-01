<div class="card">
    <div class="card-header">
        <span>Nouveau joueur</span>
        <span class="offset-8">
           <a href="index.php" class="btn btn-success">Liste des joueur</a>
        </span>
    </div>
    <div class="card-body">
        <form action="index.php?action=importer" method="post" > 
          <div class="form-group">
            <label for="">Prénom</label>
            <input type="text" class="form-control" name="prenom" required>
          </div>
          <div class="form-group">
            <label for="">nom</label>
            <input type="text" class="form-control" name="nom" required>
          </div>
          <div class="form-group">
            <label for="">age</label>
            <input type="number" min="18" class="form-control" name="age" required>
          </div>
          <div class="form-group">
            <label for="">Numero Maillot</label>
            <input type="number" min="1" class="form-control" name="numeroMaillot" required>
          </div>
          <div class="form-group">
            <span>Genre</span>
            <select class="form-group" name="idclubs" id="idclub" required>
                <option value="">Interclassement Clube</option>
                <option value=""></option>
                <?php  foreach($club as $cl){ ?>
                    <option value="<?php echo $cl["idClube"]; ?>"> <?php echo $cl["nomClub"]; ?> </option>
                <?php }?>
            </select>
          </div>
          <div class="row">
            <input type="submit" name="add" class="btn btn-primary" value="Enrigistrer">
          </div>
        </form>
    </div>
</div>