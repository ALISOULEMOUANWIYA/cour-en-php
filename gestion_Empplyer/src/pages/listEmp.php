<?php
       //------------------------------------------------------------
       spl_autoload_register(function($classeName){
           $path = "../model/";
           $extension = ".php";
           $fullPath = $path.$classeName.$extension;
           if(!file_exists($fullPath)){
              return(false);
           }else{
              include_once $fullPath;
            spl_autoload_register(function($classeNameGet){
               $Classpath = "../controller/";
               $Classextension = ".php";
               $ClassfullPath = $Classpath.$classeNameGet.$Classextension;
               if(!file_exists($ClassfullPath)){
                  return(false);
               }else{
                  include_once $ClassfullPath;
                  require_once "hederListe/headerListe.php";
               }
             });
           }
        });
           $DB = new ConnectionDB();
           $BDD = $DB->getConnexion();
           $int = 0;
           $getEmpl = new ClassGet("", $int, $BDD);
//           $BDD = null;
?>
<div class="wrapper">
   <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">Emp</a></div>
        <ul class="links">
          <li>
              <a href="../../index.php" >Accueille
                <i class="fa fa-home" aria-hidden="true"></i>
              </a>
            </li>
          <li>
              <a href="#">Gestion Employer
                <i class="fa fa-users" aria-hidden="true"></i>
              </a>
          </li> 
        </ul>
      </div>
    </nav>
  </div>
<br>
<div class="container">
        <br><br><br>
      <div class="row">
          <div class="col-sm-3 btn-group ">
            <button type="button" class="btn btn-primary boutonclasse"><a href="../../index.php">choix des Taches</a></button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split " data-toggle="dropdown">
                <span class="caret "></span>
            </button>
            <div class="dropdown-menu ">
               <a class="dropdown-item boutonclasse" href="../../index.php">ajouter un Employer</a>
               <a class="dropdown-item boutonclasse" href="../controller/SupressionTAble.php?suptABLE=suprimer">Suprimer le tableau Entiere</a>
            </div>
          </div>
          <div class="col-sm-5">
              <p class="text-center text-white ">Tableau des employes</p>
          </div>
      </div>            
      <br> 
      <?php if(sizeof($getEmpl->getDonnerObtenue())!==0){ ?> 
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th class="text-center">NOM</th>
            <th class="text-center">PRENOM</th>
            <th class="text-center">SERVICE</th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 0; foreach($getEmpl->getDonnerObtenue() as $emp){  $i++; ?>
          <tr>
            <td><?= $i; ?></td>
            <td class="text-center"><?=$emp["NomEmployer"]?></td>
            <td class="text-center"><?=$emp["PrenomEmployer"]?></td>
            <td class="text-center"><?=$emp["ServiceEmployer"]?></td>
            <td>
              <div class="btn-group">
                  <button type="button" class="btn btn-primary"><a class="dropdown-item" href="../controller/SupresionCompte.php?sup=<?= $emp["IdEmpl"]; ?>">Pour un</a></button>
                  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="../controller/SupresionCompte.php?sup=<?= $emp["IdEmpl"]; ?>">Suppression</a>
                    <a class="dropdown-item" href="../../index.php?mod=<?= $emp["IdEmpl"]; ?>">Modification</a>
                  </div>
                </div>
            </td>
          </tr>
          <?php 
            }
          ?>
        </tbody>
      </table>
          <?php 
            }
          ?>
</div> 
</body>
</html>
  <script src="../../webfonts/js/all.js" crossorigin="anonymous"></script>
  <script src="../../bootstrap5/js/jquery-3.3.1.min.js"></script>
  <script src="../../bootstrap5/js/popper.min.js"></script>
  <script src="../../bootstrap5/js/bootstrap.min.js"></script>