<?php
   class ClasseSuprimerTable{
       function __construct($champAcces, $BDD){
           if(strcmp($champAcces,"suprimer")==0){
              $requete = 'DROP TABLE coffres ';
              $exec = $BDD->query($requete);
               //recration de la table 
              $requete = 'CREATE TABLE coffres(
                              ID_Coffres int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
                              Date_Debut_Coffres date , 
                              Date_fin_Coffres date, 
                              Duree_Coffres varchar(150) not Null, 
                              Cotisation_Coffres int(11) not null, 
                              Adherant_Coffres int(11) not null, 
                              Montant_Coffres int(11) not null, 
                              Contancte_Coffres int(11) not null
                          );';
              $exec = $BDD->query($requete);
               
           }  
   }
}
?>