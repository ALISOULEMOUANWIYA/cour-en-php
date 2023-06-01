<?php 
       //------------------------------------------------------------
       spl_autoload_register(function($classeName){
           $path = "src/model/";
           $extension = ".php";
           $fullPath = $path.$classeName.$extension;
           if(!file_exists($fullPath)){
              return(false);
           }else{
              include_once $fullPath;
            spl_autoload_register(function($classeNameGet){
               $Classpath = "src/controller/";
               $Classextension = ".php";
               $ClassfullPath = $Classpath.$classeNameGet.$Classextension;
               if(!file_exists($ClassfullPath)){
                  return(false);
               }else{
                  include_once $ClassfullPath;
                  require_once "header.php";
               }
             });
           }
        });
           $DB = new ConnectionDB();
           $BDD = $DB->getConnexion();
           $int =0;
           $getServ = new ClassGet("service", $int, $BDD);
            $nomcmp= "";
            $prenomcmp= "";
            $servicecmp= "";
            $valeurCours=0;
            if(isset($_GET['mod'])){
                $getCompte = new ClassGet("", $_GET['mod'], $BDD);
                foreach($getCompte->getDonnerObtenue() as $emp){
                    $nomcmp = $emp['NomEmployer'];
                    $prenomcmp = $emp['PrenomEmployer'];
                    $servicecmp = $emp['ServiceEmployer'];
                    $valeurCours =1;
                }
            }
           require_once "src/controller/traitement.php";
           $BDD=null;
       //------------------------------------------------------------   
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
              <a href="#" >Accueille
                <i class="fa fa-home" aria-hidden="true"></i>
              </a>
            </li>
          <li>
              <a href="src/pages/listEmp.php">Gestion Employer
                <i class="fa fa-users" aria-hidden="true"></i>
              </a>
          </li> 
        </ul>
      </div>
    </nav>
  </div>
<br>
     <div class="contenue">
    <div class="title">Ajout d'un Compte Employer</div>
    <div class="contante row">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="user-details">
         
          <div class="input-box">
              <?php  if($valeurCours > 0):?>
            <span class="details">ID Compte : <?php echo $_GET['mod']; ?></span>
            <input type="hidden" value="<?php echo $_GET['mod']; ?>" placeholder="Id Compte <?php echo $_GET['mod']; ?>" name="idComp" >
              <?php  endif; ?>
          </div>
          
          <div class="input-box">
            <span class="details">Nom</span>
            <input type="text" value="<?php echo $nomcmp; ?>" placeholder="Nom Utilisateur" name="nomUtilisateur" required>
          </div>
          <div class="input-box">
            <span class="details">Prenom</span>
            <input type="text" value="<?php echo $prenomcmp;?>" placeholder="Prenom Ulisateur" name="prenomUtilisateu" required>
          </div>
          <div class="input-box">
            <span class="details">Service</span>
            <select class="ColectionRole" value="<?php echo $servicecmp; ?>" name="ServiceColection" id="RolColection" required>
                <option value="<?php echo $servicecmp;?>">
                    <?php if($valeurCours > 0){ echo $servicecmp; }else{ ?>Interclassement Service<?php } ?>
                </option>
                <option value=""></option>
                <?php  foreach($getServ->getDonnerObtenue() as $service){ ?>
                    <option value="<?php echo $service["NOmService"]; ?>"><?php echo $service["NOmService"]; ?></option>
                <?php }?>
            </select>
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
    </body>
</html>
  <script src="webfonts/js/all.js" crossorigin="anonymous"></script>
  <script src="bootstrap5/js/jquery-3.3.1.min.js"></script>
  <script src="bootstrap5/js/popper.min.js"></script>
  <script src="bootstrap5/js/bootstrap.min.js"></script>
  