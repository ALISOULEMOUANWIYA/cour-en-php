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
           $getServ = new ClassGet("service", $BDD);
           require_once "src/controller/traitement.php";
           $BDD=null;
       //------------------------------------------------------------   
?>
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Ajouter un Employer</h2>
                    <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="form-group">
                            <label for="nom" class="text-uppercase">Nom:</label>
                            <input type="text" name="nom"class="form-control btn-light" placeholder="Entrer le nom">

                        </div>
                        <div class="form-group">
                            <label for="Prenom" class="text-uppercase">Prenom:</label>
                            <input type="text"  name="prenom" class="form-control btn-light" placeholder="Entrer le prenom">
                        </div>
                        <div class="form-group">
                            <label for="service" class="text-uppercase">Service:</label>
                            <select name="service" placeholder="Entrer le service" class="form-control btn-light">
                            <option value="" selected>Choisir un service</option>
                                <?php  foreach($getServ->getDonnerObtenue() as $service){ ?>
                                    <option value="<?=$service['NOmService']?>"><?=$service['NOmService']?></option>
                                 <?php  } ?>
                            </select>
                        </div>

                        <div class="form-check">
                            <input type="submit" name="ajouter" value="Ajouter"class=" btn btn-secondary btn-lg">
                            <button> <a href="listEmp.php"> Annuller </a></button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    </body>
</html>