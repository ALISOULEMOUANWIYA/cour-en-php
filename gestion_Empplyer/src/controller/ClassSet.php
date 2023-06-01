<?php
   class ClassSet{
       
       private $NomEmp;
       private $PrenomEmp;
       function __construct($prenom, $nom, $service, $id, $BDD){
              $id = (int)$id;
              if($nom !="" && $prenom !="" && $service !="" && $id == 0){ 
                if ($nom != ""){  
                    $this->NomEmp = $nom;
                    // verifier si le nom ne contient que des lettre et des espaces
                  if(!preg_match("/^[a-zA-Z-' ]*$/",$nom)){
                      $NomEmp = "";
                  }  
                }
           //------------------------------ 
                if ($prenom != ""){
                     $this->PrenomEmp = $prenom;   
                     // verifier si le prennom ne contient que des lettre et des espaces
                     if(!preg_match("/^[a-zA-Z-' ]*$/",$prenom)){
                       $PrenomEmp = "";    
                     }
                    
                 } 
          //--------------------------
                if($this->NomEmp !="" && $this->PrenomEmp !="" && $service !="" && $id == 0){
                     // ajouter employe
                      $requete = $BDD->prepare("INSERT INTO employe(NomEmployer, PrenomEmployer, ServiceEmployer)
                        VALUES(?, ?, ?)");
                      $requete->execute(array($this->NomEmp, $this->PrenomEmp, $service));
                 }
              }elseif($nom =="" && $prenom =="" && $id > 0){
                 // suprimer employer
                  $sql = "DELETE FROM employe WHERE IdEmpl= '$id'";

                  // use exec() because no results are returned
                  $BDD->query($sql);
            }else{
                if($nom !="" && $prenom !="" && $service !=""  && $id > 0){
                    if ($nom != ""){  
                        $this->NomEmp = $nom;
                        // verifier si le nom ne contient que des lettre et des espaces
                      if(!preg_match("/^[a-zA-Z-' ]*$/",$nom)){
                          $NomEmp = "";
                      }  
                    }
               //------------------------------ 
                    if ($prenom != ""){
                         $this->PrenomEmp = $prenom;   
                         // verifier si le prennom ne contient que des lettre et des espaces
                         if(!preg_match("/^[a-zA-Z-' ]*$/",$prenom)){
                           $PrenomEmp = "";    
                         }

                     } 
                    if($this->NomEmp !="" && $this->PrenomEmp !="" && $service !="" && $id > 0){
                    // Modifier employe
//                     echo $this->NomEmp."__".$this->PrenomEmp."__id = ".$id."__ service = ".$service;
                        $requete = "UPDATE  employe
                        SET NomEmployer = '$this->NomEmp',
                            PrenomEmployer = '$this->PrenomEmp',
                            ServiceEmployer = '$service'
                        where  IdEmpl ='$id' ";
                        $exec = $BDD->query($requete);
                     }
                 }else{
                  echo "Desoler une erreur est survenu au tretement des données ";
                 }
              }
       }
   }
?>