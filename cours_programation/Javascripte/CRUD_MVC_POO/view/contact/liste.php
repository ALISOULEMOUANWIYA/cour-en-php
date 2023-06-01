 <div class="row">
  <span class="h3">Listes des contacts</span>
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
          <td>Télèphone</td>
          <td>Action</td>
      </tr>
      </thead>
    <tbody>
      <?php $i = 0; foreach($contacts as $c) : $i++;?>
        <tr>
            <td><?=  $i; ?></td>
            <td><?= $c['prenom']?></td>
            <td><?= $c['nom']?></td>
            <td><?= $c['tel']?></td> 
            <td>
              <a href="index.php?view=ed&id=<?= $c['id']?>" class="btn btn-warning "><i class="fa fa-edit"></i></a>
              <a href="index.php?action=sup&id=<?= $c['id']?>" class="btn btn-danger "><i class="fa fa-trash"></i></a>
            </td>
        </tr>
      <?php endforeach;?>
      </tbody>
  </table>
</div>