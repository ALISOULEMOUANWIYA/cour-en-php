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
    if($_GET['suptABLE']!==null  && $BDD!==null){ 
        $SuprimerTable = new ClassDelet($_GET['suptABLE'] ,$BDD);
        header("Location: ../pages/listEmp.php");
    }
?>