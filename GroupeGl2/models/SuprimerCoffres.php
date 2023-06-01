<?php 
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
    if($_GET['sup'] > 0 && $BDD!==null){ 
//        echo $_GET['sup']; 
        $SuprimerCoffres = new classesuprimerCoffres($_GET['sup'] ,$BDD);
        header("Location: ../index.php");
    }
?>