<?php

    require_once 'Database.php';
  class clubModel{
    private $database;

    public function __construct(){
        $this->database = new Database();
    }
    public function inserer($prenom, $nom, $agentrer, $numeromaillot, $idclubef){
      $requete = "INSERT INTO joueur(prenom, nom, ageEntrer, NumeroMaillot, idclubf) VALUE(?, ?, ?, ?, ?)";
      $queryprepare = $this->database->getDBB()->prepare($requete);
      // Exécuter la requête 
      $queryprepare->execute(array($prenom, $nom, $agentrer, $numeromaillot, $idclubef));
      //return un boolan
      return($queryprepare);
    }

    public function liste(){
      $refrechirListe = "SELECT  j.prenom, j.nom, j.ageEntrer, j.NumeroMaillot, j.idclubf , f.idClube, f.nomClub
                          FROM joueur AS j JOIN
                          clubs AS f
                          ON j.idclubf = f.idClube
                          ORDER BY j.Prenom";
      $query = $this->database->getDBB()->prepare($refrechirListe);
      // Exécuter la requête 
      $query->execute();
      //return un boolan
      return($query->fetchAll());
    }
    public function listeClubs(){ 
      $requet = "SELECT * FROM clubs ORDER BY nomClub";
      $query = $this->database->getDBB()->prepare($requet);
      // Exécuter la requête 
      $query->execute();
      //return un boolan
      return($query->fetchAll());
    }

  }
?>