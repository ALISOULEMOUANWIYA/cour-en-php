<?php 
session_start();
    include_once "listeHeader/HeaderEspaceManbre.php";
    require_once '../models/Role_Compte.php'; 
    require_once '../models/traitemebtDonnerClasseAjouterCoffres.php';
    $coffresCpt = new Coffres();
//    $BDD->close();
   //--------------------------------------------------------------
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
    $i = 0; 
    foreach($coffresCpt->get_Cof() as $cof){  
        $i++;
    }
                   $coffreId = "";
            $coffredatedebut = "";
              $coffreDateFin = "";
           $coffrecotisation = "";
             $coffreAdherant = "";
              $coffreMontant = "";
             $coffreContacte = "";

            $valeurCours=0;
            if(isset($_GET['mod'])){
                foreach($coffresCpt->get_Cof() as $coffres){
                            $coffreId = $coffres['ID_Coffres'];
                     $coffredatedebut = $coffres['Date_Debut_Coffres'];
                       $coffreDateFin = $coffres['Date_fin_Coffres'];
                    $coffrecotisation = $coffres['Cotisation_Coffres'];
                      $coffreAdherant = $coffres['Adherant_Coffres'];
                       $coffreMontant = $coffres['Montant_Coffres'];
                      $coffreContacte = $coffres['Contancte_Coffres'];
                    $valeurCours =1;
                }
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
              <a href="../index.php" >Accueille
                <i class="fa fa-users" aria-hidden="true"></i>
              </a>
            </li>
          <?php if(strcmp(trim($_SESSION['IDFonctionGerant']), "Administrateur")==0){ ?>
          <li>
              <a href="EscpaceAdimin.php">Espace Admin
                <i class="fa fa-users" aria-hidden="true"></i>
              </a>
            </li>
            <?php } ?>
          <li>
            <a href="Coffres.php" class="">Coffres
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
              <li><a href="PageAdministrateur.php">Ajouter utilisateur</a></li>
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
               <a class="dropdown-item boutonclasse" href="outDossier/Login.php">Deconnecter</a>
               <a class="dropdown-item boutonclasse" href="#">Info Utilisateur</a>
          </div>
      </div>
    </nav>
  </div>
    <br>
 <div class="contenue">
    <div class="title"><?php if($messageErreur == ""){ ?>Ajout d'un coffre<?php }else{ echo $messageErreur;} ?></div>
    <div class="contante row">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Numéro</span>
              <?php  if($valeurCours > 0):?>
                <input type="hidden" value="<?php echo $coffreId; ?>" name="idCoff" >
                <input type="number" id="butt"  placeholder="<?php $i = $i+1; echo "coffres numero $i"; ?>" disabled>
             <?php  else: ?>
                <input type="number" id="butt" placeholder="<?php $i = $i+1; echo "coffres numero $i"; ?>" disabled>
             <?php  endif; ?>
          </div>
          <div class="input-box">
            <span class="details">Date debut</span>
            <input type="date" value="<?php echo $coffredatedebut; ?>" name="DateDebutCoffres" required>
          </div>
          <div class="input-box">
            <span class="details">Date fin</span>
            <input type="date" value="<?php echo $coffreDateFin; ?>" name="DateFinCoffres" required>
          </div>
          <div class="input-box">
            <span class="details">Contisation</span>
            <input type="number" min="1" value="<?php echo $coffrecotisation; ?>" placeholder="Entrez Une somme de cotisation " name="CotisationCoffres" required>
          </div>
          <div class="input-box">
            <span class="details">Nombre d'adhérants</span>
            <input type="number" min="1" value="<?php echo $coffreAdherant;?>" placeholder="Le nombre D'adhérants" name="nbrAdherant" required>
          </div>
          <div class="input-box">
            <span class="details">Le Montant</span>
            <input type="number" min="1" value="<?php echo $coffreMontant; ?>" placeholder="Le Montant" name="MontantCoffres" required>
          </div>
          <div class="input-box">
            <span class="details">Contacte</span>
            <input type="number" min="700000000" max="799999999" value="<?php echo $coffreContacte;?>" placeholder="Entrez un Contacte " name="ContacteCoffres" required>
          </div>
        </div>
        <div class="button">
            <?php  if($valeurCours > 0):?>
            <button type="submit" class="position" name="Modifier">Modifier</button>
            <?php  else: ?>
              <input type="submit" value="Enrigistrer">
            <?php  endif; ?>
        </div>
      </form>
    </div>
  </div>


<?php 
    $_SESSION['Incorecte']=$champVide;
    include_once "DossierFooter/FooterPage.php"; 
?>