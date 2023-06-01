<?php
    require_once '../../models/dataSource.php';

   if(isset($_GET["idDomaine"])){
         $id = $_GET["idDomaine"];
         $req = "SELECT * FROM sujet WHERE idDomaine = $id";
         global $ds;

        //Executer la requete
        $exe = $ds ->query($req);
        $sujet = $exe -> fetchAll();
       if(empty($sujet)){
           echo json_encode("0");
       }else{
           echo json_encode($sujet);
       }
   }
?>