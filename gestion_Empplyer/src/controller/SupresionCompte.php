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
            spl_autoload_register(function($classeNameSet){
               $Classpath = "";
               $Classextension = ".php";
               $ClassfullPath = $Classpath.$classeNameSet.$Classextension;
               if(!file_exists($ClassfullPath)){
                  return(false);
               }else{
                  include_once $ClassfullPath;
               }
             });
           }
        });
           $DB = new ConnectionDB();
           $BDD = $DB->getConnexion();
    $prenomEmp = $NomEmp = $ServiceEmp = "";
    if($_GET['sup'] > 0 && $BDD!==null){ 
        $SuprimerCompt = new ClassSet($prenomEmp, $NomEmp, $ServiceEmp,$_GET['sup'] ,$BDD);
        header("Location: ../pages/listEmp.php");
    }
?>