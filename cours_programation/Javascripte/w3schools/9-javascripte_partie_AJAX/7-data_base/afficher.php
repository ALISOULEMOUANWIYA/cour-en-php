<?php   
require_once 'Persones.php';
    $variable = new Persones();
   if($variable->lister($_GET['q']) == true){ 
?>
<table>
  <thead>
      <tr>
        <th>ID joueur</th>
        <th>Prenom Joueur</th>
        <th>nom Joueur</th>
        <th>ÂGE Joueurt</th>
        <th>Maillot Joueurt</th>
        <th>Id club</th>
      </tr>
   </thead>
   <tbody id="myTable">
     <tr>
       <td><?= $variable->lister($_GET['q'])['idjoueur'] ?></td>
       <td><?= $variable->lister($_GET['q'])['prenom'] ?></td>
       <td><?= $variable->lister($_GET['q'])['nom'] ?></td>
       <td><?= $variable->lister($_GET['q'])['ageEntrer'] ?></td>
       <td><?= $variable->lister($_GET['q'])['NumeroMaillot']?></td>
       <td><?= $variable->lister($_GET['q'])['idclubf'] ?></td>
      </tr>
   </tbody>
</table>
<?php   
  }
?>