<?php
  
  require_once "Entites/serveur.classe.php";
  require_once "Entites/service.classe.php";

  // instanciation de la classe serveur

  $serveur1 = new Serveur();
  $serveur1->setIdServ(1);
  $serveur1->setNomServ("ISIFASS");
  $serveur1->setAdripServ("192.168.12.50");

  echo $serveur1->getIdServ()." ".$serveur1->getNomServ()." ".$serveur1->getAdripServ();
  echo "<br>";
  $serveur2 = new Serveur(2, "ISIKEURMASSAR", "192.168.12.51");
  afficherServeur($serveur2);
  function afficherServeur($serveur2){
    echo $serveur2->getIdServ()." ".$serveur2->getNomServ()." ".$serveur2->getAdripServ();
  }
  

  // instanciation de la classe service
  $service1 = new Service();
  $service1->setIdS(1);
  $service1->setNomS("SMTP");
  $service1->setPortS(25);
  $service1->setEtatS("active ");
  $service1->setServeur($serveur2);
  echo "<br>";
  echo $service1->getIdS()." ".$service1->getNomS()
                          ." ".$service1->getPortS()
                          ." ".$service1->getEtatS()
                          ." ".$service1->getServeur()->getNomServ();
    // afficherServeur($service1->getServeur());


?>