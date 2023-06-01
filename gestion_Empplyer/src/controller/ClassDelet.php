<?php
   class ClassDelet{
       function __construct($champAcces, $BDD){
           if(strcmp($champAcces,"suprimer")==0){
              $requete = 'DROP TABLE employe ';
              $exec = $BDD->query($requete);
               //recration de la table 
              $requete = 'CREATE TABLE employe(IdEmpl int NOT NULL PRIMARY KEY AUTO_INCREMENT, NomEmployer varchar(150) NOT NULL, PrenomEmployer varchar(150) NOT NULL, ServiceEmployer varchar(150)  NOT NULL )';
              $exec = $BDD->query($requete);
               
           }  
   }
}
?>