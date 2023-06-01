<?php 
session_start();
    include_once "listeHeader/HeaderCoffre.php";
    require_once '../models/Role_Compte.php';
//---------------------------------------------
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
}
    $compteCle1 = 0;
    $compteCle2 = 0;
    $generalecle = 0;
    $SoeillCompte = 0;
    $valeurCours=0;
    $coffresCpt = new Coffresinfo((int)$_GET['info']);

?>
<div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="../index.php">GL.L2</a></div>
        <ul class="links">
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
             <a href="outDossier/Login.php"><?php if((int)$_SESSION['IdCompt'] > 0){ echo $_SESSION['NomCompt']; }else{ if((int)$_SESSION['IdGerant'] > 0){ echo $_SESSION['NomGerant']; } } ?></a>
          </button>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split groupBoutonBou" data-toggle="dropdown">
            <span class="caret"></span>
          </button>
          <div class="dropdown-menu ">
               <a class="dropdown-item boutonclasse" href="outDossier/Login.php">Deconnecter</a>
               <a class="dropdown-item boutonclasse" href="#">Info Utilisateur</a>
          </div>
      </div>
    </nav>
  </div>
    <br>
    <div class="container">
        <br><br><br><h3 class="text-center Description_Coffres">Liste des Coffres Disponibles</h3><br>
        <div class="card-columns Cadre_Listes">
          <div class="card Contenue_Cadres_liste">
            <div class="card-body text-center Corps_Contenue">
              <div class="card-body card-text cadre_Nombre_Coffres">
                <h3 class="card-text text-center ">Coffre n°<?= $coffresCpt->get_Cof()["ID_Coffres"];  ?> </h3>  
              </div>
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
<?php 
    $_SESSION['Incorecte']=$champVide;
    include_once "../footer.php"; 
?>