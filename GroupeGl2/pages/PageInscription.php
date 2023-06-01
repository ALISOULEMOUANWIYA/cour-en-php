<?php 
  session_start();

if((strcmp(trim($_SESSION['Incorecte']), "")==0)){
   echo $_SESSION['Incorecte'] ;
}
    include_once "listeHeader/HeaderInscription.php";
    require_once '../models/Role_Compte.php';
    require_once '../models/traitementClasseAjouterCompte.php';
//    require_once '../models/trementConnexion.php';
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
              <a href="../index.php">Accueille
                <i class="fa fa-users" aria-hidden="true"></i>
              </a>
            </li>
          <li>
            <a href="FichieAppa.php" class="">Coffres
               <i class="fa fa-archive" aria-hidden="true"></i>  
            </a>
          </li>
          <li>
              <a href="#">infos Page
               <i class="fa fa-hdd-o" aria-hidden="true"></i>
              </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
     <div class="forms-container classInscription">
        <div class="signin-signup classeType">
<!--            -->
          <form action="../models/trementConnexion.php" method="post" class="sign-in-form claseForm">
            <a href="#" class="iconeUt">
                <i class="fa fa-user"></i>
            </a>
            <h2 class="title"><?php if(strcmp(trim($_SESSION['Incorecte']), "")==0){?>Se connecter<?php }else{ echo $_SESSION['Incorecte']; }?></h2>
            <div class="input-field classeInput">
                <a href="#" class="UtIcone">
                  <i class="fa fa-user"></i>
                </a>
              <input type="text" placeholder="<?php if(strcmp(trim($_SESSION['Incorecte']), "")==0){?>Nom Utilisateur<?php }else{ echo " Incorecte ?"; }?>" name="NomCompte"/>
            </div>
            <div class="input-field">
              <a href="#" class="UtIcone">
                  <i class="fa fa-lock"></i>
              </a>
              <input type="password" placeholder="<?php if(strcmp(trim($_SESSION['Incorecte']), "")==0){?>Mot de passe Utilisateur<?php }else{ echo " Incorecte ?"; }?>" name="MotPasse"/>
            </div>
            <input type="submit" value="Login" class="solid" name="Connecter"/>
            <p class="social-text">Ou bien Connectez-vous avec : </p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
<!--            -->
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="sign-up-form">
            <h2 class="title">Creer un compte</h2>
            <div class="input-field">
              <a href="#" class="UtIcone">
                  <i class="fas fa-user"></i>
              </a>
              <input type="text" placeholder="Prenom Utilisateur" name="PrenomUtilisateur" />
            </div>
            <div class="input-field">
              <a href="#" class="UtIcone">
                  <i class="fas fa-user"></i>
              </a>
              <input type="text" placeholder="Nom Utilisateur" name="NomUtilisateur" />
            </div>
            <div class="input-field">
              <a href="#" class="UtIcone">
                  <i class="fas fa-envelope"></i>
              </a>
              <input type="email" placeholder="Email" name="EmailCompte"/>
            </div>
            <div class="input-field">
              <a href="#" class="UtIcone">
                  <i class="fas fa-lock"></i>
              </a>
              <input type="password" placeholder="Password" name="motDepasse"/>
            </div>
            <input type="submit" class="solid" value="Sign up" />
            <p class="social-text">Ou bien Connectez-vous avec :</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
<!--      -->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Vous en avez pas ?</h3>
            <p>
              Ici Vous pouvez creer un compte  d'adhesion
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Creer
            </button>
          </div>
          <img src="../public/images/log.svg" class="image" alt="" />
        </div>
<!--          -->
        <div class="panel right-panel">
          <div class="content">
            <h3>Vous avez deja un ?</h3>
            <p>
              Alors, Utiliser le pour vous connectez.<p>si non Continuer la creation du compte 
            </p>
            <button class="btn transparent" id="sign-in-btn">
              retourner
            </button>
          </div>
          <img src="../public/images/register.svg" class="image" alt="" />
        </div>
      </div>
  </div>
<?php 
    $_SESSION['Incorecte']="";
    include_once "DossierFooter/FooterPage.php"; 
?>
