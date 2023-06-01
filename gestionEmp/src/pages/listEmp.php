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
                  require_once "headerListe.php";
               }
             });
           }
        });
           $DB = new ConnectionDB();
           $BDD = $DB->getConnexion();
           $getEmpl = new ClassGet("", $BDD);
//           $BDD = null;
?>
<div class="container">
    <div class="panel panel-info">
        <div class="panel panel-heading text-center mt-4 h4">LISTE DES EMPLOYERS</div>
        <div class="pane-body mt-4">
            <?php if(sizeof($getEmpl->getDonnerObtenue())!==0){ ?>
            <table class="table table-bordered table-hover table-stiped">
                <tr class="text-center">
                    <th class="text-center">ID</th>
                    <th class="text-center">NOM</th>
                    <th class="text-center">PRENOM</th>
                    <th class="text-center">SERVICE</th>
                    <th class="text-center">ACTION</th>
                </tr>
                <?php foreach($getEmpl->getDonnerObtenue() as $emp ){ ?>
                    <tr>
                        <td class="text-center"><?=$emp["IdEmpl"]?></td>
                        <td class="text-center"><?=$emp["NomEmployer"]?></td>
                        <td class="text-center"><?=$emp["PrenomEmployer"]?></td>
                        <td class="text-center"><?=$emp["ServiceEmployer"]?></td>
                        <td class="text-center">
                            <a href="../controller/SupresionCompte.php?sup=<?= $emp["IdEmpl"]; ?>"class="btn btn-sm btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <?php } ?>
        </div>
    </div>
    <button type="button" class="btn btn-primary boutonclasse">
        <a href="../../index.php" class="btn btn-primary">Ajouter un Employer</a>
    </button>
</div> 
</body>
</html>