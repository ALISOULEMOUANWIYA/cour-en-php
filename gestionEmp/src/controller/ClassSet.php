<?php
   class ClassSet{
       
       private $NomEmp;
       private $PrenomEmp;
       function __construct($nom, $prenom, $service, $id, $BDD){
              if($nom !="" && $prenom !="" && $service !=""){ 
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
                 if($this->NomEmp !="" && $this->PrenomEmp !="" && $service !=""){
                    // ajouter employe
                      $requete = $BDD->prepare("INSERT INTO employe(NomEmployer, PrenomEmployer, ServiceEmployer)
                      VALUES(?, ?, ?)");
                      $requete->execute(array($this->NomEmp, $this->PrenomEmp, $service));
                 }
              }elseif($id > 0){
                 // suprimer employer
                  $id = (int)$id;
                  $sql = "DELETE FROM employe WHERE IdEmpl= '$id'";

                  // use exec() because no results are returned
                  $BDD->query($sql);

            }
       }
   }
?>