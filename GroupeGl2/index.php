<?php 
session_start();
    include_once "header.php";
    require_once 'models/Role_Compte.php';
    $coffresCpt = new Coffres();

$champVide = "";
$prenomUtil = $NomUtil = $AddressEmailUtil = $PasseWordUtil = "";
$CleCofres1 = $CleCofres2 = $IdCompte = 0;
if((int)$_SESSION['IdGerant'] > 0){
    $_SESSION['IdGerant'];
    $_SESSION['PrenomGerant'];
    $_SESSION['NomGerant'];
    $_SESSION['AddressGerant'];
    $_SESSION['DateGerant'];
    $_SESSION['GenreGerant'];
    $_SESSION['numeroGerant'];
    $_SESSION['AddreLocalGerant'];   
    $_SESSION['IDFonctionGerant'];   
    $_SESSION['PassWordGerant'];   
    $_SESSION['CodeIdentifGerant'];   
    $_SESSION['DateInscriGerant'];   
    $_SESSION['MatriculeGerant'];   
    $_SESSION['AgeGerant']; 
//    echo $_SESSION['IdGerant']."<br>";
    //-----------------
        $_SESSION['IdCompt'] = $champVide;
        $_SESSION['PrenomCompt'] = $champVide;
        $_SESSION['NomCompt'] = $champVide;
        $_SESSION['AddressCompt'] = $champVide;
        $_SESSION['PassWord'] = $champVide;
        $_SESSION['ClesCmpt1'] = $champVide;
        $_SESSION['ClesCmpt2'] = $champVide;
//    var_dump($_SESSION['IDFonctionGerant']);
}else{
    if((int)$_SESSION['IdCompt'] > 0){
        $_SESSION['IdCompt'];
        $_SESSION['PrenomCompt'];
        $_SESSION['NomCompt'];
        $_SESSION['AddressCompt'];
        $_SESSION['PassWord'];
        $_SESSION['ClesCmpt1'];
        $_SESSION['ClesCmpt2'];
//        echo $_SESSION['IdCompt']."<br>";
        //---------------------
    $_SESSION['IdGerant'] = $champVide;
    $_SESSION['PrenomGerant'] = $champVide;
    $_SESSION['NomGerant'] = $champVide;
    $_SESSION['AddressGerant'] = $champVide;
    $_SESSION['DateGerant'] = $champVide;
    $_SESSION['GenreGerant'] = $champVide;
    $_SESSION['numeroGerant'] = $champVide;
    $_SESSION['AddreLocalGerant'] = $champVide;   
    $_SESSION['IDFonctionGerant'] = $champVide;   
    $_SESSION['PassWordGerant'] = $champVide;   
    $_SESSION['CodeIdentifGerant'] = $champVide;   
    $_SESSION['DateInscriGerant'] = $champVide;   
    $_SESSION['MatriculeGerant'] = $champVide;   
    $_SESSION['AgeGerant'] = $champVide;
    }else{
        $_SESSION['Incorecte']=$champVide;
        header("Location: pages/Coffres.php");
    }
}
?>
<div class="wrapper">
   <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">GL.L2</a></div>
        <ul class="links">
          <li>
              <a href="#" >Accueille
                <i class="fa fa-users" aria-hidden="true"></i>
              </a>
            </li>
          <?php if(strcmp(trim($_SESSION['IDFonctionGerant']), "Administrateur")==0){ ?>
          <li>
              <a href="pages/EscpaceAdimin.php">Espace Admin
                <i class="fa fa-users" aria-hidden="true"></i>
              </a>
            </li>
            <?php } ?>
          <li>
            <a href="pages/Coffres.php" class="">Coffres
               <i class="fa fa-archive" aria-hidden="true"></i>  
            </a>
          </li>                                      
         <?php if(strcmp(trim($_SESSION['IDFonctionGerant']), "Administrateur")==0 || strcmp(trim($_SESSION['IDFonctionGerant']),"Trésorier")==0){  ?>
          <li>
            <a href="#" class="desktop-link">Disponibles
            </a>
            <label for="show-services">Disponibles
            </label>
            <input type="checkbox" id="show-services">
            <ul>
              <?php if(strcmp(trim($_SESSION['IDFonctionGerant']), "Administrateur")==0){ ?>
              <li><a href="pages/PageAdministrateur.php">Ajouter utilisateur</a></li>
              <?php } ?>
              <li>
                <a href="#" class="desktop-link">Autre disponibiliter</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Liste Administrateur et trésorière</a></li>
                  <li><a href="#">Liste visiteur </a></li>
                </ul>
              </li>
            </ul>
          </li>
          <?php } ?>
          <li>
              <a href="#">infos Page
               <i class="fa fa-hdd-o" aria-hidden="true"></i>
              </a>
          </li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Chercher un Utilisateur..." required>
        <button type="submit" class="go-icon"><i class="fas fa-search"></i></button>
      </form>
      <div class="btn-group groupBouton">
         <button type="button" class="btn btn-primary boutonclasse">
             <a href="pages/outDossier/Login.php"><?php if((int)$_SESSION['IdCompt'] > 0){ echo $_SESSION['NomCompt']; }else{ if((int)$_SESSION['IdGerant'] > 0){ echo $_SESSION['NomGerant']; } } ?></a>
          </button>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split groupBoutonBou" data-toggle="dropdown">
            <span class="caret"></span>
          </button>
          <div class="dropdown-menu ">
               <a class="dropdown-item boutonclasse" href="pages/outDossier/Login.php">Deconnecter</a>
               <a class="dropdown-item boutonclasse" href="#">Info Utilisateur</a>
          </div>
      </div>
    </nav>
  </div>
    <br>
    <div class="container">
    <br><br><br>
      <div class="row">
          <?php if(strcmp(trim($_SESSION['IDFonctionGerant']), "Administrateur")==0){ ?>
          <div class="col-sm-3 btn-group ">
            <button type="button" class="btn btn-primary boutonclasse"><a href="pages/Coffres.php">choix des Taches</a></button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split " data-toggle="dropdown">
                <span class="caret "></span>
            </button>
            <div class="dropdown-menu ">
                <a class="dropdown-item boutonclasse" href="pages/EscpaceAdimin.php">ajouter un coffre</a>
               <a class="dropdown-item boutonclasse" href="models/SupressionTable.php?suptABLE=suprimer">Suprimer le tableau Entiere</a>
            </div>
          </div>
          <?php }?>
          <div class="col-sm-5">
              <p class="text-center text-white ">Tableau des Coffres</p>
              <input class="form-control" id="myInput" type="text" placeholder="Search..">
          </div>
          <br>
      </div>            
      <br> 
      <?php  if(sizeof($coffresCpt->get_Cof()) != 0){ ?> 
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>N°</th>
            <th>Date de debut</th>
            <th>Durée</th>
            <th>Nbr d'adherant</th>
            <th>Montant</th>
            <?php if(strcmp(trim($_SESSION['IDFonctionGerant']), "Administrateur")==0){  ?><th>Action</th><?php }?>
          </tr>
        </thead>
        <tbody id="myTable">
        <?php $i = 0; foreach($coffresCpt->get_Cof() as $cof){  $i++; ?>
          <tr>
            <td><?= $i; ?></td>
            <td><?= $cof['Date_Debut_Coffres'];  ?></td>
            <td><?= $cof['Duree_Coffres'];  ?></td>
            <td><?= $cof['Adherant_Coffres'];  ?></td>
            <td><?= $cof['Montant_Coffres'];  ?></td>
            <?php if(strcmp(trim($_SESSION['IDFonctionGerant']), "Administrateur")==0){ ?>
            <td>
              <div class="btn-group">
                  <button type="button" class="btn btn-primary">Pour un</button>
                  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="models/SuprimerCoffres.php?sup=<?= $cof["ID_Coffres"]; ?>">Suppression</a>
                    <a class="dropdown-item" href="pages/EscpaceAdimin.php?mod=<?= $cof["ID_Coffres"]; ?>">Modification</a>
                  </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-info" id="IDE=<?= $cof["ID_Coffres"]; ?>" aria-hidden="true"></i></button>
            </td>
            <?php }?>
          </tr>
          <?php 
            }
          ?>
        </tbody>
      </table>
          <?php 
            }
          ?>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <?php $coffresCpt = new Coffresinfo(1); ?>

      <!-- Modal Header -->
      <div class="modal-header">
      <h3 class="card-text text-center ">Coffre n°<?= $coffresCpt->get_Cof()["ID_Coffres"];  ?> </h3> 
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="card-deck">
              <div class="card bg-primary">
                <div class="card-body text-center">
                      <div class="card-body text-center Corps_Contenue">
                          <ul>
                              <li>Date de Début<a> : </a><?= $coffresCpt->get_Cof()['Date_Debut_Coffres'];  ?></li>
                              <li>Date de la fin<a> : </a><?= $coffresCpt->get_Cof()['Date_fin_Coffres'];  ?></li>
                              <li>Duré <a> :</a><?= $coffresCpt->get_Cof()['Duree_Coffres'];  ?></li>
                              <li>Cotisation<a> : </a><?= $coffresCpt->get_Cof()['Cotisation_Coffres'];  ?></li>
                              <li>Adhérants<a> : </a><?= $coffresCpt->get_Cof()['Adherant_Coffres'];  ?></li>
                              <li>Montant<a> : </a><?= $coffresCpt->get_Cof()['Montant_Coffres'];  ?></li>
                              <li>Contancte tresorier<a> : </a><?= $coffresCpt->get_Cof()['Contancte_Coffres'];  ?></li>

                          </ul>
                      </div>
                </div>
              </div>
          </div>
        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>          
<?php
    $_SESSION['Incorecte']=$champVide;
    include_once "footer.php"; 
?>
