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
//    echo $_SESSION['IdGerant']."<br>";
    //-----------------
        $_SESSION['IdCompt'] = $champVide;
        $_SESSION['PrenomCompt'] = $champVide;
        $_SESSION['NomCompt'] = $champVide;
        $_SESSION['AddressCompt'] = $champVide;
        $_SESSION['PassWord'] = $champVide;
        $_SESSION['ClesCmpt1'] = $champVide;
        $_SESSION['ClesCmpt2'] = $champVide;
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
        header("Location: PageInscription.php");
    }
}
    $compteCle1 = 0;
    $compteCle2 = 0;
    $generalecle = 0;
    $SoeillCompte = 0;
    $coffresCpt = new Coffres();
    $afficherCompte = new CompteUtilisateur($_SESSION['NomCompt'], $_SESSION['PassWord']);
//    $BDD->close();
//    var_dump($afficherCompte->get_Compte());

    foreach($afficherCompte->get_Compte() as $compte){
        
      if((int)$compte['cleCoffre1'] != 0){
          $SoeillCompte++;
          $compteCle1 = (int)$compte['cleCoffre1'];
      }
      if((int)$compte['cleCoffre2'] != 0 ){
          $SoeillCompte++;
          $compteCle2 = $compte['cleCoffre2'];
      }
    }
    if((int)$compteCle1 == 0 && (int)$compteCle2 == 0){
        $generalecle = $compteCle1= "cleCoffre1";
    }else if((int)$compteCle2 == 0){
        $generalecle = $compteCle2= "cleCoffre2";
    }

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
          <?php $i = 0; foreach($coffresCpt->get_Cof() as $cof){  $i++; ?>
          <div class="card Contenue_Cadres_liste">
            <div class="card-body text-center Corps_Contenue">
              <div class="card-body card-text cadre_Nombre_Coffres">
                <h3 class="card-text text-center ">Coffre n°<?= $i;  ?> </h3>  
              </div>
              
              <ul>
                  <li>Date de Début<a> : </a><?= $cof['Date_Debut_Coffres'];  ?></li>
                  <li>Date de la fin<a> : </a><?= $cof['Date_fin_Coffres'];  ?></li>
                  <li>Duré <a> :</a><?= $cof['Duree_Coffres'];  ?></li>
                  <li>Cotisation<a> : </a><?= $cof['Cotisation_Coffres'];  ?></li>
                  <li>Adhérants<a> : </a><?= $cof['Adherant_Coffres'];  ?></li>
                  <li>Montant<a> : </a><?= $cof['Montant_Coffres'];  ?></li>
                  <li>Contancte tresorier<a> : </a><?= $cof['Contancte_Coffres'];  ?></li>
                                        <hr>
                  <?php if(strcmp(trim($_SESSION['IDFonctionGerant']), "Administrateur") ==0 || strcmp(trim($_SESSION['IDFonctionGerant']), "Trésorier")==0){ ?>
                      <button id="butt">
                          <?php echo "vous êtes un ".$_SESSION['IDFonctionGerant']; ?>
                      </button>
                  <?php } else{?>
                      <button <?php if( (int)$SoeillCompte == 2){ ?> id="butt" <?php } ?>>
                          <?php if((int)$compteCle1 == (int)$cof['ID_Coffres']){ ?>
                            Vous avez deja ajouter ça
                          <?php }else{ if((int)$compteCle2 == (int)$cof['ID_Coffres']){ ?>
                            Soeille attaint
                          <?php }  else{ ?>
                            <a href="../models/ajoutercof.php?subject=<?= $cof['ID_Coffres']; ?>&cle=<?= $generalecle;?>&idCmpt=<?= $_SESSION['IdCompt'];?>" class="text-center">Vous pouvez ajouter</a>
                          <?php }}?>
                      </button>
                  <?php }?>
              </ul>
            </div>
          </div>
<!--            -->
            <?php  } ?>
      </div>
    </div>
<?php 
    $_SESSION['Incorecte']=$champVide;
    include_once "../footer.php"; 
?>