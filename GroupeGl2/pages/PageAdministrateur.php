<?php 
session_start();
    include_once "listeHeader/HeaderPageAdmin.php"; 
    require_once '../models/Role_Compte.php';
    $RoleUtilisateur = new Role();
    $GenreUtilisateur = new Genreutilisateur();
    $AddressPr = new AddressP();
    require_once '../models/traitementDonnerClasse.php';
    //-------------------------------------------------
//        $BDD->close();
    //-------------------------------------------------
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
 <div class="contenue">
    <div class="title">Ajout d'un Compte Utilisateur</div>
    <div class="contante row">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nom</span>
            <input type="text" placeholder="Nom Utilisateur" name="nomUtilisateur" required>
          </div>
          <div class="input-box">
            <span class="details">Prenom</span>
            <input type="text" placeholder="Prenom Ulisateur" name="prenomUtilisateu" required>
          </div>
          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="email" placeholder="Entrez une durée" name="EmailUtilisateur" required>
          </div>
          <div class="input-box">
            <span class="details">Naissance</span>
            <input type="date" placeholder="Date Naissance" name="DateNaissance" required>
          </div>
          <div class="input-box">
            <span class="details">Genre</span>
            <select class="ColectionRole" name="GenreColection" id="RolColection" required>
                <option value="">Interclassement Genre</option>
                <option value=""></option>
                <?php  foreach($GenreUtilisateur->get_Genre() as $genre){ ?>
                    <option value="<?php echo $genre["genreUtilisateur"]; ?>"><?php echo $genre["genreUtilisateur"]; ?></option>
                <?php }?>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Telephone</span>
            <input type="number" min="700000000" max="799999999" placeholder="Telephone Utilisateur" name="telephoneUtilisateur" required>
          </div>
          <div class="input-box">
            <span class="details">Adress</span>
            <select class="ColectionRole" name="addressUtilisateur" id="RolColection" required>
                <option value="">Interclassement Address</option>
                <option value=""></option>
                <?php  foreach($AddressPr->get_Addresse() as $addr){ ?>
                    <option value="<?php echo $addr["AddressG"]; ?>"><?php echo $addr["AddressG"]; ?></option>
                <?php }?>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Mot de passe</span>
            <input type="password" placeholder="mot de passe Utilisateur" name="motPasseUtilisateur" required>
          </div>
          <div class="input-box">
            <span class="details">Rôle</span>
            <select class="ColectionRole" name="RoleColection" id="RolColection" required>
                    <option value="">Interclassement Rôle</option>
                    <option value=""></option>
                <?php  foreach($RoleUtilisateur->get_Role() as $role){ ?>
                    <option value="<?php echo $role["Role_Compte"]; ?>">
                        <?php echo $role["Role_Compte"]; ?>
                    </option>
                <?php }?>
            </select>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Enrigistrer">
        </div>
      </form>
    </div>
  </div>


<?php 
    $_SESSION['Incorecte']=$champVide;
    include_once "DossierFooter/FooterPage.php"; 
?>