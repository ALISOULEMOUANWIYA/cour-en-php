 <div class="row">
  <span class="h3">Listes des Joueurs</span>
  <span class="offset-8">
    <a href="index.php?view=add" class="btn btn-primary pull-right">Nouveau</a>
  </span>
</div>

<div class="row">
  <table class="table">
    <thead>
      <tr>
          <td>#</td>
          <td>prenom</td>
          <td>Nom</td>
          <td>Maillot</td>
          <td>Nom Club</td>
      </tr>
      </thead>
    <tbody>
      <?php $i = 0; foreach($clubs as $c) : $i++;?>
        <tr>
            <td><?=  $i; ?></td>
            <td><?= $c['prenom']?></td>
            <td><?= $c['nom']?></td>
            <td><?= $c['NumeroMaillot']?></td>
            <td><?= $c['nomClub']?></td> 
        </tr>
      <?php endforeach;?>
      </tbody>
  </table>
</div>