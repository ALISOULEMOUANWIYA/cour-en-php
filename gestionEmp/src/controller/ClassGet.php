<?php
   class ClassGet{
       private $donnerObtenue;
       function __construct($champAcces, $BDD){
           if(strcmp($champAcces,"service")==0){
              $requete = 'SELECT * FROM service ORDER BY NOmService';
              $exec = $BDD->query($requete);
              //recuperation de l'execution de la requete
              $this->donnerObtenue = $exec->fetchAll();
           }
           else{
              $requete = "SELECT * FROM employe ";
              $exec = $BDD->query($requete);
              //recuperation de l'execution de la requete
              $this->donnerObtenue = $exec->fetchAll();
           }
       }
       function getDonnerObtenue(){
           return($this->donnerObtenue);
       }   
   }
?>