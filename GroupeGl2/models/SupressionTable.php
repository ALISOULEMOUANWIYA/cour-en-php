<?php 
       //------------------------------------------------------------
require_once 'datasource.php';
       spl_autoload_register(function($classeName){
           $path = "";
           $extension = ".php";
           $fullPath = $path.$classeName.$extension;
           if(!file_exists($fullPath)){
              return(false);
           }else{
              include_once $fullPath;
           }
        });
    if($_GET['suptABLE']!==null  && $BDD!==null){ 
        $SuprimerTable = new ClasseSuprimerTable($_GET['suptABLE'] ,$BDD);
        header("Location: ../index.php");
    }
?>